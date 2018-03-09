<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin

    public function index() {

        return view('backend.backend');

    }

}
