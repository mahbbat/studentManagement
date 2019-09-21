<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $username="Shikder Mahbbat";
        return view('pages.index')->withUsername($username);
    }
}
