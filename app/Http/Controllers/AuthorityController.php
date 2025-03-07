<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ListDetail;
use App\Models\BasicInfoType;
use App\Models\PerfResultsType;

class AuthorityController extends Controller
{
    public function AuthorityShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();


        $listDetail = ListDetail::with('images','pdf')->findOrFail($id);

        // ส่งข้อมูลไปยังหน้า view
        return view('pages.authority.show_details', compact('listDetail','personnelAgencies','AuthorityDetails','PerfResultsMenu'));
    }
}
