<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ListDetail;
use App\Models\BasicInfoType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class ImportantPlacesController extends Controller
{
    public function  ImportantPlacesPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'สถานที่สำคัญ/แหล่งท่องเที่ยว')->id;
        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.important_places.page', compact(
            'PublicMenus',
            'LawsRegsMenu',
            'listDetail',
            'basicInfoType',
            'personnelAgencies',
            'AuthorityDetails',
            'OperationalPlanMenu',
            'PerfResultsMenu'
        ));
    }

    public function ImportantPlacesShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $listDetail = ListDetail::with('images')->findOrFail($id);

        return view('basic_information.important_places.show_details', compact(
            'PublicMenus',
            'LawsRegsMenu',
            'listDetail',
            'personnelAgencies',
            'AuthorityDetails',
            'OperationalPlanMenu',
            'PerfResultsMenu'
        ));
    }
}
