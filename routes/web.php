<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProcurementResultsController;
use App\Http\Controllers\AveragePriceController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProcurementPlanController;
use App\Http\Controllers\ShowDataController;
use App\Http\Controllers\AwardsofPrideController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\RecommendPlacesController;
use App\Http\Controllers\OfficialDocumentsController;
use App\Http\Controllers\Personnel\ManagePersonnelController;
use App\Http\Controllers\Personnel\PersonnelAgencyController;
use App\Http\Controllers\TreasuryAnnouncementController;
use App\Http\Controllers\ITA\ITAController;
use App\Http\Controllers\AdminAuthorityController;
use App\Http\Controllers\AuthorityController;
use App\Http\Controllers\menu_for_public\ReceiveComplaintsController;
use App\Http\Controllers\menu_for_public\SatisfactionController;
use App\Http\Controllers\performance_results\AdminPerformanceResultsController;
use App\Http\Controllers\performance_results\PerformanceResultsController;

use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.home.app');
// });

Route::get('/PerformanceResults/show/section/{id}', [PerformanceResultsController::class, 'PerformanceResultsSectionPages'])->name('PerformanceResultsSectionPages');
Route::get('/PerformanceResults/show/section/topic/{id}', [PerformanceResultsController::class, 'PerfResultsSubTopicPages'])->name('PerfResultsSubTopicPages');
Route::get('/PerformanceResults/show/section/topic/details/{id}', [PerformanceResultsController::class, 'PerfResultsShowDetailsPages'])->name('PerfResultsShowDetailsPages');

Route::get('/details', [TestController::class, 'testPage'])->name('testPage');

Route::get('/', [ShowDataController::class, 'Home'])->name('Home');

//เมนูบุคลากร
Route::get('/agency/{id}', [PersonnelAgencyController::class, 'AgencyShow'])->name('AgencyShow');

//กิจกรรม
Route::get('/Activity/ShowData', [ActivityController::class, 'ActivityShowData'])->name('ActivityShowData');
Route::get('/Activity/ShowDetails/{id}', [ActivityController::class, 'ActivityShowDetails'])->name('ActivityShowDetails');
Route::get('/Activity/Search', [ActivityController::class, 'ActivitySearchData'])->name('ActivitySearchData');

//ประชาสัมพันธ์
Route::get('/PressRelease/ShowData', [PressReleaseController::class, 'PressReleaseShowData'])->name('PressReleaseShowData');
Route::get('/PressRelease/ShowDetails/{id}', [PressReleaseController::class, 'PressReleaseShowDetails'])->name('PressReleaseShowDetails');
Route::get('/PressRelease/Search', [PressReleaseController::class, 'PressReleaseSearchData'])->name('PressReleaseSearchData');

//แนะนำสถานที่
Route::get('/RecommendPlaces/ShowData', [RecommendPlacesController::class, 'RecommendPlacesShowData'])->name('RecommendPlacesShowData');
Route::get('/RecommendPlaces/ShowDetails/{id}', [RecommendPlacesController::class, 'RecommendPlacesShowDetails'])->name('RecommendPlacesShowDetails');

//ประกาศของคลัง
Route::get('/TreasuryAnnouncement/ShowData', [TreasuryAnnouncementController::class, 'TreasuryAnnouncementData'])->name('TreasuryAnnouncementData');

//ประกาศจัดซื้อจัดจ้าง
Route::get('/procurement/detail/{id}', [ProcurementController::class, 'ProcurementDetail'])->name('ProcurementDetail');
Route::get('/procurement/ShowData', [ProcurementController::class, 'ProcurementShowData'])->name('ProcurementShowData');
Route::get('/procurement/SearchData', [ProcurementController::class, 'ProcurementSearchData'])->name('ProcurementSearchData');

