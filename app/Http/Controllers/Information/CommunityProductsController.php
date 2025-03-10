<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\BasicInfoDetail;
use App\Models\ListDetail;

class CommunityProductsController extends Controller
{
    public function  CommunityProductsPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'ผลิตภัณฑ์ชุมชน/OTOP')->id;
        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.community_products.page', compact( 'listDetail', 'basicInfoType','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }

    public function ShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        $listDetail = ListDetail::with('images')->findOrFail($id);

        // ส่งข้อมูลไปยังหน้า view
        return view('basic_information.community_products.show_details', compact('listDetail','personnelAgencies','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));
    }
}
