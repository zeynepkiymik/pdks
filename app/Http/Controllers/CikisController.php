<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pdksz;

class CikisController extends Controller
{
  public function cikislar(Request $request){
   $data['pdksz'] = pdksz::all()->where('type' , 'cikis');
     return view('cikislar', $data);
//verileri datadan çek ekrana yaz
 }

}
