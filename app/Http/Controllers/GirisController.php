<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pdksz;

class GirisController extends Controller
{
  public function girisler (Request $request){
   $data['pdksz'] = pdksz::all()->where('type' , 'giris');
     return view('girisler', $data);
//verileri datadan çek ekrana yaz
 }
}
