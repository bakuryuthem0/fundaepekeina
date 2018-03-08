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
		$lang = LangController::getActiveLang();
		$title = Lang::get('lang.home_title');
		$article = Articulo::with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->where('state','=',1)
		->where('articulos.cat_id','!=',4)
		->whereHas('titles',function($titles) use ($lang){
			$titles->where('lang_id','=',$lang->id)
			->whereRaw('LENGTH(text) > 0');
		})
		->whereHas('descriptions',function($desc) use ($lang){
			$desc->where('lang_id','=',$lang->id)
			->whereRaw('LENGTH(text) > 0');
		})
		->orderBy('created_at','DESC')->take(8)->get();
		$active = "inicio";
		return View::make('home.index')
		->with('active',$active)
		->with('campaing',Lang::get('lang.campaing'))
		->with('title',$title)
		->with('size','big')
		->with('article',$article);
	}
	public function getAbout()
	{
		$title = Lang::get('lang.about_menu')." | Funda Epékeina";
		$text   = "Aquí se puede colocar algun pensamiento que describa el objetivo de la fundación";
		return View::make('home.about')
		->with('size','big')
		->with('citaMenu','cita')
		->with('text',Lang::get('lang.campaing'))
		->with('title',$title);
	}
	public function getWhatWeDo()
	{
		$title = Lang::get('lang.about_menu3')." | Funda Epékeina";
		return View::make('about.what-we-do')
		->with('size','big')
		->with('citaMenu','cita')
		->with('text',Lang::get('lang.campaing'))
		->with('title',$title);
	}
	public function getHistories()
	{
		$title = Lang::get('lang.history_menu')." | Funda Epékeina";
		$hist = Articulo::where('tipo','=',6)
		->with('subtitle')
		->with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->get();
		return View::make('about.show')
		->with('title',$title)
		->with('size','big')
		->with('hist',$hist);
	}
	public function getHistory($slug)
	{
		$lang = LangController::getActiveLang();

		$title = Lang::get('lang.history_menu')." | Funda Epékeina";
		$article = Articulo::whereHas('slugs',function($slugs) use ($slug)
		{
			$slugs->where('text','=',$slug);
		})
		->with('subtitle')
		->with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->whereHas('titles',function($titles) use ($lang){
			$titles->where('lang_id','=',$lang->id)
			->whereRaw('LENGTH(text) > 0');
		})
		->whereHas('descriptions',function($desc) use ($lang){
			$desc->where('lang_id','=',$lang->id)
			->whereRaw('LENGTH(text) > 0');
		})
		->first();
		$related = Articulo::where('tipo','=',6)
		->where('id','!=',$article->id)
		->with('subtitle')
		->with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->take(8)
		->get();
		$request = Request::instance();
		$request->setTrustedProxies(array('127.0.0.1')); // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
		$ip = $request->getClientIp();
		$aux = Like::where('articulo_id','=',$article->id)->where('ip','=',$ip)->get();
		if (count($aux) > 0) {
			$fa = 'fa-heart loved';
		}else
		{
			$fa = 'fa-heart-o';
		}
		return View::make('home.articles.article')
		->with('title',$title)
		->with('size','big')
		->with('donaMenu','dona')
		->with('mostVisited',[])
		->with('mostLiked',[])
		->with('fa',$fa)
		->with('related',$related)
		->with('article',$article);
	}
	public function getArticleSelf($slug)
	{
		$sideCtrl = new SideBarController;

		$lang  = LangController::getActiveLang();
		//find slug entry
		$entry = TranslationEntry::where('text','=',$slug)
		->where('lang_id','=',$lang->id)
		->first();

		$article = Articulo::with('categorias')
		->with(array('type' => function($type){
			$type->with('slugs')
			->with('descriptions');	
		}))
		->with('imagenes')
		->where('state','=',1)
		->with(['titles' => function($title) use($lang){
			$title->where('lang_id','=',$lang->id);
		}])
		->with(['descriptions' => function($desc) use($lang){
			$desc->where('lang_id','=',$lang->id)
		}])
		->where('slug','=',$entry->translation_id);
		->first();
		
		$request = Request::instance();
		$request->setTrustedProxies(array('127.0.0.1')); // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
		$ip = $request->getClientIp();
		$aux = Like::where('articulo_id','=',$article->id)->where('ip','=',$ip)->get();
		if (count($aux) > 0) {
			$fa = 'fa-heart loved';
		}else
		{
			$fa = 'fa-heart-o';
		}

		$visit = new Visitor;
		$visit->article_id = $article->id;
		$visit->ip         = $ip;
		$visit->save();

		$mostVisited = $sideCtrl::getMostViewed($article->id);
		$mostLiked   = $sideCtrl::getMostPopulars($article->id);

		$title   = Lang::get('lang.news_menu').": ".$article->titles->first()->text." | Funda Epékeina";
		$view = View::make('home.articles.article')
		->with('article',$article)
		->with('title',$title)
		->with('fa',$fa)
		->with('size','big')
		->with('donaMenu','existe');	
		if ($article->type && $article->type->descriptions->first()) {
			$subtitle = $article->type->descriptions->first()->text;
		}else
		{
			$subtitle = Lang::get('lang.news_menu');
		}
		return $view->with('subtitle',$subtitle)
		->with('active','about')  
		->with('mostVisited',$mostVisited)  
		->with('mostLiked',$mostLiked)  
		->with('menu','all');
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

		$tipo = Tipo::whereHas('slugs',function($slugs) use($type){
			$slugs->where('text','=',$type);
		})
		->with('slugs')
		->with('descriptions')
		->first();
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
	public function getSearch($t = null)
	{
		$lang = LangController::getActiveLang();
		$collection = Articulo::with('imagenes')
		->with('titles')
		->with('slugs')
		->with('descriptions')
		->where('state','=',1)
		->whereHas('titles',function($titles) use ($lang){
			$titles->where('lang_id','=',$lang->id)
			->whereRaw('LENGTH(text) > 0');
		})
		->whereHas('descriptions',function($desc) use ($lang){
			$desc->where('lang_id','=',$lang->id)
			->whereRaw('LENGTH(text) > 0');
		});

		if (Input::has('busq')) {
			$lang = LangController::getActiveLang();
			$busq = Input::get('busq');
			$collection = $collection	
			->where(function($query) use ($busq, $lang)
			{
				$query->whereHas('titles',function($titles) use ($busq, $lang){
					$titles->where(function($q) use ($busq){
						$q->where('text','LIKE','%'.$busq)
						->orWhere('text','LIKE','%'.$busq.'%')
						->orWhere('text','LIKE',$busq.'%');
					})
					->where('lang_id','=',$lang->id);
				});
			});
		}else
		{
			$busq = "";
		}
		if (!is_null($t)) {
			$collection = $collection->whereHas('type',function($type) use ($t){
				$type->whereHas('slugs',function($slugs) use($t){
					$slugs->where('text','=',$t);
				});
			});
		}
		$collection = $collection->orderBy('id','DESC')->paginate(8);
		$title = "Busqueda por: ".$busq." | Funda Epékeina";
		return View::make('search.index')
		->with('title',$title)
		->with('collection',$collection)
		->with('size','big')
		->with('subtitle','Busqueda : '.$busq)
		->with('busq',$busq);
	}
	public function getGallery()
	{
		$title = "Galería | Funda Epékeina";
		$gallery = Gallery::get();
		
		return View::make('gallery.index')
		->with('title',$title)
		->with('active','galeria')
		->with('size','big')
		->with('gallery',$gallery);
	}
	public function getGalleryById($id)
	{
		$gallery = Gallery::find($id);

		$images = GalleryImage::where('gallery_id','=',$id)->get();
		$title = Lang::get('lang.gallery_menu')." ".$gallery->name." | Funda Epékeina";
		return View::make('gallery.show')
		->with('title',$title)
		->with('gallery',$gallery)
		->with('images',$images)
		->with('size','big');
	}
	public function getContact()
	{
		$title = "Contactenos | Funda Epékeina";
		return View::make('home.contact')
		->with('citaMenu','cita')
		->with('text',Lang::get('lang.contact_quote'))
		->with('size','big')
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
			'name'		=> 'required|min:4|max:100',
			'lastname'	=> 'required|min:4|max:100',
			'email' 	=> 'required|email|unique:suscriptores_mailchimp,email',
		);
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
			Session::flash('danger',Lang::get('lang.subscription_error'));
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$sus = new Subscriber;
		$sus->name 		= $data['name'];
		$sus->lastname  = $data['lastname'];
		$sus->email 	= $data['email'];
		if (Input::has('accept')) {
			$sus->want_more = 1;
		}
		if ($sus->save()) {
			
			Mail::send('emails.sub', $data, function ($message) use ($data){
			    $message->subject('Correo de suscripción a fundaepekeina.org');
			    $message->from('noreply@fundaepekeina.org');
			    $message->to($data['email']);
			});
		}

		Session::flash('success',Lang::get('lang.subscription_success'));
		return Redirect::back();

	}
	public function getDonation()
	{
		$accounts = Account::where('deleted','=',0)->get();
		$title = "Donaciones | Funda Epékeina";

		return View::make('home.donations')
		->with('title',$title)
		->with('size','big')
		->with('citaMenu','cita')
		->with('accounts',$accounts)
		->with('campaing',Lang::get('lang.campaing'))
		->with('text',Lang::get('lang.donation_quote'))
		->with('active','contacto');
	}
	public function postDonation()
	{
		$data 	= Input::all();
		$rules 	= array(
			'fullname'			=> 'required|min:3|max:100',
			'account'			=> 'required|exists:accounts,id',
			'email'				=> 'required|email',
			'date'				=> 'required|date_format:d-m-Y',
			'amount'			=> 'required',
			'reference_number'	=> 'required',
		);
		$msg = array();
		$attr = array(
			'fullname'			=> Lang::get('lang.fullname'),
			'account'			=> Lang::get('lang.accounts'),
			'email'				=> 'email',
			'date'				=> Lang::get('lang.date'),
			'amount'			=> Lang::get('lang.amount'),
			'reference_number'	=> Lang::get('lang.reference_number'),
		);
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$donation = new Donation;
		$donation->fillData($data);
		$donation->save();
		$data['account_name'] = Account::find($donation->account_id)->name;

		$data['title'] = "Nueva donación";
		Mail::send('emails.new-donation', $data, function($message) use ($data)
		{
			$message->to('comunicaciones@fundaepekeina.org')->from('mail@fundaepekeina.org')->subject('Nueva donación');
		});
		return Redirect::to('contacto/gracias');
	}
	public function thanks()
	{
		$title = "Gracias por su apoyo | Funda Epékeina";
		return View::make('home.thanks')
		->with('title',$title);
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
	public function getNewSubscription()
	{
		$title = Lang::get('lang.subscription_title')." | Funda Epékeina";

		return View::make('home.subscribe')
		->with('citaMenu','cita')
		->with('text',Lang::get('lang.subscription_quote'))
		->with('title',$title)
		->with('size','big');	
	}
	public function getVolunteer()
	{
		$title = Lang::get('lang.be_a_volunteer')." | Funda Epékeina";

		return View::make('home.volunteer')
		->with('title',$title)
		->with('citaMenu','cita')
		->with('size','big')
		->with('text',Lang::get('lang.volunteer_quote'));
	}
	/*
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
	*/
}
