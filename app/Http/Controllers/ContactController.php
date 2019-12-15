<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(ContactUsRequest $request)
    {
        ContactUs::create($request->all());
        return redirect()->back()->with(['message' => 'success']);
    }

    public function showAll()
    {
        $messages = ContactUs::all();
        return view('admin.contact.index', compact('messages'));
    }

    public function show($id)
    {
        $message = ContactUs::find($id);
        return view('admin.contact.show', compact('message'));
    }

    public function read($id)
    {
        $message = ContactUs::find($id);
        $message->read = true;
        $message->save();
        return redirect()->back();

    }
}
