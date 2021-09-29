<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pdksz;
class GiriscikisController extends Controller
{
  public function index (){
   return view('homepage');
}

public function giris (Request $request){ //tc yi çağırmak için
  $kayit = new pdksz;
  $kayit->tc = $request->tc;
  $kayit->type = "giris";
  $kayit->tarih = date("Y-m-d H:i:s");
  $kayit->save();
  return redirect()->back()->with('mesaj' , 'Sisteme Giriş Yaptınız.');

 }

 public function cikis(Request $request){
   $kayit = new pdksz;
   $kayit->tc = $request->tc;
   $kayit->type = "cikis";
   $kayit->tarih = date("Y-m-d H:i:s");
   $kayit->save();
   return redirect()->back()->with('mesaj' , 'Sistemden Çıkış Yaptınız.');
}
}
