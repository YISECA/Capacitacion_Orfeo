<?php



Route::any('/','FormController@index');
Route::any('welcome','FormController@index');

Route::get('descarga', function () {                
    return view('descarga');
});


Route::get('descarga', function () {                
    return view('descarga');
});

Route::get('carnet_prueba', function () {                
    return view('carnet');
});

Route::get('login', function () {                
    return view('login');
});

Route::get('cerrar', function () {      
	session_start();
	session_destroy();
    return redirect('/');
});


Route::any('logear','FormController@logear');
Route::any('ultimo_codigo','FormController@last_codigo');
Route::any('carnet','PdfController@carnet');
Route::post('insertar', 'FormController@insertar');
Route::any('listar_pais', 'FormController@listar_pais');
Route::any('listar_ciudad', 'FormController@listar_ciudad');
Route::any('listar_localidad', 'FormController@listar_localidad');
Route::any('listar_departamento', 'FormController@listar_departamento');
Route::any('listar_datos', 'FormController@listar_datos');
Route::get('/personas/service/ciudad/{id_pais}', '\Idrd\Usuarios\Controllers\LocalizacionController@buscarCiudades');
Route::post('/personas/service/procesar/', '\Idrd\Usuarios\Controllers\PersonaController@procesar');

Route::group(['middleware' => ['web']], function () {

    //

});

