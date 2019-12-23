<?php

namespace App\Http\Controllers;

use App\Lang;
use App\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $langs = Lang::all();
        $settings = Settings::all();
        return view('admin.about.index', compact(['langs', 'settings']));
    }

    public function save(Request $request)
    {
        $langs = Lang::all();
        foreach ($langs as $lang) {
            Settings::where('lang_id', '=', $lang->id)->update([
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
