<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function render()
    {
        //Array that contais the path of js files that will be rendered in this page
        $jsFiles = ['/js/login.js'];
        
        //Array that contais the path of css files that will be rendered in this page
        $cssFiles = ['/css/login.js'];
        
        $arrayView = array(
            'page' => 'login',
            'jsFiles' => $jsFiles,
            'cssFiles' => $cssFiles
        );
        return view('main')->with($arrayView);
    }
}
