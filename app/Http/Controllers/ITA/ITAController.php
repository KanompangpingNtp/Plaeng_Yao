<?php

namespace App\Http\Controllers\ITA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\ITAType;
use App\Models\LawsRegsType;

class ITAController extends Controller
{
    public function itaPage ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails.iTALinks')->get();

        // dd($showITA);

        return view('pages.ita.page',compact('LawsRegsMenu','showITA','personnelAgencies','PerfResultsMenu','AuthorityDetails','OperationalPlanMenu'));
    }
}
