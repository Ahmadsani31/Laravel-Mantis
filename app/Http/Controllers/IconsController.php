<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Icons';
        return view('pages.icon', compact('pageTitle'));
    }
}
