<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypographyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Typography';
        return view('pages.typography', compact('pageTitle'));
    }
}
