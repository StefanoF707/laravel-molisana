<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {

        $data = config("dbPasta");
        $company = config("dbCompany");
        $links = config("dbLinks");

        $longPasta = [];
        $shortPasta = [];
        $shortestPasta = [];

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

        return view('home', compact('longPasta', 'shortPasta', 'shortestPasta', 'company', 'links')
        );

    }

    public function singleProduct($id) {
        $data = config("dbPasta");
        $company = config("dbCompany");
        $links = config("dbLinks");

        return view('products', compact('company', 'links', 'id'), [
            'product' => $data[$id],
            'pasta' => $data
        ]);
    }
}
