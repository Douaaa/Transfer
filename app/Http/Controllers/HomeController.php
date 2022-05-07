<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $pageInfo['title'] = trans('all.site-home');
      return view('home' ,compact('pageInfo'));
    }
}
