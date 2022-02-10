<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage
Route::get('/', function () {

    $comics_array = config('comics');

    $data = [
        'comics_array' => $comics_array
    ];


    return view('homepage', $data);
})->name('homepage');


// Singolo Prodotto
Route::get('/product/{id}', function ($id) {

    $comics_array = config('comics');

    $product_to_show = false;

    foreach($comics_array as $comic) {
        if($comic['id'] == $id){
            $product_to_show = $comic;
        }
    }
    
    if(!$product_to_show) {
        abort ('404');
    }

    $data = [
        'product' => $product_to_show,
    ];

    return view('product', $data);
})->name('product');
