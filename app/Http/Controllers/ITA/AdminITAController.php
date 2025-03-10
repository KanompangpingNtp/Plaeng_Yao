<?php

namespace App\Http\Controllers\ITA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ITADetails;
use App\Models\ITAType;

class AdminITAController extends Controller
{

    public function  AdminITAType()
    {
        $showITAType = ITAType::all();

        return view('admin.post.ita.page_type', compact('showITAType'));
    }

    public function ITATypeCreate(Request $request)
    {
        $request->validate([
            'type_name' => 'required|string',
        ]);

        // dd($request);

        ITAType::create([
            'type_name' => $request->type_name,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function ITATypeUpdate(Request $request, $id)
    {
        $request->validate([
            'type_name' => 'required|string',
        ]);

        $ITAType = ITAType::findOrFail($id);
        $ITAType->update([
            'type_name' => $request->type_name,
        ]);

        return redirect()->back()->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว!');
    }

    public function ITATypeDelete($id)
    {
        $ITAType = ITAType::find($id);
        $ITAType->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลสำเร็จ');
    }

    public function AdminITA($id)
    {
        $ITAType = ITAType::findOrFail($id);
        $ITADetails = ITADetails::where('type_id', $id)->get();

        return view('admin.post.ita.ita_page', compact('ITAType', 'ITADetails'));
    }

    public function ITACreate(Request $request, $TypeId)
    {
        $request->validate([
            'title_name' => 'required|string',
            'url_name' => 'nullable|string',
            'url_link' => 'nullable|string|url',
            'detail' => 'nullable|string',
        ]);

        // dd($request);

        ITADetails::create([
            'type_id' => $TypeId,
            'title_name' => $request->title_name,
            'url_name' => $request->url_name,
            'url_link' => $request->url_link,
            'detail' => $request->detail,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function ITAUpdate(Request $request, $id)
    {
        $request->validate([
            'title_name' => 'required|string',
            'url_name' => 'nullable|string',
            'url_link' => 'nullable|string|url',
            'detail' => 'nullable|string',
        ]);

        $ITADetails = ITADetails::findOrFail($id);
        $ITADetails->update([
            'title_name' => $request->title_name,
            'url_name' => $request->url_name,
            'url_link' => $request->url_link,
            'detail' => $request->detail,
        ]);

        return redirect()->back()->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว!');
    }

    public function ITADelete($id)
    {
        $detail = ITADetails::find($id);
        $detail->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
