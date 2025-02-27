<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\PersonnelAgency;

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
            ->orderBy('created_at', 'desc')
            ->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //ผลประกาศจัดซื้อจัดจ้างประจำปี
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้างประจำปี');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //สรุปผลการจัดซื้อจัดจ้าง
        $average = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'สรุปผลการจัดซื้อจัดจ้าง');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //แผนการจัดซื้อจัดจ้าง
        $revenue = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แผนการจัดซื้อจัดจ้าง');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //ประกาศผู้ชนะการเสนอราคา
        $announcement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศผู้ชนะการเสนอราคา');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //รางวัลแห่งความภาคภูมิใจ
        $awardsPride = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'รางวัลแห่งความภาคภูมิใจ');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //ป้ายประกาศ
        $noticeBoard = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ป้ายประกาศ');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //หนังสือราชการ
        $officialDocuments = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'หนังสือราชการ');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $recommendPlaces = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำสถานที่');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //เมนูบุคลากร
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

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
            'personnelAgencies'
        ));
    }
}
