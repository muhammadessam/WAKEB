<?php

namespace App\Http\Controllers;

use App\Lang;
use App\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::all();
        return view('admin.solutions.index', compact('solutions'));
    }

    public function create()
    {
        $langs = Lang::all();
        return view('admin.solutions.create', compact('langs'));
    }

    public function store(Request $request)
    {
        $name = time() . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('solutions/imgs', $name);
        $path = '/solutions/imgs/' . $name;
        $solution = Solution::create([
            'img_url' => $path,
            'user_id' => auth()->user()->id,
        ]);
        $langs = Lang::all();

        foreach ($langs as $lang) {
            $solution->trans()->create([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
                'lang_id' => $lang->id,
            ]);
        }
        $solution->save();
        return redirect()->back()->with(['message' => 'success']);
    }
}
