<?php

class AdminController extends BaseController {

	public function upload_image($file, $ruta)
	{
		$extension = File::extension($file->getClientOriginalName());
		$time = time();
		$miImg = $time.'.'.$extension;
		while (file_exists($ruta.'/'.$miImg)) {
			$time = time();
			$miImg = $time.'.'.$extension;
		}
        $file->move($ruta,$miImg);
        return $miImg;
	}
	public function getLogin()
	{
		$title = "Inicio de sesión | Funda Epékeina";
		return View::make('admin.login')
		->with('title',$title);
	}
	public function postLogin()
	{
		$data  = Input::all();
		$rules = array(
			'username' => 'required',
			'password' => 'required',
		); 
		$msg = array(
		);
		$attr = array(
			'username' => 'usuario',
			'password' => 'contraseña',
		);
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$username = Input::get('username');
		$password = Input::get('password');
		$remember = 1;
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'active'   => 1,
		);
		if(Auth::attempt($data, $remember)){
			return Redirect::to('administrador/');
		}else
		{
			Session::flash('danger','Usuario o contraseña incorrectos.');
			return Redirect::back();
		}
	}
	public function getIndex()
	{
		$title = "Inicio | Administrador Funda Epékeina";
		return View::make('admin.index')
		->with('title',$title);
	}
	function getChangePass()
	{
		$title = "Cambiar contraseña";
		return View::make('admin.changePass')
		->with('title',$title);
	}
	public function postUserNewPass()
	{
		$data = Input::all();
		Validator::extend('checkCurrentPass', function($attribute, $value, $parameters)
		{
		    if( ! Hash::check( $value , $parameters[0] ) )
		    {
		        return false;
		    }
		    return true;
		});
		$rules = array(
			'password_old' 			=> 'required|checkCurrentPass:'.Auth::user()->password,
			'password'	   			=> 'required|min:4|max:16|confirmed',
			'password_confirmation' => 'required',
		);
		$msg = array();
		$cust = array(
			'password_old' 			=> 'contraseña actual',
			'password'	   			=> 'nueva contraseña',
			'password_confirmation' => 'confirmación de la contraseña'
		);
		$validator = Validator::make($data, $rules, $msg, $cust);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		}

		$user = User::find(Auth::id());
		$user->password = Hash::make($data['password']);
		if ($user->save()) {
			Session::flash('success','Se ha cambiado su contraseña satisfactoriamente.');
			return Redirect::back();
		}
	}
	public function getNewArticulo($value='')
	{
		$title = "Nuevo Artículo | Funda Epékeina";
		$sede = Tipo::get();
		return View::make('admin.article.new')
		->with('title',$title)
		->with('sede',$sede);
	}
	public function postNewArticulo()
	{
		$data 	= Input::all();
		$rules 	= array(
			'sede'			=> 'required',
			'title'    		=> 'required|max:100',
			'desc' 	   		=> 'required',
			'file'	   	 	=> 'required|min:1',
		);
		$msg 	= array(
		);
		$attr 	= array(
			'sede'			=> 'sede',
			'desc'	   		=> 'descripción',
			'file'	   		=> 'imagen',

		); 
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$art = new Articulo;
		$art->cat_id      = $data['cat'];
		$art->tipo        = $data['sede'];
		$art->title       = $data['title'];
		$art->descripcion = $data['desc'];
		$art->created_by  = Auth::id();
		$art->modified_by = Auth::id();
		$art->save();
		if ($data['sede'] == 3) {
			$sub = new Subtitle;
			$sub->articulo_id = $art->id;
			$sub->subtitulo   = $data['subtitle'];
			$sub->save();
		}
		$id = $art->id;
		$file = Input::file();
		$ruta 	 = "images/news/";
		foreach($file['file'] as $f)
		{
			$img = new NewsImages;
			$img->articulo_id = $id;
			$img->image   	  = $this->upload_image($f, $ruta);
			$img->save();
		}

		Session::flash('success','Articulo creado satisfactoriamente.');
		return Redirect::back();

	}
	public function showArticulos()
	{
		$title = "Ver articulos | Funda Epékeina";
		$article = Articulo::orderBy('id','DESC')->get();
		return View::make('admin.article.show')
		->with('title',$title)
		->with('article',$article);

	}
	public function showArt($id)
	{
		$articulo = Articulo::with('imagenes')->find($id);
		$title = "Ver artículo: ".$articulo->title." | Funda Epékeina";
		return View::make('admin.article.view')
		->with('title',$title)
		->with('articulo',$articulo);
	}
	public function getProy()
	{
		$id = Input::get('id');
		$cat = Categoria::where('tipo','=',$id)->get();
		return Response::json(array(
			'data' => $cat,
			'type' => 'success',
			
		));
	}
	public function elimArticulo()
	{
		$id = Input::get('id');
		if (is_null($id) || empty($id)) {
			return Response::json(array(
				'type' => 'danger',
				'msg'  => 'Error, debe existir el id del articulo',
			));
		}
		$img = NewsImages::where('articulo_id','=',$id);
		foreach ($img->get() as $i) {
			File::delete('images/news/'.$i->image);
		}
		$img->delete();
		$art = Articulo::find($id)->delete();
		return Response::json(array(
			'type' => 'success',
			'msg' => 'Se ha eliminado el articulo',
		));
	}
	public function getModifyArt($id)
	{
		$article = Articulo::leftJoin('categorias','categorias.id','=','articulos.cat_id')
		->where('articulos.id','=',$id)
		->with('imagenes')
		->with('subtitle')
		->first(array(
			'articulos.id',
			'articulos.title',
			'articulos.descripcion',
			'articulos.cat_id',
			'articulos.created_at',
			'categorias.tipo'
		));
		$title = "Modificar articulo: ".$article->title;
		$cat = Categoria::where('tipo','=',$article->cat_id)->get();
		$sede = Tipo::get();
		return View::make('admin.article.mdf')
		->with('title',$title)
		->with('article',$article)
		->with('cat',$cat)
		->with('sede',$sede);
	}
	public function postMdfArt()
	{
		$data 	= Input::all();
		$rules 	= array(
			'sede'			=> 'required',
			'title'    		=> 'required|max:100',
			'desc' 	   		=> 'required',
		);
		$msg 	= array(
		);
		$attr 	= array(
			'sede'			=> 'sede',
			'desc'	   		=> 'descripción',

		); 
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$art = Articulo::find($data['id']);
		$art->cat_id      = $data['cat'];
		$art->tipo        = $data['sede'];
		$art->title       = $data['title'];
		$art->descripcion = $data['desc'];
		$art->modified_by = Auth::id();
		$art->save();
		if ($data['sede'] == 3) {
			Subtitle::where('articulo_id','=',$art->id)->delete();
			$sub = new Subtitle;
			$sub->articulo_id = $art->id;
			$sub->subtitulo   = $data['subtitle'];
			$sub->save();
		}
		if (Input::hasFile('file')) {
			$ruta 	 = "images/news/";
			$file = Input::file();
			foreach($file['file'] as $id => $i)
			{
				if (!is_null($i)) {
					$img = NewsImages::find($id);
					if (empty($img)) {
						$img = new NewsImages;
						$img->articulo_id = $data['id'];
					}else
					{
						File::delete('images/news/'.$img->image);
					}
					$img->image   = $this->upload_image($i, $ruta);
					$img->save();
				}
			}
		}
		Session::flash('success','Articulo modificado satisfactoriamente.');
		return Redirect::back();
	}
	public function changeStatus()
	{
		$id = Input::get('id');
		$art = Articulo::find($id);
		if ($art->state == 0) {
			$art->state = 1;
		}else
		{
			$art->state = 0;
		}
		$art->save();
		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Estado cambiado',
			'state'=> $art->state,
		));
	}
	public function elimImg()
	{
		$id = Input::get('img_id');
		$i  = NewsImages::find($id);
		File::delete('images/news/'.$i->image);
		$aux = NewsImages::where('id','=',$id)->delete();
		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Se ha borrado la imagen satisfactoriamente.',
		));
	}
	public function newUser()
	{
		$title = "Nuevo Usuario | Funda Epékeina";
		$roles = Role::get();
		return View::make('admin.users.new')
		->with('title',$title)
		->with('role',$roles);
	}
	public function postNewUser()
	{
		$data  = Input::all();
		$rules = array(
			'username' => 'required|min:4|max:16|unique:users,username',
			'password' => 'required|min:6|max:32|confirmed',
			'role'	   => 'required|exists:roles,id'
		); 
		$msg  = array();
		$attr = array(
			'username' => 'nombre de usuario',
			'password' => 'contraseña',
			'role'	   => 'rol',
		);
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$user = new User;
		$user->username = $data['username'];
		$user->password = Hash::make($data['password']);
		$user->role     = $data['role'];
		$user->active   = 1;

		if ($user->save()) {
			Session::flash('success', 'Se ha creado el usuario satisfactoriamente.');
			return Redirect::back();
		}
	}
	public function getUsers()
	{
		$title = "Ver usuarios | Funda Epékeina";
		$users = User::where('role','!=',1)->get(); 
		return View::make('admin.users.show')
		->with('title',$title)
		->with('users',$users);
	}
	public function chageUserPass($id)
	{
		$title = "Cambiar contraseña | Funda Epékeina";
		$user = User::find($id);
		return View::make('admin.users.changePass')
		->with('title',$title)
		->with('user',$user);
	}
	public function postChangePass($id)
	{
		$data = Input::all();
		$rules = array(
			'password'	   			=> 'required|min:4|max:16|confirmed',
		);
		$msg = array();
		$cust = array(
			'password'	   			=> 'nueva contraseña',
		);
		$validator = Validator::make($data, $rules, $msg, $cust);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		}
		$user = User::find($id);
		$user->password = Hash::make($data['password']);
		if ($user->save()) {
			Session::flash('success','Se ha cambiado su contraseña satisfactoriamente.');
			return Redirect::back();
		}
	}
	public function elimUser()
	{
		$id = Input::get('user_id');
		$user = User::find($id)->delete();
		if ($user) {
			return Response::json(array(
				'type' => 'success',
				'msg'  => 'Se ha eliminado el usuario satisfactoriamente.',
			));
		}else
		{
			return Response::json(array(
				'type' => 'danger',
				'msg'  => 'Error al eliminar el usuario.',
			));
		}
	}
	public function getLogout()
	{
		Session::flash('success','Se ha cerrado sesión satisfactoriamente.');
		Auth::logout();
		return Redirect::to('administrador/login');
	}
	public function getNewCat()
	{
		$title = "Nueva galería | Funda Epékeina";

		return View::make('admin.gallery.newCat')
		->with('title',$title);
	}
	public function checkImg()
	{
		$data = Input::all();
		$rules = array(
			'file' => 'required|min:20|max:3000'
		);
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
			return Response::json(array(
				'type' => 'danger',
				'data' => $validator->getMessageBag()
			));
		}
		return Response::json(array(
			'type' => 'success'
		));
	}
	public function postNewCat()
	{
		$data = Input::all();

		$rules = array(
			'name' => 'required|min:4|max:45',
			'icon' => 'image|max:3000',
			'files.*.file' => 'images|min:20|max:3000',
		);
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
			return $validator->getMessageBag();
		}
		if(Input::has('files'))
		{
			$gal = new Gallery;
			$gal->name = $data['name'];
			$gal->icon = $this->upload_image(Input::file('icon'), 'images/gallery/icon');
			$gal->updated_by = Auth::id();
			$ruta = "images/gallery/".$gal->name;
			if ($gal->save()) {
				foreach ($data['files'] as $f) {
					$img_gal = new GalleryImage;
					$img_gal->gallery_id = $gal->id;
					$img_gal->image = $this->upload_image($f, $ruta);
					$img_gal->save();
				}
			}
			return Redirect::to('administrador/galeria/ver-galerias');
		}
			return Redirect::back();
	}
	public function getGalleries()
	{
		$title = "Ver galerias | Funda Epékeina";
		$gal = Gallery::with('imgCount')->get();
		return View::make('admin.gallery.show')
		->with('gal',$gal)
		->with('title',$title);
	}
	public function addImages($id = null)
	{
		$title = "Agregar imagenes | Funda Epékeina";
		$gal   = Gallery::get(); 
		$view  = View::make('admin.gallery.addImages')
		->with('title',$title)
		->with('gal',$gal);
		if (!is_null($id)) {
			$view = $view->with('id',$id);
		}
		return $view;
	}
	public function postNewImage()
	{
		$gal_id = Input::get('gal_id');
		$gal = Gallery::find($gal_id);
		if (count($gal) > 0) {
			$data = Input::all();
			$ruta = "images/gallery/".$gal->name;
			foreach ($data['files'] as $f) {
				$img_gal = new GalleryImage;
				$img_gal->gallery_id = $gal->id;
				$img_gal->image = $this->upload_image($f, $ruta);
				$img_gal->save();
			}
			Session::flash('success', 'Se han agregado las imagenes satisfactoriamente.');
			return Redirect::back();
		}else
		{
			Session::flash('danger', 'Error, no se encontra la galeria');
			return Redirect::back();
		}
	}
	public function showGallery($type,$id)
	{

		if ($type == 'ver-galeria') {
			$title = "Ver galería | Funda Epékeina";
			$template = 'admin.gallery.showGallery';
		}elseif($type == "editar-galeria")
		{
			$title = "Editar galería | Funda Epékeina";
			$template = 'admin.gallery.editGallery';
			$gallery = Gallery::get();
		}
		$gal   = Gallery::with('imagenes')->find($id);
		$view = View::make($template)
		->with('title',$title)
		->with('gal',$gal);
		return $view;
	}
	public function postMdfGal()
	{
		$data = Input::all();
		$gal = Gallery::find($data['gal_id']);
		$ruta = "images/gallery/".$gal->name;
		if (Input::hasFile('icon')) {
			$gal->icon = $this->upload_image(Input::file('icon'), 'images/gallery/icon');
		}
		if (!is_null($data['files'][0])) {
			foreach ($data['files'] as $f) {
				$img_gal = new GalleryImage;
				$img_gal->gallery_id = $gal->id;
				$img_gal->image = $this->upload_image($f, $ruta);
				$img_gal->save();
			}
		}
		if (isset($data['img']) > 0) {
			foreach ($data['img'] as $j => $i) {
				$imgGal = GalleryImage::find($i);
				File::delete($ruta.'/'.$imgGal->image);
				$imgGal->delete();
			}
		}
		$gal->save();
		Session::flash('success','se ha modificado la galeria');
		return Redirect::back();
	}
	public function elimGallery()
	{
		$id = Input::get('id');
		$gallery = Gallery::find($id); 
		$aux = GalleryImage::where('gallery_id','=',$id);
		$rows = $aux->get();
		foreach ($rows as $r) {
			File::delete('images/gallery/'.$gallery->name.'/'.$r->image);
		}
		$aux->delete();
		$gallery->delete();
		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Se ha eliminado la galería'
		));
	}
}