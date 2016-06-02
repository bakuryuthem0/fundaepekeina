<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$title = "Inicio | Fundaepekeina";
		$article = Articulo::with('imagenes')->orderBy('created_at','DESC')->take(6)->get();
		$active = "inicio";
		return View::make('home.index')
		->with('active',$active)
		->with('title',$title)
		->with('article',$article);
	}
	public function getAbout()
	{
		$title = "Quienes Somos | Fundaepekeina";
		$active = "about";
		return View::make('home.about')
		->with('active',$active)
		->with('title',$title);
	}
	public function getArticleSelf($type,$id = null)
	{
		if (is_numeric($type)) {
			$id   = $type;
			$type = 'sedes/proyectos'; 
		}
		$article = Articulo::leftJoin('categorias','categorias.id','=','articulos.cat_id')
		->where('articulos.id','=',$id)
		->with('imagenes')
		->first(array(
			'articulos.id',
			'articulos.title',
			'articulos.descripcion',
			'articulos.created_at',
			'categorias.tipo'
		));

		$request = Request::instance();
		$request->setTrustedProxies(array('127.0.0.1')); // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
		$ip = $request->getClientIp();
		$aux = Like::where('articulo_id','=',$id)->where('ip','=',$ip)->get();
		if (count($aux) > 0) {
			$fa = 'fa-heart';
		}else
		{
			$fa = 'fa-heart-o';
		}

		$title   = "Noticia: ".$article->title." | Fundaepekeina";
		$view = View::make('home.articles.article')
		->with('article',$article)
		->with('type',$type)
		->with('title',$title)
		->with('fa',$fa);



		if ($type == 'proyectos' || $type == "sedes") {
			$view = $view->with('subtitle','Noticias')
			->with('active','noticias');
			if ($article->tipo == 1) {
				return $view->with('menu','1');
			}else
			{
				return $view->with('menu','2');
			}
		}else
		{
			return $view->with('subtitle','¿Que hacemos?')
				->with('active','about')
				->with('menu','all');
		}
	}
	public function getNews()
	{
		$title = "Noticias por proyectos | Fundaepekeina";

		$article = Articulo::with('imagenes')->with('likeCount')
		->orderBy('articulos.created_at','DESC')
		->paginate(6,array(
			'articulos.id',
			'articulos.title',
			'articulos.descripcion',
			'articulos.created_at',
		));
		return View::make('home.articles.index')
		->with('title',$title)
		->with('article',$article)
		->with('active','noticias')
		->with('subtitle','Noticias')
		->with('url','noticias')
		->with('type','sedes/proyectos')
		->with('menu','all');

	}

	public function getNewsType($type)
	{
		
		$article = Articulo::with('imagenes')->with('likeCount');
		if ($type == 'proyectos') {
			$article = $article->leftJoin('categorias','categorias.id','=','cat_id')
			->where('categorias.tipo','=','2')
			->orderBy('articulos.created_at','DESC')
			->paginate(6,array(
				'articulos.id',
				'articulos.title',
				'articulos.descripcion',
				'articulos.created_at',
			));
		}elseif($type == 'sedes')
		{
			$article = $article->orderBy('articulos.created_at','DESC')
			->paginate(6,array(
				'articulos.id',
				'articulos.title',
				'articulos.descripcion',
				'articulos.created_at',
			));
		}elseif($type == "que-hacemos")
		{
			$article = Articulo::where('cat_id','=','4')->orderBy('created_at','DESC')->paginate(6);
		}

		$title = "Noticias por ".$type." | Fundaepekeina";
		$view = View::make('home.articles.index')
		->with('title',$title)
		->with('article',$article)
		->with('type',$type);
		if ($type == 'proyectos') {
			return $view->with('menu','2')
			->with('active','noticias')
			->with('subtitle','noticias')
			->with('type','proyectos');
		}elseif($type == 'sedes')
		{
			return $view->with('menu','1')
			->with('active','noticias')
			->with('subtitle','noticias')
			->with('type','sedes');
		}
		elseif($type == 'que-hacemos')
		{
			return $view->with('menu','all')
			->with('active','about')
			->with('subtitle','¿Que hacemos?')
			->with('type','que-hacemos');
		}

	}
	public function getByCat($type,$id)
	{

		$article = Articulo::with('imagenes');
		if ($type == 'proyectos') {
			$article = $article->leftJoin('categorias','categorias.id','=','cat_id')
			->where('categorias.tipo','=','2')
			->where('articulos.cat_id','=',$id)
			->orderBy('articulos.created_at','DESC')
			->paginate(6,array(
				'articulos.id',
				'articulos.title',
				'articulos.descripcion',
				'articulos.created_at',
			));
		}elseif($type == 'sedes')
		{
			$article = $article
			->where('articulos.cat_id','=',$id)
			->orderBy('articulos.created_at','DESC')
			->paginate(6,array(
				'articulos.id',
				'articulos.title',
				'articulos.descripcion',
				'articulos.created_at',
			));
		}
		$title = "Noticias por ".$type." | Fundaepekeina";
		$view = View::make('home.articles.index')
		->with('title',$title)
		->with('article',$article)
		->with('type',$type);

		if ($type == 'proyectos') {
			return $view->with('menu','2')
			->with('active','noticias')
			->with('subtitle','noticias')
			->with('type','proyectos');
		}elseif($type == 'sedes')
		{
			return $view->with('menu','1')
			->with('active','noticias')
			->with('subtitle','noticias')
			->with('type','sedes');
		}
		elseif($type == 'que-hacemos')
		{
			return $view->with('menu','all')
			->with('active','about')
			->with('subtitle','¿Que hacemos?')
			->with('type','que-hacemos');
		}

	}
	public function getGallery()
	{
		$title = "galleria";
		return View::make('home.gallery')
		->with('title',$title)
		->with('active','galeria');
	}
	public function getContact()
	{
		$title = "Contactenos | Fundaepekeina";
		return View::make('home.contact')
		->with('active','contacto')
		->with('title',$title);
	}
	public function postContact()
	{
		$data  = Input::all();
		$rules = array(
			'name' 		=> 'required|min:3|max:16',
			'subject'	=> 'required|min:3|max:64',
			'email'		=> 'required|email',
			'msg'		=> 'required|min:4|max:1000',
		); 
		$msg = array();
		$attr = array(
			'name' 		=> 'nombre',
			'subject'	=> 'asunto',
			'msg'  		=> 'mensaje',
		);
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Response::json(array(
				'type' => 'danger',
				'data' => $validator->getMessageBag()->toArray(),
				'msg'  => 'Error al validar los datos', 
			));
		}
		$datos = array(
			'subject' 	=> $data['subject'],
			'from' 		=> $data['email'],
			'fecha' 	=> date('Y/m/d H:i:s'),
			'email' 	=> $data['email'],
			'msg'	=> $data['msg'],
			'name'  	=> $data['name']
			);

		Mail::send('emails.envia', $datos, function($message) use ($data)
		{
			$message->to('fundaepekeina@gmail.com')->from($data['email'])->subject($data['subject']);
		});

		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Correo enviado satisfactoriamente, pronto nos pondremos en contacto con usted.',
		));
	}
	public function getOrg()
	{
		$title = "Organigrama | Fundaepekeina";
		return View::make('home.organigrama')
		->with('active','about')
		->with('title',$title);
	}
	public function updatePassword()
	{
		return Hash::make('clave');		
	}
	public function getNewSubscriber()
	{
		$data = Input::all();
		$rules = array(
			'email' => 'required|email|unique:suscriptores,email',
		);
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
			return Response::json(array(
				'type' => 'danger',
				'data' => $validator->getMessageBag()->toArray()
			));
		}
		$sus = new Subscriber;
		$sus->email = $data['email'];
		if ($sus->save()) {
			
			Mail::send('emails.sub', $data, function ($message) use ($data){
			    $message->subject('Correo de suscripción a fundaepekeina.org');
			    $message->from('noreply@fundaepekeina.org');
			    $message->to($data['email']);
			});
		}

		return Response::json(array(
			'type' => 'success',
			'msg'  => 'enviar enviado correctamente.',			
		));

	}
	public function getDonation()
	{
		$title = "Donaciones | Fundaepekeina";
		return View::make('home.donations')
		->with('title',$title)
		->with('active','contacto');
	}
	public function getSupport()
	{
		$title = "Apoyenos | Fundaepekeina";
		return View::make('home.support')
		->with('title',$title)
		->with('active','contacto');
	}
	public function getMap()
	{
		$title = "Localización | Fundaepekeina";
		return View::make('home.map')
		->with('title',$title)
		->with('active','about');
	}
	public function getLike()
	{
		$request = Request::instance();
		$request->setTrustedProxies(array('127.0.0.1')); // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
		$ip = $request->getClientIp();
		$art_id = Input::get('art_id');

		$aux = Like::where('articulo_id','=',$art_id)->where('ip','=',$ip)->get();
		if (count($aux) > 0) {
			return Response::json(array(
				'type' => 'danger',
				'msg'  => 'Ya a usted le gusta esto.'
			));
		}
		$like = new Like;
		$like->articulo_id = $art_id;
		$like->ip = $ip;
		$like->save();
		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Gracias por su aporte'
		));
	}
	public function getEmail()
	{
		return View::make('emails.sub');
	}
}
