 <?php


Route::get('/usuarios','UserController@index');

Route::get('/usuarios/detalle',function(){
    return 'Mostrando el usuario'.$_GET['id'];
});

/*se pasa por parametro dinamico*/
Route::get('/usuarios2/{id}','UserController@show')
->where('id','[0-9]+'); /*Aqui le especificamos que es solo numerico*/

Route::get('usuarios/nuevo','UserController@create');

Route::get('/saludo/{name}/{nickname?}','UserController@usuario');