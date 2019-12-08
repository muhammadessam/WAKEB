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

    public function edit(Solution $solution, Request $request)
    {
        $langs = Lang::all();
        return view('admin.solutions.edit', compact(['langs', 'solution']));
    }

    public function update(Solution $solution, Request $request)
    {
        $langs = Lang::all();
        if ($request->has('img')) {
            $name = time() . $request->file('img')->getClientOriginalName();
            $request->file('img')->move('products/imgs', $name);
            $path = '/solution/imgs/' . $name;
            $solution->update([
                'img_url' => $path,
            ]);
        }
        foreach ($langs as $lang) {
            $solution->trans()->where('lang_id', '=', $lang->id)->update([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
            ]);
        }
        $solution->save();
        return redirect(route('showAllSolutions'));
    }

    public function delete(Request $request)
    {
        Solution::find($request->id)->delete();
        return null;
    }

    public function showDeleted()
    {
        $solutions = Solution::onlyTrashed()->get();
        return view('admin.solutions.deleted', compact('solutions'));
    }

    public function restore(Request $request)
    {
        $solution = Solution::onlyTrashed()->find($request->id);
        $solution->restore();
        return ['message' => 'restored Successfully'];
    }

    public function forceDelete(Request $request)
    {
        $solution = Solution::onlyTrashed()->find($request->id);
        unlink(public_path() . $solution->img_url);
        $solution->forceDelete();
        return ['message' => 'deleted Successfully'];
    }
}
