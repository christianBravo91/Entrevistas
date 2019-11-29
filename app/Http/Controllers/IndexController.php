<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

  public function __construct()
  {
      $this->middleware('guest:admin');
      $this->middleware('guest:usuario');
  }

    public function index()
    {
      $view = view('index');
      return $view;
    }


}
