<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CikisController extends Controller
{
  public function cikis (){
   return view('cikis');
}
