<?php

namespace App\Http\Controllers;

use App\About;
use App\Lang;
use App\Product;
use App\Product_trans;
use App\Service;
use App\Service_trans;
use App\Settings;
use App\Slider;
use App\Solution;
use App\Solution_trans;
use App\UseCase;
use App\UseCase_trans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Psy\Util\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (session()->get('locale') == 'ar')
            $title = 'شركة واكب للذكاء الاصطناعي وخدمات إدارة البيانات';
        else
            $title = 'Wakeb companey for AI and Data mangment';
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $sliders = Slider::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.home', compact(['products', 'services', 'solutions', 'sliders', 'settings', 'title']));
    }

    public function about()
    {
        $title = trans('About us');
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $about = About::all()->where('lang_id', $lang_id);
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.about', compact(['about', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function contact()
    {
        $title = trans('Contact us');
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.contact', compact(['products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showProduct($productName, Request $request)
    {
        $productName = str_replace('-', ' ', $productName);
        $productTrans = Product_trans::where('name', $productName)->first();
        $product = $productTrans->product;
        if (! $product){
            return abort(404);
        }
        $title = $product->product_trans_lang->name;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.products.show', compact(['product', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showService($serviceName, Request $request)
    {
        $serviceName = str_replace('-', ' ', $serviceName);
        $serviceTrans = Service_trans::where('name', $serviceName)->first();
        $service = $serviceTrans->service;
        if (! $service){
            return abort(404);
        }
        $title = $service->service_trans_lang->name;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.services.show', compact(['service', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showSolution($solutionName, Request $request)
    {
        $solutionName = str_replace('-', ' ', $solutionName);
        $solutionTrans = Solution_trans::where('name', $solutionName)->first();
        $solution = $solutionTrans->solution;
        $title = $solution->trans_lang->name;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.solutions.show', compact(['solution', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showUseCase($useCaseName, Request $request)
    {
        $useCaseName = str_replace('-', ' ', $useCaseName);
        $useCaseTrans = UseCase_trans::where('title', $useCaseName)->first();
        $useCase = $useCaseTrans->useCase;
        $title = $useCase->trans_lang->title;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.useCase.show', compact(['useCase', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showProducts(Request $request)
    {
        $title = trans('Products.products');
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.products', compact(['products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showServices(Request $request)
    {
        $title = 'Services';
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.services', compact(['products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showSolutions(Request $request)
    {
        $title = 'Solutions';
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.solutions', compact(['products', 'services', 'solutions', 'settings', 'title']));
    }

}
