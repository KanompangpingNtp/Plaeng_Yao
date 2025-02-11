<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostDetail;

class ShowDataController extends Controller
{
    //
    public function Home()
    {
        //ข่าวประชาสัมพันธ์
        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })->get();

        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })->get();

        //ผลจัดซื้อจัดจ้าง
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลจัดซื้อจัดจ้าง');
            })->get();

        //ประกาศราคากลาง
        $average = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })->get();

        //งานเก็บรายได้
        $revenue = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'งานเก็บรายได้');
            })->get();

        //แนะนำห้องเรียน
        $classroom = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำห้องเรียน');
            })->get();

        //อาคารและสถานทื่
        $building = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'อาคารและสถานทื่');
            })->get();

        return view('user.home.home', compact(
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'average',
            'revenue',
            'classroom',
            'building'
        ));
    }

    public function PressReleaseShowDetails($id)
    {
        //ข่าวประชาสัมพันธ์
        $pressRelease = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->findOrFail($id);

        return view('user.press-release.detail-data.index', compact('pressRelease'));
    }

    public function ActivityShowDetails($id)
    {
        //กิจกรรม
        $activity = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->findOrFail($id);

        return view('user.activity.detail-data.index', compact('activity'));
    }

    public function ClassRoomShowDetails($id)
    {
        //แนะนำห้องเรียน
        $classroom = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำห้องเรียน');
            })
            ->findOrFail($id);

        return view('user.classroom.detail-data.index', compact('classroom'));
    }

    public function BuildingShowDetails($id)
    {
        //อาคารและสถานทื่
        $building = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'อาคารและสถานทื่');
            })
            ->findOrFail($id);

        return view('user.building-places.detail-data.index', compact('building'));
    }

    public function PressReleaseShowData()
    {
        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })->get();

        return view('user.press-release.show-data.index', compact('pressRelease'));
    }

    public function ActivityShowData()
    {
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })->get();

        return view('user.activity.show-data.index', compact('activity'));
    }

    public function BuildingShowData()
    {
        $building = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'อาคารและสถานทื่');
            })->get();

        return view('user.building-places.show-data.index', compact('building'));
    }

    public function ClassRoomShowData()
    {
        $classroom = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'แนะนำห้องเรียน');
            })->get();

        return view('user.classroom.show-data.index', compact('classroom'));
    }

    public function AnnounceShowData()
    {
        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })->get();

        //ผลจัดซื้อจัดจ้าง
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลจัดซื้อจัดจ้าง');
            })->get();

        //ประกาศราคากลาง
        $average = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })->get();

        //งานเก็บรายได้
        $revenue = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'งานเก็บรายได้');
            })->get();

        return view('user.announce.show-data.index', compact(
            'procurement',
            'procurementResults',
            'average',
            'revenue',
        ));
    }
}
