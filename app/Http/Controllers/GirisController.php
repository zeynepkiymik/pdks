<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pdksz;
class GirisController extends Controller
{
  public function blog(Request $request){
   $data['pdksz'] = pdksz::all();
     return view('pdksz', $data);
//verileri datadan çek ekrana yaz
 }
}
