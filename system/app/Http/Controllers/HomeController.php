<?php 

namespace App\Http\Controllers;

class HomeController extends Controller
{
  function ShowIndex(){
    return view('template.frontend.home');
  }

  function ShowAbout(){
    return view('template.frontend.about');
  }

  function Showshop(){
    return view('template.frontend.shop');
  }

  function Showcontact(){
    return view('template.frontend.contact');
  }

  // produk shop

  function Showproduk1(){
    return view('template.frontend.produkshop');
  }

  function Showproduk2(){
    return view('template.frontend.produkshop2');
  }

  function Showproduk3(){
    return view('template.frontend.produkshop3');
  }

  function Showproduk4(){
    return view('template.frontend.produkshop4');
  }

  function Showproduk5(){
    return view('template.frontend.produkshop5');
  }

  function Showproduk6(){
    return view('template.frontend.produkshop6');
  }


}
