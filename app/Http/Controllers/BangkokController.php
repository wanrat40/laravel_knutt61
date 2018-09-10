<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangkokController extends Controller
{
  public function index(){
    $htmlsyntax = '<div> ss<div>';
    	$title = 'Laravel 5 Fundamental';
		$subtitle = 'From basic to expert';

		return view('bangkok.index',['title' => $title, 'subtitle' => $subtitle, 'htmlsyntax' => $htmlsyntax ]);
  }


}
