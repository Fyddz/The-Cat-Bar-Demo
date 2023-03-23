<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use App\Models\Cat;
use function compact;
use function view;
use Illuminate\Http\Request;
class BarController extends Controller
{

    public function bars()
    {
        $bars = Bar::with('cats')->get();

        return view('bars', compact('bars'));
    }

    public function bar(Request $request)
    {
        $bar = Bar::with('cats')->findOrFail($request['bar_id']);
        $cats = $bar->cats;

        return view('bar', compact(
            'bar',
            'cats'
        ));
    }
}
