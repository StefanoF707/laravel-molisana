<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index() {
        $company = config("dbCompany");
        $links = config("dbLinks");
        return view('news', compact('company', 'links'));
    }
    
}
