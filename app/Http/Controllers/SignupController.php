<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function render()
    {
        //Array that contais the path of js files that will be rendered in this page
        $jsFiles = ['/js/signup.js'];
        
        //Array that contais the path of css files that will be rendered in this page
        $cssFiles = ['/css/signup.css', '/css/form.css'];

        $arrayView = array(
            'page' => 'signup',
            'jsFiles' => $jsFiles,
            'cssFiles' => $cssFiles
        );
        return view('main')->with($arrayView);
    }
}
