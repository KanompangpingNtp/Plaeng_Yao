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
use App\Http\Controllers\operational_plan\AdminOperationalPlanController;
use App\Http\Controllers\operational_plan\OperationalPlanController;
use App\Http\Controllers\ITA\AdminITAController;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\WebPagesController;
use App\Http\Controllers\Information\HistoryController;
use App\Http\Controllers\Information\AdminHistoryController;
use App\Http\Controllers\Information\VisionMissionController;
use App\Http\Controllers\Information\AdminVisionMissionController;
use App\Http\Controllers\Information\AdminCommunityProductsController;
use App\Http\Controllers\Information\CommunityProductsController;
use App\Http\Controllers\Information\AdminImportantPlacesController;
use App\Http\Controllers\Information\ImportantPlacesController;
use App\Http\Controllers\Information\AdminGeneralInformationController;
use App\Http\Controllers\Information\GeneralInformationController;
use App\Http\Controllers\laws_and_regulations\AdminLawsAndRegulationsController;
use App\Http\Controllers\laws_and_regulations\LawsAndRegulationsController;

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

Route::get('/details', [TestController::class, 'testPage'])->name('testPage');
Route::get('/details/page/test', [TestController::class, 'coppyPage1'])->name('coppyPage1');



Route::get('/forum/page', [TestController::class, 'forum_pages'])->name('forum_pages');

//eservice
Route::get('/e-service/page', [TestController::class, 'eservice_pages'])->name('eservice_pages');
Route::get('/e-service/elderly_allowance/page', [TestController::class, 'elderly_allowance_pages'])->name('elderly_allowance_pages');
Route::get('/e-service/general_requests/page', [TestController::class, 'general_requests_pages'])->name('general_requests_pages');
Route::get('/e-service/disability/page', [TestController::class, 'disability_pages'])->name('disability_pages');
Route::get('/e-service/receive_assistance/page', [TestController::class, 'receive_assistance_pages'])->name('receive_assistance_pages');


//ข้อมูลพื้นฐาน
Route::get('/History/page', [HistoryController::class, 'HistoryPage'])->name('HistoryPage');
Route::get('/VisionMission/page', [VisionMissionController::class, 'VisionMissionPage'])->name('VisionMissionPage');
Route::get('/CommunityProducts/page', [CommunityProductsController::class, 'CommunityProductsPage'])->name('CommunityProductsPage');
Route::get('/CommunityProducts/showdetails/index/{id}', [CommunityProductsController::class, 'ShowDetails'])->name('ShowDetails');
Route::get('/ImportantPlaces/page', [ImportantPlacesController::class, 'ImportantPlacesPage'])->name('ImportantPlacesPage');
Route::get('/ImportantPlaces/showdetails/index/{id}', [ImportantPlacesController::class, 'ImportantPlacesShowDetails'])->name('ImportantPlacesShowDetails');
Route::get('/GeneralInformation/page', [GeneralInformationController::class, 'GeneralInformationPage'])->name('GeneralInformationPage');

Route::get('/Contect/Pages', [WebPagesController::class, 'ContectPages'])->name('ContectPages');
Route::get('/Bannser/Pages', [WebPagesController::class, 'BannserPages'])->name('BannserPages');

//ผลการดำเนินงาน
Route::get('/PerformanceResults/show/section/{id}', [PerformanceResultsController::class, 'PerformanceResultsSectionPages'])->name('PerformanceResultsSectionPages');
Route::get('/PerformanceResults/show/section/topic/{id}', [PerformanceResultsController::class, 'PerfResultsSubTopicPages'])->name('PerfResultsSubTopicPages');
Route::get('/PerformanceResults/show/section/topic/details/{id}', [PerformanceResultsController::class, 'PerfResultsShowDetailsPages'])->name('PerfResultsShowDetailsPages');

//แผนงานพัฒนาท้องถิ่น
Route::get('/OperationalPlan/show/section/{id}', [OperationalPlanController::class, 'OperationalPlanSectionPages'])->name('OperationalPlanSectionPages');
Route::get('/OperationalPlan/show/section/details/{id}', [OperationalPlanController::class, 'OperationalPlanShowDetailsPages'])->name('OperationalPlanShowDetailsPages');

//กฏหมายและกฏระเบียบ
Route::get('/LawsAndRegulations/show/section/{id}', [LawsAndRegulationsController::class, 'LawsAndRegulationsSectionPages'])->name('LawsAndRegulationsSectionPages');
Route::get('/LawsAndRegulations/show/section/details/{id}', [LawsAndRegulationsController::class, 'LawsAndRegulationsShowDetailsPages'])->name('LawsAndRegulationsShowDetailsPages');

Route::get('/', [ShowDataController::class, 'Home'])->name('Home');

