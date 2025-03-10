<?php

namespace App\Http\Controllers\laws_and_regulations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperationalPlanFile;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\LawsRegsSection;
use App\Models\LawsRegsFiles;

class LawsAndRegulationsController extends Controller
{
    public function LawsAndRegulationsSectionPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();

        $OperationalPlanMenu = OperationalPlanType::all();

        $LawsRegsType = LawsRegsType::findOrFail($id);
        $LawsRegsSection = LawsRegsSection::where('type_id', $id)->get();

        return view('pages.laws_and_regulations.page_section', compact('LawsRegsType', 'LawsRegsSection', 'personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function LawsAndRegulationsShowDetailsPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();

        $OperationalPlanMenu = OperationalPlanType::all();

        $LawsRegsSection = LawsRegsSection::with('type')->findOrFail($id);
        $LawsRegsFiles = LawsRegsFiles::where('section_id', $id)->get();

        return view('pages.laws_and_regulations.page_detail', compact('LawsRegsSection', 'LawsRegsFiles', 'personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }
}
