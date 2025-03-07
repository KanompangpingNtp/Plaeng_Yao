<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PerfResultsSection;
use App\Models\PerfResultsSubTopic;
use App\Models\PerfResultsFile;
use Illuminate\Support\Facades\Storage;
use App\Models\PersonnelAgency;

class PerformanceResultsController extends Controller
{
    public function PerformanceResultsSectionPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsType = PerfResultsType::findOrFail($id);
        $PerfResultsSection = PerfResultsSection::where('type_id', $id)->get();

        return view('pages.performance_results.page_section', compact('PerfResultsType', 'PerfResultsSection', 'personnelAgencies'));
    }

    public function PerfResultsSubTopicPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsSection = PerfResultsSection::with('type')->findOrFail($id);
        $PerfResultsSubTopic = PerfResultsSubTopic::where('section_id', $id)->get();

        return view('pages.performance_results.page_sub_topic', compact('PerfResultsSection', 'PerfResultsSubTopic', 'personnelAgencies'));
    }

    // public function PerfResultsShowDetailsPages($id)
    // {
    //     $personnelAgencies = PersonnelAgency::with('ranks')->get();

    //     $PerfResultsSubTopic = PerfResultsSubTopic::with('section.type')->findOrFail($id);
    //     $PerfResultsFile = PerfResultsFile::where('sub_topic_id', $id)->get();

    //     return view('pages.performance_results.page_detail', compact('PerfResultsSubTopic', 'PerfResultsFile','personnelAgencies'));
    // }
    public function PerfResultsShowDetailsPages($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsSubTopic = PerfResultsSubTopic::with('section.type')->findOrFail($id);
        $PerfResultsFile = PerfResultsFile::where('sub_topic_id', $id)->get();

        return view('pages.performance_results.page_detail', compact('PerfResultsSubTopic', 'PerfResultsFile', 'personnelAgencies'));
    }
}
