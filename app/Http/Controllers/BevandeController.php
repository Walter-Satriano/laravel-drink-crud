<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bevanda;

class BevandeController extends Controller {

  public function getBevande() {

    $title = "Bevande";

    $bevande = Bevanda::all();
    $min = Bevanda::min("prezzo");
    $max = Bevanda::max("prezzo");
    $avg = Bevanda::avg("prezzo");

    return view("bevande", compact("title", "bevande", "min", "max", "avg"));
  }
}
