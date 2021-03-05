<?php
use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
 
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('welcome');
});
Route::get('client-regis', function () {
    return view('clients.register');
});
Route::get('special/login/form/!for/!members', function () {
    return view('auth.custom-login');
});
Route::get('special/register/form/!for/!members', function () {
    return view('auth.custom-register');
});

Route::get('/staffing-options', function () {
    return view('pages.readmore-services');
});

Route::get('/about', 'MembersEmailController@index');
Route::post('/about', 'MembersEmailController@sendMailToMembers');
Route::get('/benefits', function () {
    return view('pages.benefits');
});

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@sendMail');

Route::get('/how-it-works', 'PhoneModalController@index');
Route::post('/how-it-works', 'PhoneModalController@sendMailForPhoneCall');  

Route::get('/privacy/explanation', function () {
    return view('pages.privacy_policy');
});
Route::get('terms-service', function () {
    return view('pages.terms_service');
});
Route::get('cases', function () {
    return view('pages.case-index');
});

Route::get('404', function () {
    return view('404');
});

/*----------------------------------------------------------------------------->*/
   
Route::group(['middleware' => ['auth', 'UserZero']], function () {
    Route::resource('/i-want-to', 'RoleController')->middleware('verified');
});
 
Route::group(['middleware' => ['auth', 'UnderReview']], function () {
    Route::get('/under-review', function () {
        return view('under-review');
    })->middleware('verified');
});
 
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::resource('/admin', 'AdminController')->middleware('verified');
    Route::get('/admin/{id}/delete', 'AdminController@destroy');
    Route::resource('client-clear-list', 'InterestedController');
    Route::get('/statisctics', function () {
        return view('admin.statisctics');
    });
    Route::get('/client/analysis', 'AdminController@client_bar');
    Route::get('interes', 'AdminController@interesBar');
    Route::get('/category', 'AdminController@categoryBar');
    Route::get('/feedback', 'FeedbackController@index');
    Route::get('/overallBar', 'FeedbackController@overallBar');
    Route::get('/profileBar', 'FeedbackController@profileBar');
    Route::get('/qualificationBar', 'FeedbackController@qualificationBar');
});
 
Route::group(['middleware' => ['auth', 'Client']], function () {
    Route::get('/client', function () {
        return view('client');
    })->middleware('verified');
    Route::resource('/client-adm', 'ClientController')->middleware('verified');
});
 
Route::group(['middleware' => ['auth', 'User']], function () {
    Route::resource('/complet-profile', 'CompleteProfileController'); 
    Route::resource('/user', 'AboutController')->middleware('verified');
    Route::resource('/edu', 'EducationController')->middleware('verified');
    Route::resource('/work', 'WorkController')->middleware('verified');
    Route::get('/userr', 'AboutController@changeStatus')->middleware('verified');
    Route::get('photo', 'ImageController@index')->middleware('verified');
    Route::post('save-photo', 'ImageController@save')->middleware('verified');
});
 
Route::get('call-notify-userlogininactive-Warning', 'ChangeStatus@warningEmail');
Route::get('call-notify-userlogininactive-inactive', 'ChangeStatus@inactiveEmail');
Route::get('call-notify-userlogininactive-Update', 'ChangeStatus@update');
Route::get('call-notify-userlogininreactive-Reactivate', 'ChangeStatus@reactivate');

Route::get('image', 'ZeroController@index');
Route::post('image', 'ZeroController@save');
