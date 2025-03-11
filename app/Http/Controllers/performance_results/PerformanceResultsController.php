<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PerfResultsSection;
use App\Models\PerfResultsSubTopic;
use App\Models\PerfResultsFile;
use Illuminate\Support\Facades\Storage;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;

class PerformanceResultsController extends Controller
{
    public function PerformanceResultsSectionPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $PerfResultsType = PerfResultsType::findOrFail($id);
        $PerfResultsSection = PerfResultsSection::where('type_id', $id)->get();

        return view('pages.performance_results.page_section', compact('LawsRegsMenu','PerfResultsType', 'PerfResultsSection', 'OperationalPlanMenu','personnelAgencies','AuthorityDetails','PerfResultsMenu','OperationalPlanMenu'));
    }

    public function PerfResultsSubTopicPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $PerfResultsSection = PerfResultsSection::with('type')->findOrFail($id);
        $PerfResultsSubTopic = PerfResultsSubTopic::where('section_id', $id)->get();

        return view('pages.performance_results.page_sub_topic', compact('LawsRegsMenu','PerfResultsSection', 'PerfResultsSubTopic', 'personnelAgencies','AuthorityDetails','PerfResultsMenu','OperationalPlanMenu'));
    }

    public function PerfResultsShowDetailsPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        $PerfResultsSubTopic = PerfResultsSubTopic::with('section.type')->findOrFail($id);
        $PerfResultsFile = PerfResultsFile::where('sub_topic_id', $id)->get();

        return view('pages.performance_results.page_detail', compact('PerfResultsSubTopic', 'PerfResultsFile', 'personnelAgencies','AuthorityDetails','PerfResultsMenu','OperationalPlanMenu'));
    }
}
