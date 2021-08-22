<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Models\Artikel;
use App\Models\Feed;
use App\Models\Friendship;
use App\Models\Survey;
use App\Models\SurveyJawaban;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;
use App\Models\Bidang;
use App\Models\Forum;
use App\Models\HistoriPendidikan;
use App\Models\PengalamanKerja;
use App\Models\Vacancies;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Barryvdh\DomPDF\Facade as PDF;

$router->get('/', function () use ($router) {
    // return env('APP_NAME');
    // $factory = (new Factory)->withServiceAccount(base_path() .'/pampsi-1f5f0-firebase-adminsdk-g02oe-fef8c198de.json');
    // $messaging = $factory->createMessaging();
    // $message = CloudMessage::withTarget('token', 'eRCR2xdvR3COHpfW2RoG7x:APA91bFunKCAGAIsb-KSbsRhiDCJDwpfu6AeOqoPGLN54c5Roz_ew78eqx1wiGzdUe9qjaAaw0zCHItal4JDtTqJgeswBg67FgQUsLk1N_9_u8Wxa4Uadou0ZKjUe4ZLyZYJT0e9QAvg')
    //     ->withNotification(Notification::create('Title','Pampsi')) // optional
    //     ->withData(['key' => 'value']) // optional
    //     ;
    // $report = $messaging->send($message);
    // $user = User::find(3);
    // $pengalamanKerja = PengalamanKerja::where('user_id',$user->id)->get();
    // $pendidikan = HistoriPendidikan::where('user_id',$user->id)->get();
    // $bidang = Bidang::where('id',$user->bidang_id)->first();
    // if(@$user){
    //         $pdf = PDF::loadView('cv.index',compact('user','pengalamanKerja','pendidikan','bidang'));
    //         return $pdf->stream();
    //         return $pdf->download('cv.pdf');
    // }
});

//auth route
$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('/login', 'LoginController@login');
    $router->post('/logout', 'LoginController@logout');
    $router->post('/password/reset-request', 'RequestPasswordController@sendResetLinkEmail');
    $router->post('/password/reset', [ 'as' => 'password.reset', 'uses' => 'ResetPasswordController@reset' ]);
    $router->get('/verifikasi/{id}', 'LoginController@verifikasi');
    $router->post('/fcm', 'LoginController@fcmToken');
});

//register
$router->group(['prefix' => 'user'], function () use ($router) {
    $router->post('/daftar', 'UserController@register');
    $router->post('/update', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'UserController@update']);
});

$router->group(['prefix' => 'admin','middleware' => ['auth','role:ADMIN|KAMPUS|PSIKOLOG']], function () use ($router) {
    $router->post('/import-alumni', 'ImportUserController@importAlumni');
    $router->post('/import-user', 'ImportUserController@importUser');
    $router->get('/list-registran', 'UserController@listRegistran');
    $router->get('/unlist-registran', 'UserController@unlistRegistran');
    $router->post('/confirm-registran', 'UserController@confirmRegistran');
    $router->get('/ignore-registran/{id}', 'UserController@ignoreRegistran');

    //assign moderator
    $router->post('/moderator/{id}/assign', 'ModeratorForumController@assignModerator');
    $router->post('/moderator/{id}/unassign', 'ModeratorForumController@unassignModerator');

    //agenda
    $router->get('/agenda', 'AgendaController@listAgenda');
    $router->get('/agenda/{id}/view', 'AgendaController@viewAgenda');
    $router->post('/agenda/create', 'AgendaController@createAgenda');
    $router->post('/agenda/{id}/update', 'AgendaController@updateAgenda');
    $router->post('/agenda/{id}/delete', 'AgendaController@deleteAgenda');
    $router->get('/agenda/{id}/psikolog/{idPsikolog}', 'AgendaController@daftarAgenda');
    $router->get('/agenda/{id}/participant', 'AgendaController@dataParticipantAgenda');
    
    //agenda dokumentasi
    $router->post('/agenda/dokumentasi', 'AgendaDokumentasiController@createAgendaDokumentasi');
    $router->get('/agenda/{id}/dokumentasi/list', 'AgendaDokumentasiController@listAgendaDokumentasi');
    $router->get('/agenda/dokumentasi/{id}/delete', 'AgendaDokumentasiController@deleteAgendaDokumentasi');

    //vacancies
    $router->post('/vacancies/create', 'VacanciesController@createVacancies');
    $router->post('/vacancies/{id}/update', 'VacanciesController@updateVacancies');
    $router->post('/vacancies/{id}/delete', 'VacanciesController@deleteVacancies');
    $router->post('/vacancies-kategori/create', 'VacanciesController@createKategoriVacancies');
    $router->post('/vacancies-kategori/{nama}/update', 'VacanciesController@updateKategoriVacancies');
    $router->post('/vacancies-kategori/{nama}/delete', 'VacanciesController@deleteKategoriVacancies');

    //user
    $router->get('/user/{id}/status', 'UserController@updateStatusAkun');
    
    //log activity
    $router->get('/activity', 'ActivityController@listActivity');

    //export
    $router->get('/export-user', 'ExportController@exportUser');
    
    //forum
    $router->post('/forum-status-acc/update', 'ForumController@updateStatusAccForum');
});
//end register


