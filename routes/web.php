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
    return view('login');
})->middleware('duplicatelogin');
//Register User
Route::view('/register',"register");
Route::post('/registeruser',"loginsession@register");
//login check
Route::post('/logincheck',"loginsession@logincheck");

//logout
Route::get('/logout',function()
{
	session()->forget('data');
	return redirect('/');
});

//session starts

Route::group(['middleware'=>['loginchecker']],function()
{
//Dashboard
Route::view('/home','home');
//invoice page
Route::view('/invoice','invoice');
Route::post("/submit",'invoicesubmit@submit');
Route::view('/searchinvoice','searchinvoice');
//invoice search
//show all invoice
Route::get('/showallinvoice','invoicesubmit@showallinvoice');	

//edit invoice
Route::get('/edit/{id}','invoicesubmit@editinvoice');
Route::post("/update","invoicesubmit@updateinvoice");

//delete invoice
Route::get('/delete/{id}','invoicesubmit@deleteinvoice');
//pdf invoice
Route::get('/pdf/{id}','invoicesubmit@invoicepdf');
//All Invoice Pdf
Route::get('/allinvoicepdf','invoicesubmit@allinvoicepdf');
});
?>