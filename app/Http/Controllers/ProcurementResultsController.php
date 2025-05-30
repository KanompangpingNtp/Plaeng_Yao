<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostType;
use App\Models\PostDetail;
use App\Models\PostPdf;
use App\Models\PersonnelAgency;
use Illuminate\Support\Facades\Storage;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class ProcurementResultsController extends Controller
{
    //
    public function ProcurementResultsHome()
    {
        $postTypes = PostType::all();

        $postTypeId = $postTypes->firstWhere('type_name', 'ผลประกาศจัดซื้อจัดจ้างประจำปี')->id;
        $postDetails = PostDetail::with('postType', 'pdfs')
            ->where('post_type_id', $postTypeId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.post.procurement_results.procurement_results', compact('postDetails', 'postTypes'));
    }

    public function ProcurementResultsCreate(Request $request)
    {
        $request->validate([
            'post_type_id' => 'required|exists:post_types,id',
            'date' => 'nullable|date',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file',
            'title_name' => 'nullable|string',
        ]);

        $postDetail = PostDetail::create([
            'post_type_id' => $request->post_type_id,
            'date' => $request->date,
            'title_name' => $request->title_name,
        ]);

        // ตรวจสอบและอัปโหลดไฟล์ PDF
        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx'];

                if (!in_array($file->getClientOriginalExtension(), $allowedExtensions)) {
                    return redirect()->back()->with('error', 'รองรับเฉพาะไฟล์ PDF, Word หรือ Excel เท่านั้น!');
                }

                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('documents', $filename, 'public');

                PostPdf::create([
                    'post_detail_id' => $postDetail->id,
                    'post_pdf_file' => $path,
                    'post_file_type' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ไฟล์ประกาศถูกเพิ่มแล้ว!');
    }

    public function ProcurementResultsUpdate(Request $request, $id)
    {
        $request->validate([
            'date' => 'nullable|date',
            'title_name' => 'nullable|string',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:pdf|max:2048',
            'delete_files' => 'nullable|array',
            'delete_files.*' => 'exists:post_pdfs,id',
        ]);

        $postDetail = PostDetail::findOrFail($id);

        // อัปเดตข้อมูลทั่วไป
        $postDetail->update([
            'date' => $request->date,
            'title_name' => $request->title_name,
        ]);

        // ลบไฟล์ที่ถูกเลือก
        if ($request->delete_files) {
            $filesToDelete = PostPdf::whereIn('id', $request->delete_files)->get();
            foreach ($filesToDelete as $file) {
                // ลบไฟล์ออกจาก Storage
                Storage::disk('public')->delete($file->post_pdf_file);
                // ลบข้อมูลในฐานข้อมูล
                $file->delete();
            }
        }

        // อัปโหลดไฟล์ใหม่ถ้ามี
        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx'];

                if (!in_array($file->getClientOriginalExtension(), $allowedExtensions)) {
                    return redirect()->back()->with('error', 'รองรับเฉพาะไฟล์ PDF, Word หรือ Excel เท่านั้น!');
                }

                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('documents', $filename, 'public');

                PostPdf::create([
                    'post_detail_id' => $postDetail->id,
                    'post_pdf_file' => $path,
                    'post_file_type' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'แก้ไขประกาศสำเร็จ!');
    }

    public function ProcurementResultsDelete($id)
    {
        // ค้นหาข้อมูล PostDetail ที่จะลบ
        $postDetail = PostDetail::findOrFail($id);

        // ลบไฟล์ PDF ที่เกี่ยวข้อง (ถ้ามี)
        $postPdfs = $postDetail->pdfs;

        foreach ($postPdfs as $pdfs) {
            // ลบไฟล์จาก storage
            if (Storage::exists('public/' . $pdfs->post_pdf_file)) {
                Storage::delete('public/' . $pdfs->post_pdf_file);
            }
        }

        $postDetail->delete();

        // ส่งกลับไปยังหน้าก่อนหน้าและแสดงข้อความสำเร็จ
        return redirect()->back()->with('success', 'โพสถูกลบแล้ว');
    }

    public function ProcurementResultsDetail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $procurementResults = PostDetail::with(['pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้างประจำปี');
            })->findOrFail($id);

        return view('pages.procurementResults.show_detail', compact(
            'LawsRegsMenu',
            'procurementResults',
            'personnelAgencies',
            'AuthorityDetails',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'PublicMenus',
        ));
    }

    public function ProcurementResultsShowData()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $ProcurementResults = PostDetail::with('postType','photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้างประจำปี');
            })->paginate(14);

        return view('pages.procurementResults.show_data', compact(
            'LawsRegsMenu',
            'ProcurementResults',
            'personnelAgencies',
            'AuthorityDetails',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'PublicMenus',
        ));
    }

    public function ProcurementResultsSearchData(Request $request)
    {
        $searchQuery = $request->input('query');

        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $AuthorityInfoType = BasicInfoType::where('type_name', 'อำนาจหน้าที่')->first();
        $AuthorityDetails = ListDetail::where('basic_info_type_id', $AuthorityInfoType->id)->get();

        $PerfResultsMenu = PerfResultsType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $ProcurementResults = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้างประจำปี');
            })
            ->when($searchQuery, function ($query) use ($searchQuery) {
                return $query->where(function ($q) use ($searchQuery) {
                    $q->where('title_name', 'like', '%' . $searchQuery . '%')
                        ->orWhere('details', 'like', '%' . $searchQuery . '%');
                });
            })
            ->orderBy('date', 'desc')
            ->paginate(14);

        return view('pages.procurementResults.show_data', compact(
            'LawsRegsMenu',
            'ProcurementResults',
            'personnelAgencies',
            'AuthorityDetails',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'PublicMenus',
        ));
    }
}
