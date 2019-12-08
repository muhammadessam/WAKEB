<?php

namespace App\Http\Controllers;

use App\Solution;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::all();
        dd($solutions);
        return view('admin.solutions.index', compact('solutions'));
    }
}
