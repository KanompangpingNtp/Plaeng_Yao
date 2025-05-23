<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class WebPagesController extends Controller
{
    public function ContectPages()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $PublicMenus = PublicMenusType::all();

        return view('pages.contect.app',compact(
            'LawsRegsMenu',
            'personnelAgencies',
            'AuthorityDetails',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'PublicMenus',
        ));
    }

    public function BannserPages()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $PublicMenus = PublicMenusType::all();

        return view('pages.banner-in.app',compact(
            'LawsRegsMenu',
            'personnelAgencies',
            'AuthorityDetails',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'PublicMenus',
        ));
    }
}
