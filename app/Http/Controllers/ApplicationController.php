<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __invoke(Request $request)
    {
        /*$path = $request->path();
        $page = current(explode("/", $path));
        $page = ($page === 'login' || $page !== 'admin') ? 'app' : $page;
        return view('app', ['page' => $page]);*/
    }
    public function index(){
        return view('welcome');
    }
}