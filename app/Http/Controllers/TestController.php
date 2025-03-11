<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\ITAType;
use App\Models\LawsRegsType;

class TestController extends Controller
{
    public function testPage ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('test.page', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function coppyPage1 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('test.page1', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function eservice_pages ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('e-service.page', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function elderly_allowance_pages ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('e-service.elderly_allowance.page', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function general_requests_pages ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('e-service.general_requests.page', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function disability_pages ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('e-service.disability.page', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function receive_assistance_pages ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        $showITA = ITAType::with('itADetails')->get();

        return view('e-service.receive_assistance.page', compact('LawsRegsMenu','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }
}
