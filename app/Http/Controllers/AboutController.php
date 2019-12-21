<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\AboutRequest;
use App\Lang;
use App\Product;
use App\Service;
use App\Slider;
use App\Solution;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $langs = Lang::all();
        $abouts = About::all();
        return view('admin.about.index', compact(['langs', 'abouts']));
    }

    public function save(Request $request)
    {
        $langs = Lang::all();
        foreach ($langs as $lang) {
            About::where('lang_id', '=', $lang->id)->update([
                'title' => $request['name_' . $lang->lang],
                'about_us' => $request['about_us_' . $lang->lang],
                'our_goals' => $request['our_goals_' . $lang->lang],
                'vision' => $request['vision_' . $lang->lang],
                'how_we_work' => $request['how_we_work_' . $lang->lang],
            ]);
        }
        return redirect(route('getAboutEditPage'));
    }

}
