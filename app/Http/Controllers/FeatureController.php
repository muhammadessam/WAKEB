<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Http\Requests\FeaturesRquest;
use App\Lang;
use App\Product;
use App\Service;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Laravel\Ui\Presets\React;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));

    }

    public function create()
    {
        $langs = Lang::all();
        $products = Product::all()->where('type', 'product');
        $services = Service::all()->where('type', 'service');
        return view('admin.features.create', compact(['langs', 'products', 'services']));
    }

    public function store(FeaturesRquest $request)
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
        return view('admin.features.edit', compact(['feature', 'langs', 'products', 'services']));
    }

    public function update(Feature $feature, Request $request)
    {
        $validator = $request->validate([
            'name_ar' => 'required',
            'description_ar' => 'required',
            'name_en' => 'required',
            'description_en' => 'required'
        ]);
        if ($validator) {
            $langs = Lang::all();
            foreach ($langs as $lang) {
                $feature->features_trans()->where('lang_id', '=', $lang->id)->update([
                    'name' => $request['name_' . $lang->lang],
                    'description' => $request['description_' . $lang->lang],
                ]);
            }
            $feature->save();
            return redirect()->route('showAllFeatures');
        } else {
            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        Feature::find($request->id)->delete();
        return null;
    }

    public function showDeletedFeatures()
    {
        $features = Feature::onlyTrashed()->get();
        return view('admin.features.deleted', compact('features'));
    }

    public function restore(Request $request)
    {
        Feature::onlyTrashed()->find($request->id)->restore();
        return null;
    }

    public function forceDelete(Request $request)
    {
        Feature::onlyTrashed()->find($request->id)->forceDelete();
        return null;
    }

}
