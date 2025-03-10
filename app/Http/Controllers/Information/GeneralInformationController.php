<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoDetail;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;

class GeneralInformationController extends Controller
{
    public function  GeneralInformationPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'ข้อมูลสภาพทั่วไป')->id;
        $basicInfoDetail = BasicInfoDetail::with('type', 'images', 'pdf')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.general_information.page',compact('basicInfoDetail','basicInfoType','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }
}
