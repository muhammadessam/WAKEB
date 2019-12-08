<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        return view('FrontEnd.home', compact(['products', 'services']));
    }

    public function about()
    {
        return view('FrontEnd.about');
    }

    public function contact()
    {
        return view('FrontEnd.contact');
    }


}
