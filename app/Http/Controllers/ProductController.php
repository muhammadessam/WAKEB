<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Lang;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
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
                'about' => $request['about_' . $lang->lang],
                'lang_id' => $lang->id,
            ]);
        }
        $product->type = 'product';
        $product->save();
        return redirect()->back()->with(['message' => 'success']);
    }

    public function edit(Product $product, Request $request)
    {
        $langs = Lang::all();
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
                'about' => $request['about_' . $lang->lang],
            ]);
        }
        $product->save();
        return redirect(route('showAllProducts'));

    }

    public function delete(Request $request)
    {
        Product::find($request->id)->delete();
        return null;
    }

    public function showAllDeletedProducts()
    {
        $products = Product::onlyTrashed()->where('type', 'product')->get();
        return view('admin.products.deleted', compact('products'));
    }

    public function restoreProduct(Request $request)
    {
        $product = Product::onlyTrashed()->where('type', 'product')->find($request->id);
        $product->restore();
        return ['message' => 'restored Successfully'];
    }

    public function forceDelete(Request $request)
    {
        $product = Product::onlyTrashed()->where('type', 'product')->find($request->id);
        unlink(public_path() . $product->img_url);
        $product->forceDelete();
        return ['message' => 'deleted Successfully'];
    }

    public function show(Product $product, Request $request)
    {
        return view('admin.products.show', compact('product'));
    }

//    public function uploadSVG(Product $product, Request $request)
//    {
//        $name = time() . $request->file('file')->getClientOriginalName();
//        $request->file('file')->move('products/svg/' . $product->id . '/', $name);
//        $path = '/products/svg/' . $product->id . '/' . $name;
//        $product->svgs()->create([
//            'img_url' => $path
//        ]);
//    }
}
