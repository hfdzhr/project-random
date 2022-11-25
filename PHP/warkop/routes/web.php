<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/home', function () {
    return 'Halo Dari Halaman Home';
});

$router->get('/soal1/{nama}/{menu}', function ($nama, $menu)  {

    if ($menu == 'Makanan') {
        $harga = 2000;
    } elseif ($menu == 'Minuman') {
        $harga = 1000;
    };

    return " Nama Pembeli : {$nama} <br>
    Jenis Pesanan : {$menu} <br> 
    Harga : {$harga} 
    ";
});
