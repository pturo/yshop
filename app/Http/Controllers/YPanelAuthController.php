<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YPanelAuthController extends Controller
{
    public function store(Request $request) {
        return view('ypanel.dashboard.index');
    }
}
