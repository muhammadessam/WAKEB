<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('product_tans')->get();
        return view('admin.products.index', compact('products'));
    }

    public function show(User $user, Request $request)
    {

    }

    public function edit(Product $product, Request $request)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect(route('showAllUsers'))->with(['message' => 'Modified Successfully']);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back()->with(['message' => 'success']);
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $loggedUser = auth()->user();
        if ($loggedUser->id == $user->id) {
            return ['error'];
        } else {
            $user->delete();
            return $user;
        }
    }


    public function showAllDeletedUsers()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.users.deleted', compact('users'));
    }

    public function restoreUser(Request $request)
    {
        $user = User::onlyTrashed()->find($request->id);
        $user->restore();
        return ['message'=>'restored Successfully'];
    }

    public function forceDelete(Request $request)
    {
        $user = User::onlyTrashed()->find($request->id);
        $user->forceDelete();
        return ['message'=>'deleted Successfully'];
    }
}
