<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;

class ShowDataController extends Controller
{
    //
    public function Home()
    {
        //ข่าวประชาสัมพันธ์
        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->orderBy('date', 'desc')
            ->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ผลประกาศจัดซื้อจัดจ้างประจำปี
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้างประจำปี');
            })
            ->orderBy('date', 'desc')
            ->get();

        //สรุปผลการจัดซื้อจัดจ้าง
        $average = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'สรุปผลการจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //แผนการจัดซื้อจัดจ้าง
        $revenue = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แผนการจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ประกาศผู้ชนะการเสนอราคา
        $announcement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศผู้ชนะการเสนอราคา');
            })
            ->orderBy('date', 'desc')
            ->get();

        //รางวัลแห่งความภาคภูมิใจ
        $awardsPride = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'รางวัลแห่งความภาคภูมิใจ');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ป้ายประกาศ
        $noticeBoard = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ป้ายประกาศ');
            })
            ->orderBy('date', 'desc')
            ->get();

        //หนังสือราชการ
        $officialDocuments = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'หนังสือราชการ');
            })
            ->orderBy('date', 'desc')
            ->get();

        //แนะนำสถานที่
        $recommendPlaces = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำสถานที่');
            })
            ->orderBy('date', 'desc')
            ->get();

        //เมนูบุคลากร
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        //ผลการดำเนินงานเมนู
        $PerfResultsMenu = PerfResultsType::all();

        return view('pages.home.app', compact(
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'average',
            'revenue',
            'announcement',
            'awardsPride',
            'noticeBoard',
            'officialDocuments',
            'recommendPlaces',
            'personnelAgencies',
            'AuthorityDetails',
            'PerfResultsMenu'
        ));
    }
}
