<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    function changeLanguage(Request $request): \Illuminate\Http\RedirectResponse
    {
        $language = $request->language;
        session()->put('locale', $language);
        return back();
    }
}
