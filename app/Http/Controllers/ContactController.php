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
}
