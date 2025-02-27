<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class PersonnelAgencyController extends Controller
{
    public function AgencyShow($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);

        return view('pages.agency.show', compact('agency','personnelAgencies'));
    }
}
