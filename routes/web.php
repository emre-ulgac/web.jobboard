<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/deneme', 'HomeController@deneme');


Route::get('/anasayfa', 'HomeController@getAllHome');

Route::get('/tags', 'ClientController@obtainAllTag');



/**
 * Login, Register and Forgot Password Routes
 */
Route::get('/giris', 'SignInController@signIn');
Route::post('/giris-yap', 'SignInController@login')->name('login');
Route::get('cikis-yap', 'SignInController@logout');
Route::get('kayit-ol', 'SignUpController@getRegister');
Route::post('kayit', 'SignUpController@register')->name('kayit');
//Route::get('parolami-unuttum', 'ForgotPasswordController@forgotPassword');
//Route::get('dogrula/{verification_token}', 'VerifyController@verify');

Route::get('test', 'ClientController@obtainAccessToken');


Route::get('/', 'SignInController@signIn');

Route::get('/profil/{slug}', 'ProfileController@getOneProfile');

Route::get('ilan-arama', 'JobController@allJobSearch');






Route::get('hakkimizda', function () {
    return view('pages.aboutus');
});



Route::get('iletisim', function () {
    return view('pages.contact');
});


Route::get('ilan-detayi', function () {
    return view('pages.job-detail');
});

Route::get('isci/{slug}', 'Panel\UserController@getOneUser');


Route::get('isveren', function () {
    return view('pages.employer');
});

Route::get('isveren', function () {
    return view('pages.employer');
});

Route::get('isveren-ara', function () {
    return view('pages.employer-search');
});






/**
 * ISVEREN ROUTES
 */

Route::get('/', 'SignInController@signIn');



Route::get('isveren/anasayfa','Panel\HomeController@anasayfa')->name('isveren-home');


Route::get('is-ilani-paylas','Panel\JobPostController@getJobPost')->name('job-post-form');

Route::get('is-ilani-guncelle/{slug}','Panel\JobPostController@getJobUpdate')->name('job-update-form');


Route::post('isilani','Panel\JobPostController@PostJob')->name('job-post');
Route::put('isilaniguncelle/{id}','Panel\JobPostController@JobUpdate')->name('job-update');

Route::get('is-ilani/{slug}', 'Panel\JobController@getOneJob');


Route::get('/isveren/{slug}', 'Panel\EmployerController@getOneEmployer');

Route::get('tum-is-ilanlari', 'Panel\JobController@allJob')->name('all-jobs');

Route::get('aktif-is-ilanlari', 'Panel\JobController@activeJob')->name('active-jobs');

Route::get('gecmis-is-ilanlari', 'Panel\JobController@pastJob')->name('past-jobs');




Route::get('profile/{slug}', 'ProfileController@getOneProfile');
Route::put('isverenprofile/{id}','Panel\ProfileController@updateProfile');

Route::get('teams', function () {
    return view('isverenpanel.teams');
});

Route::get('ilan-taslaklari/{slug}', 'JobController@employerDrafts');

Route::get('{slug}/basvuranlar', 'Panel\ApplyController@getJobApplicants');


Route::get('{slug}/degerlendir', 'Panel\ApplyController@getJobRate');

Route::get('employee', 'Panel\EmployeeController@employee');




Route::get('notification', 'Panel\NotificationController@notification');


//iŞÇİ PANELİ



Route::get('iscir/anasayfa', 'IsciPanel\HomeController@anasayfa')->name('isci_home');

Route::get('iscir/basvurular', 'IsciPanel\AppliesController@getApplies');
Route::get('basvur/{id}/users/{user_id}', 'IsciPanel\AppliesController@ApplyJob');
Route::get('cancel/{id}/users/{user_id}', 'IsciPanel\AppliesController@cancel_Job');


Route::get('isci/takimlar', 'IsciPanel\TeamController@teams');

Route::get('isci/profil', 'IsciPanel\ProfileController@getProfile');
Route::put('profile/{id}','IsciPanel\ProfileController@updateProfile');


Route::get('iscir/ayarlar', 'IsciPanel\NotificationController@notification');