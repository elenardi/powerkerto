<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbcsController extends Controller
{
    public function index() {
        return view ('dbcs');
    }
}
