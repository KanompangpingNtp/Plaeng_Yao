<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Dashbord()
    {
        return view('admin.layout.layout');
    }
}
