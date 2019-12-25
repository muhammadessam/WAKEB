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

    public function showProduct(Product $product, Request $request)
    {
        $title = $product->product_trans_lang->name;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.products.show', compact(['product', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showService(Service $service, Request $request)
    {
        $title = $service->service_trans_lang->name;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.services.show', compact(['service', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showSolution(Solution $solution, Request $request)
    {
        $title = $solution->trans_lang->name;
        $products = Product::all();
        $services = Service::all();
        $solutions = Solution::all();
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        $settings = Settings::all()->where('lang_id', $lang_id);
        return view('FrontEnd.solutions.show', compact(['solution', 'products', 'services', 'solutions', 'settings', 'title']));
    }

    public function showUseCase(UseCase $useCase, Request $request)
    {
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
        $title = trans('Products');
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
