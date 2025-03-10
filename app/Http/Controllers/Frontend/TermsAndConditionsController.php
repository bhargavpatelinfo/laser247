<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TermsAndConditionsController extends Controller
{
    public function show() {
        return view('frontend.terms-and-conditions.index');
    }
}
