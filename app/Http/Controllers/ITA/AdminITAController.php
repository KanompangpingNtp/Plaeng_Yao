<?php

namespace App\Http\Controllers\ITA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\ListDetailImage;
use App\Models\ListDetailsPdf;
use Illuminate\Support\Facades\Storage;

class AdminITAController extends Controller
{
    public function  AuthorityAdmin()
    {
        $basicInfoType = BasicInfoType::all();

        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'อำนาจหน้าที่')->id;

        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('admin.post.authority.page', compact('listDetail', 'basicInfoType'));
    }
}
