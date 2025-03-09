<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;

class WebPagesController extends Controller
{
    public function ContectPages()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();

        $OperationalPlanMenu = OperationalPlanType::all();

        return view('pages.contect.app',compact('personnelAgencies','AuthorityDetails','PerfResultsMenu','OperationalPlanMenu'));
    }

    public function BannserPages()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();

        $OperationalPlanMenu = OperationalPlanType::all();

        return view('pages.banner-in.app',compact('personnelAgencies','AuthorityDetails','PerfResultsMenu','OperationalPlanMenu'));
    }
}
