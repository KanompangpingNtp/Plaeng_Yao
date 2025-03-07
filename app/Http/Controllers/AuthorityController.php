<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ListDetail;
use App\Models\BasicInfoType;

class AuthorityController extends Controller
{
    public function AuthorityShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $listDetail = ListDetail::with('images','pdf')->findOrFail($id);

        // ส่งข้อมูลไปยังหน้า view
        return view('pages.authority.show_details', compact('listDetail','personnelAgencies'));
    }
}
