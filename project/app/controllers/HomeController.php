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
		$title = Lang::get('lang.home_title');
		$article = Articulo::with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->where('state','=',1)
		->where('articulos.cat_id','!=',4)
		->orderBy('created_at','DESC')->take(6)->get();
		$active = "inicio";
		return View::make('home.index')
		->with('active',$active)
		->with('title',$title)
		->with('article',$article);
	}
	public function getAbout()
	{
		$title = Lang::get('lang.about_menu')." | Funda Epékeina";
		$active = "about";
		return View::make('home.about')
		->with('active',$active)
		->with('title',$title);
	}
	public function getHistories()
	{
		$title = Lang::get('lang.history_menu')." | Funda Epékeina";
		$active = "about";
		$hist = Articulo::where('tipo','=',6)
		->with('subtitle')
		->with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->get();
		return View::make('about.show')
		->with('title',$title)
		->with('active',$active)
		->with('hist',$hist);
	}
	public function getHistory($slug)
	{
		$title = Lang::get('lang.history_menu')." | Funda Epékeina";
		$active = "about";
		$hist = Articulo::whereHas('slugs',function($slugs) use ($slug)
		{
			$slugs->where('text','=',$slug);
		})
		->with('subtitle')
		->with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->first();

		return View::make('about.history')
		->with('title',$title)
		->with('active',$active)
		->with('hist',$hist);
	}
	public function getArticleSelf($type,$slug = null)
	{
		if (is_numeric($type)) {
			$slug = $type;
			$type = 'sedes/proyectos'; 
		}
		$lang  = LangController::getActiveLang();
		//find slug entry
		$entry = TranslationEntry::where('text','=',$slug)
		->where('lang_id','=',$lang->id)
		->first();
		return $slug;
		return $entry;
		$article = Articulo::with('categorias')
		->with('imagenes')
		->with('descriptions')
		->with('titles')
		->where('slug','=',$entry->translation_id)
		->where('state','=',1)
		->first();

		$request = Request::instance();
		$request->setTrustedProxies(array('127.0.0.1')); // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
		$ip = $request->getClientIp();
		$aux = Like::where('articulo_id','=',$article->id)->where('ip','=',$ip)->get();
		if (count($aux) > 0) {
			$fa = 'fa-heart';
		}else
		{
			$fa = 'fa-heart-o';
		}

		$title   = Lang::get('lang.news_menu').": ".$article->titles->first()->text." | Funda Epékeina";
		$view = View::make('home.articles.article')
		->with('article',$article)
		->with('type',$type)
		->with('title',$title)
		->with('fa',$fa);


		switch ($type) {
			case 'proyectos':
				$view = $view->with('subtitle',Lang::get('lang.news_menu'))
				->with('active','noticias')
				->with('type',Lang::get('lang.projects'));
				if ($article->tipo == 1) {
					return $view->with('menu','1');
				}else
				{
					return $view->with('menu','2');
				}
				break;
			case 'sedes':
				$view = $view->with('subtitle',Lang::get('lang.news_menu3'))
				->with('active','noticias')
				->with('type',Lang::get('lang.projects'));
				if ($article->tipo == 1) {
					return $view->with('menu','1');
				}else
				{
					return $view->with('menu','2');
				}
				break;
			default:
				return $view->with('subtitle',Lang::get('lang.about_menu3'))
				->with('active','about')
				->with('menu','all');
				break;
		}
	}
	public function getNews()
	{
		$title = Lang::get('lang.news_by')." ".Lang::get('lang.projects')." | Funda Epékeina";
		$article = Articulo::with('imagenes')
		->with('likeCount')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->where('state','=',1)
		->where('cat_id','!=',4)
		->orderBy('created_at','DESC')
		->paginate(6);
		return View::make('home.articles.index')
		->with('title',$title)
		->with('article',$article)
		->with('active','noticias')
		->with('subtitle',Lang::get('lang.news_menu'))
		->with('url','noticias')
		->with('type',Lang::get('lang.sedes').'/'.Lang::get('lang.proyectos'))
		->with('menu','all');

	}

	public function getNewsType($type)
	{
		if (!is_null($type)) {
			$tipo = Tipo::whereHas('slugs',function($slugs) use($type){
				$slugs->where('text','=',$type);
			})
			->with('slugs')
			->with('descriptions')
			->first();
			
		}else
		{
			$tipo = Tipo::whereHas('slugs',function($slugs){
				$slugs->where('text','=','sedes');
			})
			->with('slugs')
			->with('descriptions')
			->first();
		}
		$article = Articulo::with('imagenes')
		->with('likeCount')
		->with('categorias')
		->with('descriptions')
		->with('titles')
		->with('slugs')
		->where('tipo','=',$tipo->id)
		->where('state','=',1)
		->orderBy('created_at','DESC')
		->paginate(6);

		if($type == "que-hacemos")
		{
			$article = Articulo::where('cat_id','=','4')->where('state','=',1)->orderBy('created_at','DESC')->paginate(6);
		}
		$title =  Lang::get('lang.news_by').$type." | Funda Epékeina";
		$view = View::make('home.articles.index')
		->with('title',$title)
		->with('article',$article)
		->with('type',$type);
		switch ($type) {
			case "que-hacemos":
				return $view->with('menu','all')
				->with('active','about')
				->with('subtitle',Lang::get('lang.about_menu3'))
				->with('type','que-hacemos');
				break;
			default:
				return $view->with('menu',$tipo->id)
				->with('active','noticias')
				->with('subtitle',Lang::get('lang.news_menu'))
				->with('type',$type);
		}

	}
	public function getByCat($type,$id)
	{

		$article = Articulo::with('imagenes')
		->with('titles')
		->with('slugs')
		->with('descriptions');
		if ($type == 'proyectos') {
			$article = $article->leftJoin('categorias','categorias.id','=','cat_id')
			->where('articulos.state','=',1)
			->where('categorias.tipo','=','2')
			->where('articulos.cat_id','=',$id)
			->orderBy('articulos.created_at','DESC')
			->paginate(6);
		}elseif($type == 'sedes')
		{
			$article = $article
			->where('articulos.state','=',1)
			->where('articulos.cat_id','=',$id)
			->orderBy('articulos.created_at','DESC')
			->paginate(6);
		}
		$title = "Noticias por ".$type." | Funda Epékeina";
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
	public function getSearch()
	{
		$busq = Input::get('busq');
		$article = Articulo::with('imagenes')
		->with('titles')
		->with('slugs')
		->with('descriptions')
		->where('state','=',1)
		->where(function($query) use ($busq)
		{
			$query->whereRaw('LOWER(title)  LIKE "%'.$busq.'%"')
			->orWhereRaw('LOWER(descripcion) LIKE "%'.$busq.'%"');
		})
		->paginate(6);
		$title = "Busqueda por: ".$busq." | Funda Epékeina";
		$view = View::make('home.articles.busq')
		->with('title',$title)
		->with('article',$article);
		return $view->with('menu','all')
		->with('active','home')
		->with('subtitle','Busqueda por: '.$busq)
		->with('type','que-hacemos')
		->with('busq',$busq);
	}
	public function getGallery()
	{
		$title = "Galería | Funda Epékeina";
		$gallery = Gallery::with('imagenes')->get();
		
		return View::make('home.gallery')
		->with('title',$title)
		->with('active','galeria')
		->with('gallery',$gallery);
	}
	public function getContact()
	{
		$title = "Contactenos | Funda Epékeina";
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
			$message->to('comunicaciones@fundaepekeina.org')->from($data['email'])->subject($data['subject']);
		});

		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Correo enviado satisfactoriamente, pronto nos pondremos en contacto con usted.',
		));
	}
	public function getOrg()
	{
		$title = "Organigrama | Funda Epékeina";
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
		$title = "Donaciones | Funda Epékeina";
		return View::make('home.donations')
		->with('title',$title)
		->with('active','contacto');
	}
	public function getSupport()
	{
		$title = "Apoyenos | Funda Epékeina";
		return View::make('home.support')
		->with('title',$title)
		->with('active','contacto');
	}
	public function getMap()
	{
		$title = "Localización | Funda Epékeina";
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
	public function postDonation()
	{
		$data 	= Input::all();
		$rules 	= array(
			'reference_number' 		=> 'required',
			'transaction_type' 	 	=> 'required',
			'user_bank' 			=> 'required_if:transaction_type,transferencia',
			'shop_bank'				=> 'required',
			'transaction_date'		=> 'required|date|max:'.date('Y-m-d',time()),
		);
		$msg = array();
		$attr = array(
			'reference_number' 		=> 'numero de referencia',
			'transaction_type'	 		=> 'tipo de transacción',
			'user_bank'			 	=> 'banco remitente',
			'shop_bank'			 	=> 'cuenta',
			'transaction_date'	 	=> 'fecha de la transacción'
		);
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Response::json(array(
				'type' => 'danger',
				'data' => $validator->getMessageBag()
			));
		}
		$donation = new Donation;
		$donation->reference_number = $data['reference_number'];
		$donation->transaction_type = $data['transaction_type'];
		if ($data['transaction_type'] == 'transferencia') {
			$donation->user_bank	= $data['user_bank'];
		}
		$donation->account			= $data['shop_bank'];
		$donation->transaction_date = $data['transaction_date'];
		$donation->save();
		$data['title'] = "Nueva donación";
		Mail::send('emails.new-donation', $data, function($message) use ($data)
		{
			$message->to('comunicaciones@fundaepekeina.org')->from('mail@fundaepekeina.org')->subject('Nueva donación');
		});
		return Response::json(array(
			'type' 	=> 'success',
			'msg'	=> 'Gracias por enviar su donación'
		));
	}

	public function prueba()
	{
		return Redirect::to('/');
		$langs = Language::get();
		$art   = Articulo::get();
		$data  = [];
		foreach ($art as $a) {
			$data['title'][1] 		= $a->title;	
			$data['title'][2] 		= $a->title;
			$translation 			= LangController::newTranslation();
			LangController::newEntry($langs, $translation,$data, 'title');
			$a->title 				= $translation;

			$translation 			= LangController::newTranslation();
			LangController::newSlug($langs, $translation, $data, 'title');
			$a->slug 				= $translation;

			$data['description'][1] = $a->descripcion;	
			$data['description'][2] = $a->descripcion;
			$translation 			= LangController::newTranslation();
			LangController::newEntry($langs, $translation,$data, 'description');
			$a->descripcion 		= $translation;

			$a->save();
			
		}
		$sub   = Subtitle::get();
		$subs  = [];
		foreach ($sub as $s) {
			$subs['description'][1] = $s->subtitulo;	
			$subs['description'][2] = $s->subtitulo;
			$translation 			= LangController::newTranslation();
			LangController::newEntry($langs, $translation,$data, 'description');
			$s->subtitulo 		    = $translation;

			$s->save();
		}
		return 'listo';
	}
}
