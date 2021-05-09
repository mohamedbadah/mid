<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
Route::get('/all', function () {
    $products = DB::table('products')->get();
    return view('productAll', compact('products'));
});
Route::get('/create', function () {
    return view('productCreate');
});
Route::post('/store', function (Request $r) {
    DB::table('products')->insert([
        'name' => $r->product_name,
        'price' => $r->product_price,
        'quantity' => $r->product_qty
    ]);
    return redirect()->back();
});
Route::get('del/{id}', function ($id) {

    $delete = DB::table('products')->where('id', '=', $id)->delete();
    if ($delete) {
        return redirect()->back();
    }
});
Route::get('/form/{id}', function () {
    return view('formName');
});
Route::post('/formName', function (Request $d, $id) {
    $data = [
        'name' => $d->name
    ];
    $result = DB::table('products')
        ->where('id', $id)
        ->update($data);
    if ($result) {
        return redirect()->back();
    }
});