//admin psikolog
$router->get('/admin/list-psikolog/{type}/{value}', ['middleware' => ['auth','role:ADMIN|KAMPUS'], 'uses' => 'PsikologController@listPsikolog']);

//psikolog route
$router->group(['prefix' => 'user'], function () use ($router) {
    $router->get('/list-psikolog', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PsikologController@list']);
    $router->get('/{id}/view', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'PsikologController@viewUser']);
    $router->get('/{username}/view/username', ['uses' => 'PsikologController@viewUserUsername']);
    $router->post('/{id}/photo-profile', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PsikologController@photoProfile']);
    $router->post('/{id}/profile', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PsikologController@profile']);
    $router->post('/update-akun', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PsikologController@updateAkun']);
    $router->get('/my-profile', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'PsikologController@myProfile']);

    //pengalaman kerja
    $router->get('/pengalaman-kerja/{id}/view', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanKerjaController@listPengalamanKerja']);
    $router->post('/pengalaman-kerja/create', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanKerjaController@createPengalamanKerja']);
    $router->post('/pengalaman-kerja/{id}/update', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanKerjaController@updatePengalamanKerja']);
    $router->post('/pengalaman-kerja/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanKerjaController@deletePengalamanKerja']);

    //histori pendidikan
    $router->get('/histori-pendidikan/{id}/list', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'HistoriPendidikanController@listHistoriPendidikan']);
    $router->post('/histori-pendidikan/create', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'HistoriPendidikanController@createHistoriPendidikan']);
    $router->post('/histori-pendidikan/{id}/update', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'HistoriPendidikanController@updateHistoriPendidikan']);
    $router->post('/histori-pendidikan/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'HistoriPendidikanController@deleteHistoriPendidikan']);

    //portfolio
    $router->post('/portfolio/{id}/list', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PortfolioController@listPortfolio']);
    $router->get('/portfolio/{id}/view', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PortfolioController@viewPortfolio']);
    $router->post('/portfolio/create', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PortfolioController@createPortfolio']);
    $router->post('/portfolio/{id}/update', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PortfolioController@updatePortfolio']);
    $router->post('/portfolio/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PortfolioController@deletePortfolio']);

    //rekomendasi
    $router->get('/rekomendasi/{id}/list', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'RekomendasiController@listRekomendasi']);
    $router->post('/rekomendasi/create', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'RekomendasiController@createRekomendasi']);
    $router->post('/rekomendasi/{id}/update', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'RekomendasiController@updateRekomendasi']);
    $router->post('/rekomendasi/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'RekomendasiController@deleteRekomendasi']);

    //feed
    $router->get('/feeds-list', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'FeedsController@listFeeds']);
    $router->get('/feeds', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'FeedsController@myFeeds']);
    $router->get('/feeds/{id}/view', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'FeedsController@viewFeeds']);
    $router->post('/feeds/create', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'FeedsController@createFeed']);
    $router->post('/feeds/{id}/update', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'FeedsController@updateFeed']);
    $router->post('/feeds/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'FeedsController@deleteFeed']);
    $router->post('/feeds/{id}/like', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'FeedsController@likeFeed']);
    $router->post('/feeds/{id}/unlike', ['middleware' => 'auth', 'uses' => 'FeedsController@unLikeFeed']);

    //comment
    $router->get('/comment/{id}/view/{model}', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'CommentController@viewComment']);
    $router->post('/comment/create/{model}', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'CommentController@createComment']);
    $router->post('/comment/{id}/update', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'CommentController@updateComment']);
    $router->post('/comment/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'CommentController@deleteComment']);

    //artikel
    $router->post('/artikel/private', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@privateArtikel']);
    $router->get('/artikel/public', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@publicArtikel']);
    $router->get('/artikel/{id}/view', ['middleware' => ['auth','role:ADMIN|PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@viewArtikel']);
    $router->get('/artikel', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@myArtikel']);
    $router->post('/artikel/create', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@createArtikel']);
    $router->post('/artikel/{id}/update', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@updateArtikel']);
    $router->post('/artikel/{id}/delete', ['middleware' => ['auth','role:ADMIN|PSIKOLOG|KAMPUS'], 'uses' => 'ArtikelController@deleteArtikel']);
    $router->post('/artikel-kategori', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'ArtikelController@listKategoriArtikel']);
    $router->post('/artikel-kategori/create', ['middleware' => ['auth','role:ADMIN'], 'uses' => 'ArtikelController@createKategoriArtikel']);
    $router->post('/artikel-kategori/{nama}/update', ['middleware' => ['auth','role:ADMIN'], 'uses' => 'ArtikelController@updateKategoriArtikel']);
    $router->post('/artikel-kategori/{nama}/delete', ['middleware' => ['auth','role:ADMIN'], 'uses' => 'ArtikelController@deleteKategoriArtikel']);
    $router->post('/artikel/like', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS|ADMIN'], 'uses' => 'ArtikelController@likeArtikel']);
    $router->post('/artikel/unlike', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS|ADMIN'], 'uses' => 'ArtikelController@unLikeArtikel']);

    //ebook
    $router->get('/ebook/private', ['middleware' => 'auth', 'uses' => 'EbookController@privateEbook']);
    $router->get('/ebook/public', ['middleware' => 'auth', 'uses' => 'EbookController@publicEbook']);
    $router->get('/ebook', ['middleware' => 'auth', 'uses' => 'EbookController@myEbook']);
    $router->get('/ebook/{id}/view', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'EbookController@viewEbook']);
    $router->post('/ebook/create', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'EbookController@createEbook']);
    $router->post('/ebook/{id}/update', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'EbookController@updateEbook']);
    $router->post('/ebook/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS'], 'uses' => 'EbookController@deleteEbook']);
    $router->post('/ebook/like', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS|ADMIN'], 'uses' => 'EbookController@likeEbook']);
    $router->post('/ebook/unlike', ['middleware' => ['auth','role:PSIKOLOG|KAMPUS|ADMIN'], 'uses' => 'EbookController@unLikeEbook']);

    //pengalaman kerja
    $router->post('/pengalaman', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanController@myPengalaman']);
    $router->post('/pengalaman/create', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanController@createPengalaman']);
    $router->post('/pengalaman/{id}/update', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanController@updatePengalaman']);
    $router->post('/pengalaman/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG'], 'uses' => 'PengalamanController@deletePengalaman']);

    //forum
    $router->get('/forum-kategori', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@listKategoriForum']);
    $router->post('/forum-kategori/create', ['middleware' => ['auth','role:ADMIN'], 'uses' => 'ForumController@createKategoriForum']);
    $router->post('/forum-kategori/{nama}/update', ['middleware' => ['auth','role:ADMIN'], 'uses' => 'ForumController@updateKategoriForum']);
    $router->post('/forum-kategori/{nama}/delete', ['middleware' => ['auth','role:ADMIN'], 'uses' => 'ForumController@deleteKategoriForum']);
    $router->get('/forum', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'ForumController@listForum']);
    $router->get('/forum/{id}/view', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'ForumController@viewForum']);
    $router->post('/forum/create', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@createForum']);
    $router->post('/forum/{id}/update', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@updateForum']);
    $router->post('/forum/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@deleteForum']);
    $router->post('/forum/{id}/like', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@likeForum']);
    $router->post('/forum/{id}/unlike', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@unLikeForum']);
    $router->get('/forum/comment/{id}/view', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'CommentForumController@viewCommentForum']);
    $router->post('/forum/comment/{id}/create', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'CommentForumController@createCommentForum']);
    $router->post('/forum/comment/{id}/update', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'CommentForumController@updateCommentForum']);
    $router->post('/forum/comment/{id}/delete', ['middleware' => ['auth','role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'CommentForumController@deleteCommentForum']);
    $router->get('/forum/sort-comment',['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'ForumController@listSortCommentForum']);

    //notifikasi
    $router->post('/notifikasi', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'NotifikasiController@listNotifikasi']);
    $router->get('/notifikasi/{id}/view', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'NotifikasiController@viewNotifikasi']);

    //kolega
    $router->get('/kolega', ['middleware' => ['auth','role:PSIKOLOG|ADMIN'], 'uses' => 'PsikologController@listKolega']);

    //survey
    $router->get('/survey', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'SurveyController@listSurvey']);
    $router->get('/survey/{id}/view', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'SurveyController@viewSurvey']);
    $router->post('/survey/create', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'SurveyController@createSurvey']);
    $router->post('/survey/{id}/update', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'SurveyController@updateSurvey']);
    $router->post('/survey/{id}/delete', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'SurveyController@deleteSurvey']);
    $router->get('/survey/response-by-me', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN|KAMPUS'], 'uses' => 'SurveyController@responseByMe']);

    //survey soal
    // $router->post('/soal/create', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN'], 'uses' => 'SoalController@createSoal']);
    // $router->post('/soal/{id}/update', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN'], 'uses' => 'SoalController@updateSoal']);
    $router->get('/soal/{id}/delete', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN'], 'uses' => 'SoalController@deleteSoal']);
    // $router->post('/soal-pilihan/{id}/delete', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN'], 'uses' => 'SoalController@deletePilihanSoal']);
    // $router->post('/soal-pilihan/{id}/create', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN'], 'uses' => 'SoalController@createPilihanSoal']);
    $router->post('/soal/pilihan', ['middleware' => ['auth', 'role:PSIKOLOG|ADMIN'], 'uses' => 'SoalController@soalPilihan']);

    //vacancies
    $router->get('/vacancies', ['middleware' => ['auth','role:ADMIN|PSIKOLOG|KAMPUS'],'uses' => 'VacanciesController@listVacancies']);
    $router->get('/vacancies-kategori', ['middleware' => ['auth','role:ADMIN|PSIKOLOG'],'uses' => 'VacanciesController@listKategoriVacancies']);
    $router->get('/vacancies/applyers', ['middleware'=> ['auth','role:ADMIN|KAMPUS|PSIKOLOG'],'uses' => 'VacanciesApplyController@listApplyer']);
    $router->post('/vacancies/applyers/{id}/status', ['middleware'=> ['auth','role:ADMIN|KAMPUS|PSIKOLOG'],'uses' => 'VacanciesApplyController@statusApplyer']);
    $router->get('/vacancies/my-apply', ['middleware'=> ['auth','role:PSIKOLOG'],'uses' => 'VacanciesApplyController@myApply']);
    $router->get('/vacancies/{id}/apply', ['middleware' => ['auth','role:PSIKOLOG'],'uses' => 'VacanciesApplyController@applyVacancies']);

    //recent activity
    $router->get('/recent-activity/{model}', ['middleware' => ['auth','role:ADMIN|PSIKOLOG|KAMPUS'],'uses' => 'ActivityController@recentActivity']);

    //cv
    $router->get('/cv','CvController@generateCv');
    $router->get('/cv-delete', 'CvController@deleteCv');
});

//friendship route
$router->group(['prefix' => 'user','middleware' => ['auth','role:PSIKOLOG']], function () use ($router) {
    //list friend
    $router->get('/friends', 'FriendshipController@friends');
    //list blocked by me
    $router->get('/blocked-friends', 'FriendshipController@blocks');
    //list request connection
    $router->get('/friends-request', 'FriendshipController@listRequest');
    //request connection
    $router->post('/friends-request', 'FriendshipController@friendRequest');
    //approve request
    $router->post('/friends-request-approve', 'FriendshipController@approve');
    //reject request
    $router->post('/friends-request-reject', 'FriendshipController@reject');
    //block user
    $router->post('/friend-block', 'FriendshipController@block');
    //unblock
    $router->post('/friend-unblock', 'FriendshipController@unblock');
    //unfriend
    $router->post('/unfriend', 'FriendshipController@unfriend');
});

//kampus route
$router->group(['prefix' => 'admin', 'middleware' => ['auth','role:ADMIN']], function () use ($router) {
    //universitas
    $router->get('/all-universitas', 'UniversitasController@listUniversitas');
    $router->get('/universitas/{id}/view', 'UniversitasController@view');
    $router->post('/universitas/create', 'UniversitasController@createUniversitas');
    $router->post('/universitas/{id}/update', 'UniversitasController@updateUniversitas');
    $router->post('/universitas/{id}/delete', 'UniversitasController@deleteUniversitas');
    

    //jurusan
    $router->get('/all-jurusan', 'JurusanController@listAll');
    $router->post('/jurusan/{id}/view', 'JurusanController@view');
    $router->post('/jurusan/create', 'JurusanController@createJurusan');
    $router->post('/jurusan/{id}/update', 'JurusanController@updateJurusan');
    $router->post('/jurusan/{id}/delete', 'JurusanController@deleteJurusan');
});

//region route
$router->group(['prefix' => 'admin', 'middleware' => ['auth','role:ADMIN']], function () use ($router) {
    //negara
    $router->get('/all-negara', 'NegaraController@listNegara');
    $router->post('/negara/{id}/view', 'NegaraController@view');
    $router->post('/negara/create', 'NegaraController@createNegara');
    $router->post('/negara/{id}/update', 'NegaraController@updateNegara');
    $router->post('/negara/{id}/delete', 'NegaraController@deleteNegara');

    //provinsi
    $router->get('/all-provinsi', 'ProvinsiController@listProvinsi');
    $router->post('/provinsi/{id}/view', 'ProvinsiController@view');
    $router->get('/provinsi/negara/{id}', 'ProvinsiController@listProvinsiNegara');
    $router->post('/provinsi/create', 'ProvinsiController@createProvinsi');
    $router->post('/provinsi/{id}/update', 'ProvinsiController@updateProvinsi');
    $router->post('/provinsi/{id}/delete', 'ProvinsiController@deleteProvinsi');

    //kota
    $router->get('/all-kota', 'KotaController@listKota');
    $router->post('/kota/{id}/view', 'KotaController@view');
    $router->get('/kota/provinsi/{id}', 'KotaController@listKotaProvinsi');
    $router->post('/kota/create', 'KotaController@createKota');
    $router->post('/kota/{id}/update', 'KotaController@updateKota');
    $router->post('/kota/{id}/delete', 'KotaController@deleteKota');
});

//route bidang
$router->group(['prefix' => 'admin', 'middleware' => ['auth','role:ADMIN']], function () use ($router) {
    //negara
    $router->get('/all-bidang', 'BidangController@listAll');
    $router->post('bidang/create','BidangController@createBidang');
    $router->post('bidang/{id}/update','BidangController@updateBidang');
    $router->post('bidang/{id}/delete','BidangController@deleteBidang');
    $router->post('bidang/{id}/view','BidangController@viewBidang');
});

//route data public
$router->group(['prefix' => 'general'], function () use ($router) {
    $router->get('/all-universitas', 'UniversitasController@generalListUniversitas');
    $router->get('/all-jurusan', 'JurusanController@generalListJurusan');  
    $router->get('/all-kota', 'KotaController@generalListKota');
    $router->get('/all-provinsi', 'ProvinsiController@generalListProvinsi');
    $router->get('/all-negara', 'NegaraController@generalListNegara');
    $router->get('/all-bidang', 'BidangController@generalListBidang');
    $router->get('/all-psikolog', 'PsikologController@generalListPsikolog');
    $router->get('/all-artikel', 'ArtikelController@generalListArtikel');
    $router->get('/all-ebook', 'EbookController@generalListEbook');
    $router->get('/artikel/{id}/view', 'ArtikelController@generalViewArtikel');
    $router->get('/ebook/{id}/view', 'EbookController@generalViewEbook');
    $router->get('/psikolog/{id}/view', 'PsikologController@generalViewPsikolog');
    $router->get('/jumlah/{model}', 'JumlahController@jumlahModel');
    $router->post('/resend-verifikasi', 'LoginController@resendVerifikasi');
    $router->post('/password/reset-request', 'RequestPasswordController@sendResetLinkEmail');
    $router->post('/password/reset', ['as' => 'password.reset', 'uses' => 'ResetPasswordController@reset']);
    $router->get('/user/{id}/view', 'PsikologController@viewUserPublic');
    $router->get('/user/{username}/view-username', 'PsikologController@viewUserPublicUsername');
    $router->get('/survey', 'SurveyController@listSurveyPublic');
    $router->get('/export-user', 'ExportController@exportUser');
    $router->post('/soal-jawaban/{id}/create', 'JawabanController@createJawaban');
    $router->get('/rekomendasi/{id}/list', 'RekomendasiController@listRekomendasiPublic');
    $router->post('/feedback','FeedbackController@createFeedback');
    $router->get('/feedback','FeedbackController@listFeedback');
    $router->get('/feedback/{id}/delete','FeedbackController@deleteFeedback');
});

//route faq
$router->group(['prefix' => 'faq'], function () use ($router) {
    $router->get('/','FaqController@listFaq');
    $router->post('/create',['middleware' => ['auth','role:ADMIN'], 'uses' => 'FaqController@createFaq']);
    $router->post('/{id}/update',['middleware' => ['auth','role:ADMIN'], 'uses' => 'FaqController@updateFaq']);
    $router->post('/{id}/delete',['middleware' => ['auth','role:ADMIN'], 'uses' => 'FaqController@deleteFaq']);
});

//moderator
$router->group(['prefix' => 'moderator', 'middleware' => ['auth','role:MODERATOR']], function () use ($router) {
    $router->get('/{kategori}/list','ModeratorForumController@listModerator');
    $router->post('/forum/{id}/status', 'ForumController@updateStatusForum');
});

//auditrail route
$router->group(['namespace' => '\Rap2hpoutre\LaravelLogViewer'/* ,'middleware' => ['auth','role:KAMPUS'] */], function() use ($router) {
    $router->get('logs', 'LogViewerController@index');
});

//chating
$router->post('/chat/store','ChatController@storeChat');