<?php

namespace App\Http\Controllers\eservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class TemporaryController extends Controller
{
    public function EserviceUserAccount()
    {
        return view('eservice.users.page');
    }

    public function EserviceAdminAccount()
    {
        return view('eservice.admin.page');
    }

    public function EservicePage ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        return view('eservice.page',compact(
            'PublicMenus',
            'LawsRegsMenu',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityDetails',
            'OperationalPlanMenu'
        ));
    }
}
