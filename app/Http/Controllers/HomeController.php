<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    	public function about()
	{
		return view('about');
	}

  public function services()
	{
		return view('services');
	}

  public function portfolio()
	{
		return view('portfolio');
	}

  public function howitworks()
	{
		return view('howitworks');
	}

  public function contact()
	{
		return view('contact');
	}
}
