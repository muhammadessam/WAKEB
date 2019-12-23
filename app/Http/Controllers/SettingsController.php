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
        return view('admin.settings.index', compact(['langs', 'settings']));
    }

    public function save(Request $request)
    {
        $langs = Lang::all();
        if($request->has('img')){
            $name = time() . $request->file('img')->getClientOriginalName();
            $request->file('img')->move('assets/images', $name);
            $path = '/assets/images/' . $name;
            foreach ($langs as $lang) {
                Settings::where('lang_id', '=', $lang->id)->update([
                    'img_url' => $path
                ]);
            }
        }
        foreach ($langs as $lang) {
            Settings::where('lang_id', '=', $lang->id)->update([
                'name' => $request['name_' . $lang->lang],
                'description'=>$request['description_'. $lang->lang],
                'author'=>$request['author_'. $lang->lang],
                'location'=>$request['description_'. $lang->lang],
                'tw'=>$request['tw'],
                'fb'=>$request['fb'],
                'yt'=>$request['yt'],
                'li'=>$request['li'],
                'url'=>$request['url'],
                'phone'=>$request['phone'],
                'mobile'=>$request['mobile'],
                'email'=>$request['email'],
                'keywords'=>$request['keywords']
            ]);
        }
        return redirect(route('getSettingsPage'));
    }
}
