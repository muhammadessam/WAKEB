<?php

namespace App\Http\Controllers;

use App\Http\Requests\UseCaseRequest;
use App\Lang;
use App\Solution;
use App\UseCase;
use Illuminate\Http\Request;

class UseCaseController extends Controller
{

    public function index()
    {
        $usecases = UseCase::all();
        return view('admin.useCases.index', compact('usecases'));
    }

    public function create()
    {
        $langs = Lang::all();
        $solutions = Solution::all();
        return view('admin.useCases.create', compact(['langs', 'solutions']));
    }

    public function store(UseCaseRequest $request)
    {
        $name = time() . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('useCases/imgs', $name);
        $path = '/useCases/imgs/' . $name;

        $usecase = UseCase::create([
            'img_url' => $path,
            'user_id' => auth()->user()->id,
            'solution_id' => $request->solution
        ]);

        $langs = Lang::all();

        foreach ($langs as $lang) {
            $usecase->trans()->create([
                'title' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
                'challenges' => $request['challenges_' . $lang->lang],
                'opportunities' => $request['opportunities_' . $lang->lang],
                'why_wakeb' => $request['whyWakeb_' . $lang->lang],
                'lang_id' => $lang->id,
            ]);
        }
        $usecase->save();
        return redirect()->back()->with(['message' => 'success']);
    }

    public function edit(UseCase $useCase, Request $request)
    {
        $langs = Lang::all();
        $solutions = Solution::all();
        return view('admin.useCases.edit', compact(['langs', 'solutions', 'useCase']));
    }

    public function update(UseCase $useCase, UseCaseRequest $request)
    {
        $langs = Lang::all();
        if ($request->has('img')) {
            $name = time() . $request->file('img')->getClientOriginalName();
            $request->file('img')->move('products/imgs', $name);
            $path = '/solution/imgs/' . $name;
            $useCase->update([
                'img_url' => $path,
            ]);
        }

        foreach ($langs as $lang) {
            $useCase->trans()->where('lang_id', '=', $lang->id)->update([
                'title' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
                'challenges' => $request['challenges_' . $lang->lang],
                'opportunities' => $request['opportunities_' . $lang->lang],
                'why_wakeb' => $request['whyWakeb_' . $lang->lang],
            ]);
        }
        $useCase->save();
        return redirect()->route('useCasesShowAll');
    }


    public function delete(Request $request)
    {
        UseCase::find($request->id)->delete();
        return null;
    }

    public function deleted()
    {
        $usecases = UseCase::onlyTrashed()->get();
        return view('admin.useCases.deleted', compact('usecases'));
    }

    public function restore(Request $request)
    {
        $usecase = UseCase::onlyTrashed()->find($request->id);
        $usecase->restore();
        return ['message' => 'restored Successfully'];
    }

    public function forceDelete(Request $request)
    {
        $usecase = UseCase::onlyTrashed()->find($request->id);
        unlink(public_path() . $usecase->img_url);
        $usecase->forceDelete();
        return ['message' => 'deleted Successfully'];
    }
}
