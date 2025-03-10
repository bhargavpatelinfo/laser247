<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function show() {
        return view('frontend.privacy-policy.index');
    }
}
