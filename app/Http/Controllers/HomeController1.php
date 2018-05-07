<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Users;
use Hash;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\User as Authenticatable;

class HomeController extends Controller {


      public function shell1()
{
  $output = shell_exec('php artisan key:generate');
  echo "<pre>$output</pre>";
}

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
