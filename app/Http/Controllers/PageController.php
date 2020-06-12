<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('pages.main');
    }

    public function single(){
        return view('pages.single');
    }
}
