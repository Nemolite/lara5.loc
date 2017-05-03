<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class IndexController extends Controller
{
    //
	public function index() {
		$header = 'Мобильные устройства';
		$mass = 'Hello, World';
		
		//$articles = Article::all();
		$articles = Article::select(['test1','art2','art3'])->get();
		dump($articles);
		
		return view('index')->with(['mass'=>$mass,
									'header'=>$header,
									'articles'=>$articles
									
									
									]);
	}
}
