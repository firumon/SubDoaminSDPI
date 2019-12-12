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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'mo',
    'namespace' => 'MO'
],function(){
    Route::view('summary','members_offer.summary');
    Route::view('detail','members_offer.detail');
    Route::view('print','members_offer.print');
    Route::post('print','MemberOfferController@print_preview');
    Route::post('detail',function(){
        if(request('address')) App\MemberAddress::updateOrCreate(['member' => request('member')],['address' => request('address')]);
        if(request('number')) App\MemberPhone::updateOrCreate(['member' => request('member')],['number' => request('number')]);
        if(request('offer')) App\FundCollectionMemberOffer::updateOrCreate(['member' => request('member')],['offer' => request('offer')]);
        return back();
    });
    Route::view('bvpl','babri_verdict.president_letter.index');
});
Route::group([
    'prefix' => 'bv',
    'namespace' => 'BV'
],function(){
    Route::view('pl','babri_verdict.president_letter.index');
    Route::post('pl','BabriVerdictPresidentLetterController@create');
});
