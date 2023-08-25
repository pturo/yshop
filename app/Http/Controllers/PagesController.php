<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Different routes through main pages
     */
    public function index() {
        return view("pages.index");
    }

    public function products() {

    }

    public function contact() {}

    public function login() {}

    public function y_panel_login() {
        return view('ypanel.auth.login');
    }

}
