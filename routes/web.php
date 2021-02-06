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

Route::get('/', function () {

    $data = config("dbPasta");
    $company = config("dbCompany");
    $links = config("dbLinks");

    $longPasta = [];
    $shortPasta = [];
    $shortestPasta = [];

    // TODO: modificare il foreach per assegnare ad ogni pasta un id numerico in base alla posizione nell'array di partenza

    foreach($data as $key => $pasta) {
        $pasta["id"] = $key;

        if ($pasta["tipo"] == "lunga") {
            $longPasta[] = $pasta;
        } elseif ($pasta["tipo"] == "corta") {
            $shortPasta[] = $pasta;
        } elseif ($pasta["tipo"] == "cortissima") {
            $shortestPasta[] = $pasta;
        }
    };

    return view('home',[
        'longPasta' => $longPasta,
        'shortPasta' => $shortPasta,
        'shortestPasta' => $shortestPasta,
        'company' => $company,
        'links' => $links,
    ]
    );
})->name("home");

Route::get('/products/{id}', function ($id) {
    // dd($id);
    $data = config("dbPasta");
    $company = config("dbCompany");
    $links = config("dbLinks");

    return view('products', [
        'company' => $company,
        'links' => $links,
        'product' => $data[$id],
        'pasta' => $data,
        'id' => $id
    ]);
})->name("products");

Route::get('/news', function () {

    $company = config("dbCompany");
    $links = config("dbLinks");

    return view('news', [
        'company' => $company,
        'links' => $links,
    ]);
})->name("news");

// TODO: salvare i links della navbar nel database e gestire con foreach

// TODO: passare anche alla route products l'array data e associare l'id al prodotto

// TODO: fare le rotte parametriche per gestire il click ad ogni tipo diverso di pasta, assegnare un PARAMETRO alla funzione get {idProdotto} e passare un argomento alla funzione {$id}
