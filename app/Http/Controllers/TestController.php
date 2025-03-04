<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class TestController extends Controller
{
    public function testPage ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('test.page', compact('personnelAgencies'));
    }
}
