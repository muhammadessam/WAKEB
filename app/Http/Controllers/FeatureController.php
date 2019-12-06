<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Lang;
use App\Product;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('admin.Features.index', compact('features'));

    }

    public function create()
    {
        $langs = Lang::all();
        $products = Product::all()->where('type', 'product');
        $services = Service::all()->where('type', 'service');
        return view('admin.Features.create', compact(['langs', 'products', 'services']));
    }

    public function store(Request $request)
    {
        if ($request->has('product')) {
            $product = Product::find($request->product);
            $feature = $product->features()->create(['user_id' => auth()->user()->id]);
            $langs = Lang::all();
            foreach ($langs as $lang) {
                $feature->features_trans()->create([
                    'name' => $request['name_' . $lang->lang],
                    'description' => $request['description_' . $lang->lang],
                    'lang_id' => $lang->id,
                ]);
            }
        }
        if ($request->has('service')) {
            $service = Service::find($request->service);
            $feature = $service->features()->create(['user_id' => auth()->user()->id]);
            $langs = Lang::all();
            foreach ($langs as $lang) {
                $feature->features_trans()->create([
                    'name' => $request['name_' . $lang->lang],
                    'description' => $request['description_' . $lang->lang],
                    'lang_id' => $lang->id,
                ]);
            }
        }
        return redirect()->back()->with(['message' => 'Success']);
    }

    public function edit(Feature $feature)
    {
        $langs = Lang::all();
        $products = Product::all();
        $services = Service::all();
        return view('admin.Features.edit', compact(['feature', 'langs', 'products', 'services']));
    }

    public function update(Feature $feature, Request $request)
    {
        $langs = Lang::all();
        foreach ($langs as $lang) {
            $feature->features_trans()->where('lang_id', '=', $lang->id)->update([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
            ]);
        }
        $feature->save();
        return redirect()->route('showAllFeatures');
    }

    public function delete(Request $request){
        Feature::find($request->id)->delete();
        return null;
    }

    public function showDeletedFeatures(){
        $features = Feature::onlyTrashed()->get();
        return view('admin.Features.deleted', compact('features'));
    }

    public function restore(Request $request){
        Feature::onlyTrashed()->find($request->id)->restore();
        return null;
    }

    public function forceDelete(Request $request){
        Feature::onlyTrashed()->find($request->id)->forceDelete();
        return null;
    }

}
