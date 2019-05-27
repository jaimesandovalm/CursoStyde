 <?php


Route::get('/usuarios', function() {
    return "usuarios";
});

Route::get('/usuarios/detalle',function(){
    return 'Mostrando el usuario'.$_GET['id'];
});

/*se pasa por parametro dinamico*/
Route::get('/usuarios2/{id}',function($id){
    return 'Mostrando el id del usuario: '.$id;
})->where('id','[0-9]+'); /*Aqui le especificamos que es solo numerico*/

Route::get('usuarios/nuevo',function(){
    return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){
    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}, tu no tienes apodo";
    }
});