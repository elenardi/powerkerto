<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbadminController extends Controller
{
    public function index() {
        return view ('dbadmin');
    }
}
