<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');

Route::get('proyectos/escuela-de-campo-para-agricultores','ProjectController@getLaguna');

Route::get('quienes-somos','HomeController@getAbout');
Route::get('organigrama','HomeController@getOrg');
Route::get('localizacion','HomeController@getMap');
Route::get('quienes-somos/historias-epekeinas','HomeController@getHistories');
Route::get('quienes-somos/historias-epekeinas/{slug}','HomeController@getHistory');

Route::get('noticias','HomeController@getNews');
Route::get('noticias/{type}','HomeController@getNewsType');

Route::get('biblioteca-virtual','LibraryController@getIndex');
Route::get('biblioteca/descargar/{slug}','LibraryController@downloadFile');

Route::get('noticias/ver/{slug}','HomeController@getArticleSelf');
Route::get('noticias/{type}/categoria/{slug}','HomeController@getByCat');


Route::get('galeria','HomeController@getGallery');


Route::get('contacto','HomeController@getContact');
Route::post('contacto/enviar','HomeController@postContact');

Route::get('contacto/donaciones','HomeController@getDonation');
Route::get('contacto/apoyenos','HomeController@getSupport');


Route::post('suscribir-nuevo','HomeController@getNewSubscriber');

Route::get('buscar','HomeController@getSearch');
Route::group(array('before' => 'no_auth'),function() 
{
	Route::get('administrador/login', 'AdminController@getLogin');
	Route::group(array('before' => 'csrf'),function(){
		Route::post('administrador/login/enviar','AdminController@postLogin');
	});
});
Route::get('agregar-love','HomeController@getLike');

Route::group(array('before' => 'auth'),function() 
{

	Route::get('generar-boletin','BoletinController@selectNews');
	Route::post('generar-boletin/enviar','BoletinController@getBoletinAdmin');
	Route::get('generar-boletin-html','BoletinController@getBoletin');

	Route::get('administrador/', 'AdminController@getIndex');
	Route::get('administrador/change-password','AdminController@getChangePass');
	Route::post('administrador/change-password/send','AdminController@postUserNewPass');

	Route::get('administrador/buscar-sedes-o-proyectos','AdminController@getProy');

	//articulos
	Route::get('administrador/nuevo-articulo','AdminController@getNewArticulo');
	Route::post('administrador/nuevo-articulo/enviar','AdminController@postNewArticulo');

	Route::get('administrador/ver-articulo/{slug}','AdminController@showArt');
	Route::get('administrador/mostrar-articulos','AdminController@showArticulos');
	Route::get('administrador/mostrar-articulos/{slug}','AdminController@getArticulo');
	Route::post('administrador/mostrar-articulo/{slug}/enviar','AdminController@postArticulo');

	Route::get('administrador/editar-articulo/{slug}','AdminController@getModifyArt');
	Route::post('administrador/ver-articulo/enviar','AdminController@postMdfArt');
	Route::post('administrador/ver-articulos/eliminar-imagen','AdminController@elimImg');
	Route::post('administrador/mostrar-articulos/eliminar','AdminController@elimArticulo');
	Route::post('administrador/cambiar-estado','AdminController@changeStatus');

	Route::get('administrador/nueva-categoria','AdminController@getNewCategory');
	Route::post('administrador/nuevo-categoria/enviar','AdminController@postNewCategory');
	Route::get('administrador/ver-categorias','AdminController@getCategories');
	Route::get('administrador/editar-categoria/{slug}','AdminController@getMdfCategory');
	Route::post('administrador/modificar-categoria/{slug}/enviar','AdminController@postMdfCategory');
	Route::post('administrador/ver-categorias/eliminar','AdminController@postElimCategory');
	//usuarios
	Route::get('administrador/nuevo-usuario','AdminController@newUser');
	Route::post('administrador/nuevo-usuario/enviar','AdminController@postNewUser');
	Route::get('administrador/ver-usuarios','AdminController@getUsers');
	Route::post('administrador/ver-usuarios/eliminar','AdminController@elimUser');
	Route::get('administrador/cambiar-password/{slug}','AdminController@chageUserPass');
	Route::post('administrador/cambiar-password/enviar/{slug}','AdminController@postChangePass');

	//galeria
	Route::get('administrador/galeria/nueva-galeria','AdminController@getNewCat');
	Route::post('administrador/galeria/nueva-galeria/enviar','AdminController@postNewCat');
	Route::post('administrador/chequear-imagen','AdminController@checkImg');
	Route::get('administrador/galeria/ver-galerias', 'AdminController@getGalleries');
	Route::post('administrador/mostrar-galeria/eliminar','AdminController@elimGallery');
	Route::get('administrador/galeria/agregar-imagenes/{slug}','AdminController@addImages');
	Route::post('administrador/galeria/agregar-imagenes/enviar', 'AdminController@postNewImage');
	Route::post('administrador/ver-productos/eliminar','AdminController@elimItem');
	Route::get('administrador/galeria/{type}/{slug}','AdminController@showGallery');
	Route::post('administrador/galeria/editar/enviar','AdminController@postMdfGal');
	Route::get('administrador/logout','AdminController@getLogOut');

	//Biblioteca

	Route::get('administrador/biblioteca/nuevo-archivo','LibraryController@getNewFile');
	Route::post('administrador/biblioteca/nuevo-archivo/enviar','LibraryController@postNewFile');
	Route::get('administrador/biblioteca/ver-archivos','LibraryController@getFiles');
	Route::get('administrador/biblioteca/ver-archivos/{slug}','LibraryController@downloadFile');
	Route::get('administrador/biblioteca/editar-archivos/{slug}','LibraryController@getMdfFile');
	Route::post('administrador/biblioteca/editar-archivos/{slug}/enviar','LibraryController@postMdfFile');
	Route::post('administrador/biblioteca/ver-archivos/eliminar','LibraryController@postElimFile');
});

Route::get('test','HomeController@prueba');
Route::post('nueva-donacion','HomeController@postDonation');
Route::get('dar-de-baja','BoletinController@deleteFromBoletin');

Route::get('test-boletin','BoletinController@getTest');

Route::get('cambiar-lenguaje/{lang}',function($lang)
{
	Session::set('lang', $lang);
	return Redirect::back();
});