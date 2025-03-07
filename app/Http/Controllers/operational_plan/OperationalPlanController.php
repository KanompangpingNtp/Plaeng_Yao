<?php

namespace App\Http\Controllers\operational_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperationalPlanFile;
use App\Models\OperationalPlanSection;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;

class OperationalPlanController extends Controller
{
    public function OperationalPlanSectionPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();

        $OperationalPlanMenu = OperationalPlanType::all();

        $OperationalPlanType = OperationalPlanType::findOrFail($id);
        $OperationalPlanSection = OperationalPlanSection::where('type_id', $id)->get();

        return view('pages.operational_plan.page_section', compact('OperationalPlanType', 'OperationalPlanSection', 'personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function OperationalPlanShowDetailsPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();

        $OperationalPlanMenu = OperationalPlanType::all();

        $OperationalPlanSection = OperationalPlanSection::with('type')->findOrFail($id);
        $OperationalPlanFile = OperationalPlanFile::where('section_id', $id)->get();

        return view('pages.operational_plan.page_detail', compact('OperationalPlanSection', 'OperationalPlanFile', 'personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }
}
