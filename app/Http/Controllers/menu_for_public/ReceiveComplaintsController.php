<?php

namespace App\Http\Controllers\menu_for_public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class ReceiveComplaintsController extends Controller
{
    public function ReceiveComplaintsForm ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

       return view('pages.menu_for_public.receive_complaints.page_form',compact('personnelAgencies'));
    }
}
