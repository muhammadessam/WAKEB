<?php

namespace App\Http\Controllers;

use App\About;
use App\Lang;
use App\Product;
use App\Service;
use App\Settings;
use App\Slider;
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
        $sliders = Slider::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.home', compact(['products', 'services', 'solutions', 'sliders', 'settings']));
    }

    public function about()
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $about = About::all()->where('lang_id', $lang_id);
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.about', compact(['about', 'products', 'services', 'solutions', 'settings']));
    }

    public function contact()
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.contact', compact(['products', 'services', 'solutions', 'settings']));
    }

    public function showProduct(Product $product, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.products.show', compact(['product', 'products', 'services', 'solutions', 'settings']));
    }

    public function showService(Service $service, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.services.show', compact(['service', 'products', 'services', 'solutions', 'settings','settings']));
    }

    public function showSolution(Solution $solution, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.solutions.show', compact(['solution', 'products', 'services', 'solutions','settings']));
    }

    public function showUseCase(UseCase $useCase, Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.useCase.show', compact(['useCase', 'products', 'services', 'solutions','settings']));
    }

    public function showProducts(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.products', compact(['products', 'services', 'solutions','settings']));
    }

    public function showServices(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.services', compact(['products', 'services', 'solutions','settings']));
    }

    public function showSolutions(Request $request)
    {
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.solutions', compact(['products', 'services', 'solutions','settings']));
    }

}
