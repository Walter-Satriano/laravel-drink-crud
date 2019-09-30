<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bevanda;

class BevandeController extends Controller {

  public function getBevande() {

    $title = "Bevande";

    $bevande = Bevanda::all();

    return view("bevande", compact("title", "bevande"));
  }
}
