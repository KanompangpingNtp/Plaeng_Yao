<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PersonnelGroupPhoto;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;

class PersonnelAgencyController extends Controller
{
    public function AgencyShow($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        // $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);
        // $photos = PersonnelGroupPhoto::whereIn('personnel_rank_id', $agency->ranks->pluck('id'))->get();

        // return view('pages.agency.show', compact('agency','personnelAgencies','photos','AuthorityDetails','OperationalPlanMenu','PerfResultsMenu'));

        $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);
        $photos = PersonnelGroupPhoto::whereIn('personnel_rank_id', $agency->ranks->pluck('id'))->get();

        // แยกข้อความและหมายเลขโทรศัพท์
        preg_match('/(.*?)(\d{2,}-\d{3,}-\d{4,})/', $agency->phone, $matches);
        $text = trim($matches[1] ?? '');
        $phone = trim($matches[2] ?? '');

        // ส่งไปที่ Blade
        return view('pages.agency.show', compact('agency', 'photos', 'text', 'phone', 'AuthorityDetails', 'OperationalPlanMenu', 'PerfResultsMenu','personnelAgencies'));
    }

    public function PersonnelChart()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();

        return view('pages.agency.personnel_chart', compact('personnelAgencies', 'AuthorityDetails', 'OperationalPlanMenu', 'PerfResultsMenu'));
    }
}
