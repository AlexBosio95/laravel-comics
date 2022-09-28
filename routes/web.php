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
    $arrayDisc = config('comics');
    $arrayMenu = config('navList');
    $arrayLink = config('linkDcComics');
    $arrayProduct = config('productList');

    $LinkDC = [];
    $LinkShopList = [];
    $LinkUtility = [];
    $LinkSite = [];

    foreach ($arrayLink as $value) {
        if ($value['list'] == 'DcComics') {
            $LinkDC[] = $value;
        } elseif ($value['list'] == 'ShopList'){
            $LinkShopList[] = $value;
        } elseif ($value['list'] == 'utility'){
            $LinkUtility[] = $value;
        } elseif ($value['list'] == 'site'){
            $LinkSite[] = $value;
        }
    }


    return view('homepage', ['discs' => $arrayDisc, 'menuItems' => $arrayMenu ,'LinkDC' => $LinkDC, 'LinkShopList' => $LinkShopList, 'LinkUtility' => $LinkUtility, 'LinkSite' => $LinkSite, 'Products' => $arrayProduct] );
})->name('home');
