<?php

namespace App\Http\Controllers\menu_for_public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class SatisfactionController extends Controller
{
    public function SatisfactionForm ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.menu_for_public.survey.page_form',compact('personnelAgencies'));
    }
}
