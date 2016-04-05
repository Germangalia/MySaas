<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
    Route::get('reports/createInvoice', 'JsPDFController@createInvoice');
    Route::get('reports/downloadInvoice', 'PDFController@downloadInvoice');
    Route::get('invoiceHtml','PDFController@invoiceHtml');
    Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
    Route::get('csstransitions', function(){
        return view('tinkering.csstransitions');
    });
    Route::get('onesignal', function(){
        return view('notifications.onesignal');
    });

    //Route::get('auth/{provider}', 'Auth\AuthController@redirectToAuthenticationServiceProvider');
    //Route::get('auth/{provider}/callback', 'Auth\AuthController@handleAuthenticationServiceProviderCallback');
    Route::get('plans', 'PlansController@index');
    Route::get('register_subscription', function() {
        return view('auth.register_subscription');
    });
    Route::post('registerAndSubscribeToStripe', 'Auth\AuthController@registerAndSubscribeToStripe');

    //Route::post('subscription_payment', 'SubscribeController@subscribe');

    Route::get('reports/dailysales', 'ReportController@dailySales');
});


