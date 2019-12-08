<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Lang;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $langs = Lang::all();
        return view('admin.services.create', compact('langs'));
    }

    public function store(ProductRequest $request)
    {
        $name = time() . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('services/imgs', $name);
        $path = '/services/imgs/' . $name;

        $service = Service::create([
            'img_url' => $path,
            'user_id' => auth()->user()->id,
        ]);

        $langs = Lang::all();

        foreach ($langs as $lang) {
            $service->service_trans()->create([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
                'lang_id' => $lang->id,
            ]);
        }
        $service->type = 'service';
        $service->save();
        return redirect()->back()->with(['message' => 'success']);
    }

    public function edit(Service $service, Request $request)
    {
        $langs = Lang::all();
        return view('admin.services.edit', compact(['service', 'langs']));
    }

    public function update(Service $service, Request $request)
    {
        $langs = Lang::all();
        if ($request->has('img')) {
            $name = time() . $request->file('img')->getClientOriginalName();
            $request->file('img')->move('services/imgs', $name);
            $path = '/services/imgs/' . $name;
            $service->update([
                'img_url' => $path,
            ]);
        }
        foreach ($langs as $lang) {
            $service->service_trans()->where('lang_id', '=', $lang->id)->update([
                'name' => $request['name_' . $lang->lang],
                'description' => $request['description_' . $lang->lang],
            ]);
        }
        $service->save();
        return redirect(route('showAllServices'));

    }

    public function delete(Request $request)
    {
        Service::find($request->id)->delete();
        return null;
    }

    public function showAllDeletedServices()
    {
        $services = Service::onlyTrashed()->where('type', 'service')->get();
        return view('admin.services.deleted', compact('services'));
    }

    public function restoreService(Request $request)
    {
        $service = Service::onlyTrashed()->where('type', 'service')->find($request->id);
        $service->restore();
        return ['message' => 'restored Successfully'];
    }

    public function forceDelete(Request $request)
    {
        $service = Service::onlyTrashed()->where('type', 'service')->find($request->id);
        unlink(public_path() . $service->img_url);
        $service->forceDelete();
        return ['message' => 'deleted Successfully'];
    }

    public function show(Service $service, Request $request)
    {
        return view('admin.services.show', compact('service'));
    }
}
