<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('newsletter');
    }

    public function subscribe(Request $request)
    {
        if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return response()->json(['email is valid.'], 200);
        }
        return response()->json(['email is not valid.'], 500);
    }
}