//ผลประกาศจัดซื้อจัดจ้างประจำปี
Route::get('/procurement-results/detail/{id}', [ProcurementResultsController::class, 'ProcurementResultsDetail'])->name('ProcurementResultsDetail');
Route::get('/procurement-results/ShowData', [ProcurementResultsController::class, 'ProcurementResultsShowData'])->name('ProcurementResultsShowData');
Route::get('/procurement-results/SearchData', [ProcurementResultsController::class, 'ProcurementResultsSearchData'])->name('ProcurementResultsSearchData');

//ประกาศผู้ชนะการเสนอราคา
Route::get('/average-price/detail/{id}', [AveragePriceController::class, 'AveragePriceDetail'])->name('AveragePriceDetail');
Route::get('/average-price/ShowData', [AveragePriceController::class, 'AveragePriceShowData'])->name('AveragePriceShowData');
Route::get('/average-price/SearchData', [AveragePriceController::class, 'AveragePriceSearchData'])->name('AveragePriceSearchData');

//สรุปผลการจัดซื้อจัดจ้าง
Route::get('/revenue/detail/{id}', [RevenueController::class, 'RevenueDetail'])->name('RevenueDetail');
Route::get('/revenue/ShowData', [RevenueController::class, 'RevenueShowData'])->name('RevenueShowData');
Route::get('/revenue/SearchData', [RevenueController::class, 'RevenueSearchData'])->name('RevenueSearchData');

//แผนการจัดซื้อจัดจ้าง
Route::get('/procurement-plan/detail/{id}', [ProcurementPlanController::class, 'ProcurementPlanDetail'])->name('ProcurementPlanDetail');
Route::get('/procurement-plan/ShowData', [ProcurementPlanController::class, 'ProcurementPlanShowData'])->name('ProcurementPlanShowData');
Route::get('/procurement-plan/SearchData', [ProcurementPlanController::class, 'ProcurementPlanSearchData'])->name('ProcurementPlanSearchData');

//ita
Route::get('/ita/page', [ITAController::class, 'itaPage'])->name('itaPage');

//อำนาจหน้าที่
Route::get('/Authority/showdetails/index/{id}', [AuthorityController::class, 'AuthorityShowDetails'])->name('AuthorityShowDetails');

//รับเรื่องราวร้องทุกข์
Route::get('/ReceiveComplaints/form', [ReceiveComplaintsController::class, 'ReceiveComplaintsForm'])->name('ReceiveComplaintsForm');

//รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ
Route::get('/Satisfaction/form', [SatisfactionController::class, 'SatisfactionForm'])->name('SatisfactionForm');

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['check.auth'])->group(function () {
    Route::get('/Dashbord', [AdminController::class, 'Dashbord'])->name('Dashbord');

    //admin PressRelease
    Route::get('/PressRelease/page', [PressReleaseController::class, 'PressReleaseHome'])->name('PressReleaseHome');
    Route::post('/PressRelease/create', [PressReleaseController::class, 'PressReleaseCreate'])->name('PressReleaseCreate');
    Route::delete('/PressRelease/delete{id}', [PressReleaseController::class, 'PressReleaseDelete'])->name('PressReleaseDelete');
    Route::put('/PressRelease/update/{id}', [PressReleaseController::class, 'PressReleaseUpdate'])->name('PressReleaseUpdate');
    Route::put('/PressRelease/{id}/updatefile', [PressReleaseController::class, 'updateFile'])->name('updateFile');

    //admin Activity
    Route::get('/Activity/page', [ActivityController::class, 'ActivityHome'])->name('ActivityHome');
    Route::post('/Activity/create', [ActivityController::class, 'ActivityCreate'])->name('ActivityCreate');
    Route::delete('/Activity/delete{id}', [ActivityController::class, 'ActivityDelete'])->name('ActivityDelete');
    Route::put('/Activity/update/{id}', [ActivityController::class, 'ActivityUpdate'])->name('ActivityUpdate');
    Route::put('/Activity/{id}/updatefile', [ActivityController::class, 'ActivityUpdateFile'])->name('ActivityUpdateFile');

    //admin Procurement
    Route::get('/Procurement/page', [ProcurementController::class, 'ProcurementHome'])->name('ProcurementHome');
    Route::post('/Procurement/create', [ProcurementController::class, 'ProcurementCreate'])->name('ProcurementCreate');
    Route::delete('/Procurement/delete{id}', [ProcurementController::class, 'ProcurementDelete'])->name('ProcurementDelete');
    Route::put('/procurement/update/{id}', [ProcurementController::class, 'ProcurementUpdate'])->name('ProcurementUpdate');

    //admin ProcurementResults
    Route::get('/ProcurementResults/page', [ProcurementResultsController::class, 'ProcurementResultsHome'])->name('ProcurementResultsHome');
    Route::post('/ProcurementResults/create', [ProcurementResultsController::class, 'ProcurementResultsCreate'])->name('ProcurementResultsCreate');
    Route::delete('/ProcurementResults/delete{id}', [ProcurementResultsController::class, 'ProcurementResultsDelete'])->name('ProcurementResultsDelete');
    Route::put('/ProcurementResults/update/{id}', [ProcurementResultsController::class, 'ProcurementResultsUpdate'])->name('ProcurementResultsUpdate');

    //admin AveragePrice
    Route::get('/AveragePrice/page', [AveragePriceController::class, 'AveragePriceHome'])->name('AveragePriceHome');
    Route::post('/AveragePrice/create', [AveragePriceController::class, 'AveragePriceCreate'])->name('AveragePriceCreate');
    Route::delete('/AveragePrice/delete{id}', [AveragePriceController::class, 'AveragePriceDelete'])->name('AveragePriceDelete');
    Route::put('/AveragePrice/update/{id}', [AveragePriceController::class, 'AveragePriceUpdate'])->name('AveragePriceUpdate');

    //admin Revenue
    Route::get('/Revenue/page', [RevenueController::class, 'RevenueHome'])->name('RevenueHome');
    Route::post('/Revenue/create', [RevenueController::class, 'RevenueCreate'])->name('RevenueCreate');
    Route::delete('/Revenue/delete{id}', [RevenueController::class, 'RevenueDelete'])->name('RevenueDelete');
    Route::put('/Revenue/update/{id}', [RevenueController::class, 'RevenueUpdate'])->name('RevenueUpdate');

    //admin Revenue
    Route::get('/ProcurementPlan/page', [ProcurementPlanController::class, 'ProcurementPlanHome'])->name('ProcurementPlanHome');
    Route::post('/ProcurementPlan/create', [ProcurementPlanController::class, 'ProcurementPlanCreate'])->name('ProcurementPlanCreate');
    Route::delete('/ProcurementPlan/delete{id}', [ProcurementPlanController::class, 'ProcurementPlanDelete'])->name('ProcurementPlanDelete');
    Route::put('/ProcurementPlan/update/{id}', [ProcurementPlanController::class, 'ProcurementPlanUpdate'])->name('ProcurementPlanUpdate');

    //admin NoticeBoard
    Route::get('/AwardsofPride/page', [AwardsofPrideController::class, 'AwardsofPrideHome'])->name('AwardsofPrideHome');
    Route::post('/AwardsofPride/create', [AwardsofPrideController::class, 'AwardsofPrideCreate'])->name('AwardsofPrideCreate');
    Route::delete('/AwardsofPride/delete{id}', [AwardsofPrideController::class, 'AwardsofPrideDelete'])->name('AwardsofPrideDelete');

    //admin NoticeBoard
    Route::get('/NoticeBoard/page', [NoticeBoardController::class, 'NoticeBoardHome'])->name('NoticeBoardHome');
    Route::post('/NoticeBoard/create', [NoticeBoardController::class, 'NoticeBoardCreate'])->name('NoticeBoardCreate');
    Route::delete('/NoticeBoard/delete{id}', [NoticeBoardController::class, 'NoticeBoardDelete'])->name('NoticeBoardDelete');

    //admin RecommendPlaces
    Route::get('/RecommendPlaces/page', [RecommendPlacesController::class, 'RecommendPlacesHome'])->name('RecommendPlacesHome');
    Route::post('/RecommendPlaces/create', [RecommendPlacesController::class, 'RecommendPlacesCreate'])->name('RecommendPlacesCreate');
    Route::delete('/RecommendPlaces/delete{id}', [RecommendPlacesController::class, 'RecommendPlacesDelete'])->name('RecommendPlacesDelete');

    //admin OfficialDocuments
    Route::get('/OfficialDocuments/page', [OfficialDocumentsController::class, 'OfficialDocumentsHome'])->name('OfficialDocumentsHome');
    Route::post('/OfficialDocuments/create', [OfficialDocumentsController::class, 'OfficialDocumentsCreate'])->name('OfficialDocumentsCreate');
    Route::put('/OfficialDocuments/update/{id}', [OfficialDocumentsController::class, 'OfficialDocumentsUpdate'])->name('OfficialDocumentsUpdate');
    Route::delete('/OfficialDocuments/delete/{id}', [OfficialDocumentsController::class, 'OfficialDocumentsDelete'])->name('OfficialDocumentsDelete');

    //admin ManagePersonnel
    Route::get('/Personnel/page', [ManagePersonnelController::class, 'ManagePersonnel'])->name('ManagePersonnel');
    Route::post('/Personnel/agency/create', [ManagePersonnelController::class, 'agencyCreate'])->name('agencyCreate');
    Route::put('/Personnel/agency/update/{id}', [ManagePersonnelController::class, 'agencyUpdate'])->name('agencyUpdate');
    Route::delete('/Personnel/agency/delete{id}', [ManagePersonnelController::class, 'agencyDelete'])->name('agencyDelete');

    Route::get('/PersonnelRankDetails/page/{id}', [ManagePersonnelController::class, 'PersonnelRankDetails'])->name('PersonnelRankDetails');
    Route::post('/Personnel/PersonnelRank/create/{id}', [ManagePersonnelController::class, 'PersonnelRankCreate'])->name('PersonnelRankCreate');
    Route::put('/Personnel/PersonnelRank/update/{id}', [ManagePersonnelController::class, 'PersonnelRankUpdate'])->name('PersonnelRankUpdate');
    Route::delete('/Personnel/PersonnelRank/delete{id}', [ManagePersonnelController::class, 'PersonnelRankDelete'])->name('PersonnelRankDelete');

    Route::get('/Personnel/PersonnelRank/PersonnelDetails/page/{id}', [ManagePersonnelController::class, 'PersonnelDetails'])->name('PersonnelDetails');
    Route::post('/Personnel/PersonnelRank/PersonnelDetails/create/{id}', [ManagePersonnelController::class, 'PersonnelDetailsCreate'])->name('PersonnelDetailsCreate');
    Route::put('/Personnel/PersonnelRank/PersonnelDetails/update/{id}', [ManagePersonnelController::class, 'PersonnelDetailsUpdate'])->name('PersonnelDetailsUpdate');
    Route::delete('/Personnel/PersonnelRank/PersonnelDetails/delete{id}', [ManagePersonnelController::class, 'PersonnelDetailsDelete'])->name('PersonnelDetailsDelete');

    Route::get('/PersonnelGroupPhotoPage/page/{id}', [ManagePersonnelController::class, 'PersonnelGroupPhotoPage'])->name('PersonnelGroupPhotoPage');
    Route::post('/PersonnelGroupPhotoPage/create/{id}', [ManagePersonnelController::class, 'PersonnelGroupPhotoCreate'])->name('PersonnelGroupPhotoCreate');
    Route::delete('/PersonnelGroupPhotoPage/delete{id}', [ManagePersonnelController::class, 'PersonnelGroupPhotoDelete'])->name('PersonnelGroupPhotoDelete');

    //Authority
    Route::get('/Admin/Authority/page', [AdminAuthorityController::class, 'AuthorityAdmin'])->name('AuthorityAdmin');
    Route::post('/Admin/Authority/create/name', [AdminAuthorityController::class, 'AuthorityCreate'])->name('AuthorityCreate');
    Route::post('/Admin/Authority/{id}/update', [AdminAuthorityController::class, 'AuthorityNameUpdate'])->name('AuthorityNameUpdate');
    Route::delete('/Admin/Authority/{id}/delete', [AdminAuthorityController::class, 'AuthorityNameDelete'])->name('AuthorityNameDelete');
    Route::get('/Admin/Authority/show/details/{id}', [AdminAuthorityController::class, 'AuthorityShowDertails'])->name('AuthorityShowDertails');
    Route::post('/Admin/Authority/show/details/{id}/create', [AdminAuthorityController::class, 'AuthorityDertailsCreate'])->name('AuthorityDertailsCreate');
    Route::delete('/Admin/Authority/show/details/{id}/delete', [AdminAuthorityController::class, 'AuthorityDetailsDelete'])->name('AuthorityDetailsDelete');

    //PerformanceResults
    Route::get('/Admin/PerformanceResults/page', [AdminPerformanceResultsController::class, 'PerformanceResultsType'])->name('PerformanceResultsType');
    Route::post('/Admin/PerformanceResults/create/name', [AdminPerformanceResultsController::class, 'PerformanceResultsTypeCreate'])->name('PerformanceResultsTypeCreate');
    Route::put('/Admin/PerformanceResults/{id}/update', [AdminPerformanceResultsController::class, 'PerformanceResultsUpdate'])->name('PerformanceResultsUpdate');
    Route::delete('/Admin/PerformanceResults/{id}/delete', [AdminPerformanceResultsController::class, 'PerformanceResultsDelete'])->name('PerformanceResultsDelete');

    Route::get('/Admin/PerformanceResults/show/section/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsShowSection'])->name('PerformanceResultsShowSection');
    Route::post('/Admin/PerformanceResults/show/section/create/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsSectionCreate'])->name('PerformanceResultsSectionCreate');
    Route::put('/Admin/PerformanceResults/show/section/update/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsSectionUpdate'])->name('PerformanceResultsSectionUpdate');
    Route::delete('/Admin/PerformanceResults/show/section/delete/{id}', [AdminPerformanceResultsController::class, 'PerformanceResultsSectionDelete'])->name('PerformanceResultsSectionDelete');

    Route::get('/Admin/PerformanceResults/show/section/topic/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicShowSection'])->name('PerfResultsSubTopicShowSection');
    Route::post('/Admin/PerformanceResults/show/section/topic/create/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicCreate'])->name('PerfResultsSubTopicCreate');
    Route::put('/Admin/PerformanceResults/show/section/topic/update/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicUpdate'])->name('PerfResultsSubTopicUpdate');
    Route::delete('/Admin/PerformanceResults/show/section/topic/delete/{id}', [AdminPerformanceResultsController::class, 'PerfResultsSubTopicDelete'])->name('PerfResultsSubTopicDelete');

    Route::get('/Admin/PerformanceResults/show/section/topic/detail/{id}', [AdminPerformanceResultsController::class, 'PerfResultsShowDetails'])->name('PerfResultsShowDetails');
    Route::post('/Admin/PerformanceResults/show/section/topic/detail/create/{id}', [AdminPerformanceResultsController::class, 'PerfResultsDetailsCreate'])->name('PerfResultsDetailsCreate');
    Route::delete('/Admin/PerformanceResults/show/section/topic/detail/delete/{id}', [AdminPerformanceResultsController::class, 'PerfResultsDetailsDelete'])->name('PerfResultsDetailsDelete');
});