//เมนูบุคลากร
Route::get('/personnel_chart', [PersonnelAgencyController::class, 'PersonnelChart'])->name('PersonnelChart');
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

    //OperationalPlan
    Route::get('/Admin/OperationalPlan/page', [AdminOperationalPlanController::class, 'OperationalPlanType'])->name('OperationalPlanType');
    Route::post('/Admin/OperationalPlan/create/name', [AdminOperationalPlanController::class, 'OperationalPlanTypeCreate'])->name('OperationalPlanTypeCreate');
    Route::put('/Admin/OperationalPlan/{id}/update', [AdminOperationalPlanController::class, 'OperationalPlanUpdate'])->name('OperationalPlanUpdate');
    Route::delete('/Admin/OperationalPlan/{id}/delete', [AdminOperationalPlanController::class, 'OperationalPlanDelete'])->name('OperationalPlanDelete');

    Route::get('/Admin/OperationalPlan/show/section/{id}', [AdminOperationalPlanController::class, 'OperationalPlanShowSection'])->name('OperationalPlanShowSection');
    Route::post('/Admin/OperationalPlan/show/section/create/{id}', [AdminOperationalPlanController::class, 'OperationalPlanSectionCreate'])->name('OperationalPlanSectionCreate');
    Route::put('/Admin/OperationalPlan/show/section/update/{id}', [AdminOperationalPlanController::class, 'OperationalPlanSectionUpdate'])->name('OperationalPlanSectionUpdate');
    Route::delete('/Admin/OperationalPlan/show/section/delete/{id}', [AdminOperationalPlanController::class, 'OperationalPlanSectionDelete'])->name('OperationalPlanSectionDelete');

    Route::get('/Admin/OperationalPlan/show/section/detail/{id}', [AdminOperationalPlanController::class, 'OperationalPlanShowDetails'])->name('OperationalPlanShowDetails');
    Route::post('/Admin/OperationalPlan/show/section/detail/create/{id}', [AdminOperationalPlanController::class, 'OperationalPlanDetailCreate'])->name('OperationalPlanDetailCreate');
    Route::delete('/Admin/OperationalPlan/show/section/detail/delete/{id}', [AdminOperationalPlanController::class, 'OperationalPlanDetailDelete'])->name('OperationalPlanDetailDelete');

    //ITA
    Route::get('/Admin/ITA/type/page', [AdminITAController::class, 'AdminITAType'])->name('AdminITAType');
    Route::post('/Admin/ITA/type/create', [AdminITAController::class, 'ITATypeCreate'])->name('ITATypeCreate');
    Route::put('/Admin/ITA/type/update/{id}', [AdminITAController::class, 'ITATypeUpdate'])->name('ITATypeUpdate');
    Route::delete('/Admin/ITA/type/delete/{id}', [AdminITAController::class, 'ITATypeDelete'])->name('ITATypeDelete');

    Route::get('/Admin/ITA/type/detail/page/{id}', [AdminITAController::class, 'AdminITA'])->name('AdminITA');
    Route::post('/Admin/ITA/create/{id}', [AdminITAController::class, 'ITACreate'])->name('ITACreate');
    Route::put('/Admin/ITA/update/{id}', [AdminITAController::class, 'ITAUpdate'])->name('ITAUpdate');
    Route::delete('/Admin/ITA/delete/{id}', [AdminITAController::class, 'ITADelete'])->name('ITADelete');
    Route::delete('iTALink/{id}', [AdminITAController::class, 'destroy'])->name('ITAlink.destroy');

    //History
    Route::get('/Admin/History/page', [AdminHistoryController::class, 'HistoryAdmin'])->name('HistoryAdmin');
    Route::post('/Admin/History/create', [AdminHistoryController::class, 'HistoryCreate'])->name('HistoryCreate');
    Route::delete('/Admin/History/delete/{id}', [AdminHistoryController::class, 'HistoryDelete'])->name('HistoryDelete');

    //VisionMission
    Route::get('/Admin/VisionMission/page', [AdminVisionMissionController::class, 'VisionMissionAdmin'])->name('VisionMissionAdmin');
    Route::post('/Admin/VisionMission/create', [AdminVisionMissionController::class, 'VisionMissionCreate'])->name('VisionMissionCreate');
    Route::delete('/Admin/VisionMission/delete/{id}', [AdminVisionMissionController::class, 'VisionMissionDelete'])->name('VisionMissionDelete');

    //CommunityProducts
    Route::get('/Admin/CommunityProducts/page', [AdminCommunityProductsController::class, 'CommunityProductsAdmin'])->name('CommunityProductsAdmin');
    Route::post('/Admin/CommunityProducts/create/name', [AdminCommunityProductsController::class, 'CommunityProductsNameCreate'])->name('CommunityProductsNameCreate');
    Route::delete('/Admin/CommunityProducts/{id}/delete', [AdminCommunityProductsController::class, 'CommunityProductDelete'])->name('CommunityProductDelete');
    Route::post('/Admin/CommunityProducts/{id}/update', [AdminCommunityProductsController::class, 'CommunityProductsNameUpdate'])->name('CommunityProductsNameUpdate');
    Route::get('/Admin/CommunityProducts/show/details/{id}', [AdminCommunityProductsController::class, 'CommunityProductShowDertails'])->name('CommunityProductShowDertails');
    Route::post('/Admin/CommunityProducts/show/details/{id}/create', [AdminCommunityProductsController::class, 'CommunityProductDertailsCreate'])->name('CommunityProductDertailsCreate');
    Route::delete('/Admin/CommunityProducts/show/details/{id}/delete', [AdminCommunityProductsController::class, 'CommunityProductDetailsDelete'])->name('CommunityProductDetailsDelete');

    //ImportantPlaces
    Route::get('/Admin/ImportantPlaces/page', [AdminImportantPlacesController::class, 'ImportantPlacesAdmin'])->name('ImportantPlacesAdmin');
    Route::post('/Admin/ImportantPlaces/create/name', [AdminImportantPlacesController::class, 'ImportantPlacesNameCreate'])->name('ImportantPlacesNameCreate');
    Route::delete('/Admin/ImportantPlaces/{id}/delete', [AdminImportantPlacesController::class, 'ImportantPlacesDelete'])->name('ImportantPlacesDelete');
    Route::post('/Admin/ImportantPlaces/{id}/update', [AdminImportantPlacesController::class, 'ImportantPlacesNameUpdate'])->name('ImportantPlacesNameUpdate');
    Route::get('/Admin/ImportantPlaces/show/details/{id}', [AdminImportantPlacesController::class, 'ImportantPlacesShowDertails'])->name('ImportantPlacesShowDertails');
    Route::post('/Admin/ImportantPlaces/show/details/{id}/create', [AdminImportantPlacesController::class, 'ImportantPlacesDertailsCreate'])->name('ImportantPlacesDertailsCreate');
    Route::delete('/Admin/ImportantPlaces/show/details/{id}/delete', [AdminImportantPlacesController::class, 'ImportantPlacesDetailsDelete'])->name('ImportantPlacesDetailsDelete');

    //LawsAndRegulations
    Route::get('/Admin/LawsAndRegulations/page', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsType'])->name('LawsAndRegulationsType');
    Route::post('/Admin/LawsAndRegulations/create/name', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsTypeCreate'])->name('LawsAndRegulationsTypeCreate');
    Route::put('/Admin/LawsAndRegulations/{id}/update', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsUpdate'])->name('LawsAndRegulationsUpdate');
    Route::delete('/Admin/LawsAndRegulations/{id}/delete', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsDelete'])->name('LawsAndRegulationsDelete');

    Route::get('/Admin/LawsAndRegulations/show/section/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsShowSection'])->name('LawsAndRegulationsShowSection');
    Route::post('/Admin/LawsAndRegulations/show/section/create/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsSectionCreate'])->name('LawsAndRegulationsSectionCreate');
    Route::put('/Admin/LawsAndRegulations/show/section/update/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsSectionUpdate'])->name('LawsAndRegulationsSectionUpdate');
    Route::delete('/Admin/LawsAndRegulations/show/section/delete/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsSectionDelete'])->name('LawsAndRegulationsSectionDelete');

    Route::get('/Admin/LawsAndRegulations/show/section/detail/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsShowDetails'])->name('LawsAndRegulationsShowDetails');
    Route::post('/Admin/LawsAndRegulations/show/section/detail/create/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsDetailCreate'])->name('LawsAndRegulationsDetailCreate');
    Route::delete('/Admin/LawsAndRegulations/show/section/detail/delete/{id}', [AdminLawsAndRegulationsController::class, 'LawsAndRegulationsDetailDelete'])->name('LawsAndRegulationsDetailDelete');

    //GeneralInformation
    Route::get('/Admin/GeneralInformation/page', [AdminGeneralInformationController::class, 'GeneralInformationAdmin'])->name('GeneralInformationAdmin');
    Route::post('/Admin/GeneralInformation/create', [AdminGeneralInformationController::class, 'GeneralInformationCreate'])->name('GeneralInformationCreate');
    Route::delete('/Admin/GeneralInformation/delete/{id}', [AdminGeneralInformationController::class, 'GeneralInformationDelete'])->name('GeneralInformationDelete');

});

Route::get('/visitor-stats', [VisitorsController::class, 'getVisitorStats']);
