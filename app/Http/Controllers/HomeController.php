<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service;
use App\Solution;
use App\UseCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.home', compact(['products', 'services', 'solutions']));
    }

    public function about()
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.about', compact(['products', 'services', 'solutions']));
    }

    public function contact()
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.contact', compact(['products', 'services', 'solutions']));
    }

    public function showProduct(Product $product, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.products.show', compact(['product', 'products', 'services', 'solutions']));
    }

    public function showService(Service $service, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.services.show', compact(['service', 'products', 'services', 'solutions']));
    }

    public function showSolution(Solution $solution, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.solutions.show', compact(['solution', 'products', 'services', 'solutions']));
    }

    public function showUseCase(UseCase $useCase, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.useCase.show', compact(['useCase', 'products', 'services', 'solutions']));
    }

    public function showProducts(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.products', compact(['products', 'services', 'solutions']));
    }

    public function showServices(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.services', compact(['products', 'services', 'solutions']));
    }

    public function showSolutions(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        return view('FrontEnd.solutions', compact(['products', 'services', 'solutions']));
    }

}
