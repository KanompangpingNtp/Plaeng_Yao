<?php

namespace App\Http\Controllers\ITA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class ITAController extends Controller
{
    public function itaPage ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.ita.page',compact('personnelAgencies'));
    }
}
