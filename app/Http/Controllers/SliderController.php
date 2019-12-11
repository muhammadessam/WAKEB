<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Slider;
use Illuminate\Http\Request;
use App\Lang;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        $langs = Lang::all();
        return view('admin.sliders.create', compact('langs'));
    }

    public function store(SliderRequest $request)
    {
        $slider = Slider::create([
        ]);

        $langs = Lang::all();
        foreach ($langs as $lang) {
            $slider->trans()->create([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
                'lang_id' => $lang->id,
            ]);
        }
        $slider->save();
        return redirect()->back()->with(['message' => 'success']);
    }

    public function edit(Slider $slider, Request $request)
    {
        $langs = Lang::all();
        return view('admin.sliders.edit', compact(['slider', 'langs']));
    }

    public function update(Slider $slider, Request $request)
    {
        $langs = Lang::all();
        foreach ($langs as $lang) {
            $slider->trans()->where('lang_id', '=', $lang->id)->update([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
            ]);
        }
        $slider->save();
        return redirect(route('sliderShowAll'));

    }

    public function delete(Request $request)
    {
        Slider::find($request->id)->delete();
        return null;
    }

    public function showAllDeletedSliders()
    {
        $sliders = Slider::onlyTrashed()->get();
        return view('admin.sliders.deleted', compact('sliders'));
    }

    public function restoreSlider(Request $request)
    {
        $product = Slider::onlyTrashed()->find($request->id);
        $product->restore();
        return ['message' => 'restored Successfully'];
    }

    public function forceDelete(Request $request)
    {
        $slider = Slider::onlyTrashed()->find($request->id);
        $slider->forceDelete();
        return ['message' => 'deleted Successfully'];
    }
}
