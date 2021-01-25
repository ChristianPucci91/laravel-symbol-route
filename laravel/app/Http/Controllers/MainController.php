<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home() {
    $data = array(

         ['name' => 'Marco'],
         ['name' => 'Samuel']

       );
       // test di array con foreach & if
    return view('pages.home',compact('data'));

  }
  public function blog() {

    $data = array(

         ['name' => 'Paolo'],
         ['name' => 'Daniele']

       );

    return view('pages.blog',compact('data'));

  }
  public function about() {

    return view('pages.about');

  }
}
