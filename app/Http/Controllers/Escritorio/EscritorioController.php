<?php

namespace Market\Http\Controllers\Escritorio;

use Illuminate\Http\Request;
use Market\Http\Controllers\Controller;

class EscritorioController extends Controller
{
    //
    public function index(){
      return view('escritorio');
    }
}
