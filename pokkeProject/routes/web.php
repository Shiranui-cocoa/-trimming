<?php

use Illuminate\Support\Facades\Route;

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

Route::get('ListOfCharges',function(){
    return view('ListOfCharges');
    //料金表
});

Route::get('Index' , 'IndexController@index');
    //トップページ

Route::get('MedicalRecord' , 'MedicalRecordController@MedicalRecord');
    //カルテ

Route::get('MemberRegistration' , 'MemberRegistrationController@MemberRegistration');
    //新規登録

Route::get('MyPage', 'MyPageController@MyPage');
    //マイページ

Route::get('PhotoAlbum', 'PhotoAlbumController@PhotoAlbum');
    //フォトギャラリー

Route::get('ReservationList', 'ReservationListController@ReservationList');
    //予約表

Route::get('Resetting', 'ResettingController@Resetting');
    //パス再設定

Route::get('SystemIndex', 'SystemIndexController@SystemIndex');
    //システムトップページ

Route::get('Vaccine', 'VaccineController@Vaccine');
    //ワクチン

Route::get('Trimmer' , 'TrimmingController@list');
    //トリマー紹介