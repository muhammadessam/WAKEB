<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Lang;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['product_trans' => function ($query) {
            $lang_id = Lang::where('lang', App::getLocale())->first()->id;
            $query->where('lang_id', '=', $lang_id);
        }])->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $langs = Lang::all();
        return view('admin.products.create', compact('langs'));
    }

    public function store(ProductRequest $request)
    {
        $name = time() . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('products/imgs', $name);
        $path = '/products/imgs/' . $name;

        $product = Product::create([
            'img_url' => $path,
            'user_id' => auth()->user()->id,
        ]);

        $langs = Lang::all();

        foreach ($langs as $lang) {
            $product->product_trans()->create([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
                'lang_id' => $lang->id,
            ]);
        }

        $product->save();
        return redirect()->back()->with(['message' => 'success']);
    }

    public function edit(Product $product, Request $request)
    {
        $langs = Lang::all();
        $product->load('product_trans');
        return view('admin.products.edit', compact(['product', 'langs']));
    }

    public function update(Product $product, Request $request)
    {
        $langs = Lang::all();
        if ($request->has('img')) {
            $name = time() . $request->file('img')->getClientOriginalName();
            $request->file('img')->move('products/imgs', $name);
            $path = '/products/imgs/' . $name;
            $product->update([
                'img_url' => $path,
            ]);
        }
        foreach ($langs as $lang) {
            $product->product_trans()->where('lang_id', '=', $lang->id)->update([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
            ]);
        }
        $product->save();
        return redirect(route('showAllProducts'));

    }

}
