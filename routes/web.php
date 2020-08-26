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
//search invoice by biltino
Route::post('/searchinvoicebybilti','invoicesubmit@searchinvoicebybilti');
//search invoice by date
Route::get('/searchinvoicebydate','invoicesubmit@searchinvoicebydate');
//search invoice by consignor
Route::get('/searchinvoicebyconsignor','invoicesubmit@searchinvoicebyconsignor');
//search invoice by consignee
Route::get('/searchinvoicebyconsignee','invoicesubmit@searchinvoicebyconsignee');

//edit invoice
Route::get('/edit/{id}','invoicesubmit@editinvoice');
Route::post("/update","invoicesubmit@updateinvoice");

//delete invoicesubmit
Route::get('/delete/{id}','invoicesubmit@deleteinvoice');
//pdf of invoice according to bilti no
Route::get('/pdf/{id}','invoicesubmit@invoicepdf');
//All Invoice Pdf
Route::get('/allinvoicepdf','invoicesubmit@allinvoicepdf');
//All Invoice Pdf By Date
Route::get('/allinvoicepdfbydate/{date}','invoicesubmit@allinvoicepdfbydate');
//All Invoice Pdf By Consignor
Route::get('/allinvoicepdfbyconsignor/{consignor}','invoicesubmit@allinvoicepdfbyconsignor');
//All Invoice Pdf By Consignee
Route::get('/allinvoicepdfbyconsignee/{consignee}','invoicesubmit@allinvoicepdfbyconsignee');

//Chalan Details
Route::get('/chalan','chalan@chalandetails');
Route::post('/chalansubmit','chalan@chalansubmit');
//Search Chalan
Route::view('/searchchalan','chalansearch');
Route::get('/chalanpdf/{chalanno}','chalan@chalanpdf')->name('chalanpdf');


//Vat
Route::view('/vat','vat');
Route::get('/vattranscation','vat@vattranscation');
//Vat PDF
Route::get('/vatpdf/{start}/{end}','vat@vatpdf');
//Party Payment Details
Route::view('/PartyPaymentDetails','partypaymentdetails');
Route::get('/partypayment','partypaymentdetails@partydetails');
//Party Payment Details Pdf
Route::get('/partypaymentpdf/{partyname}/{start}/{end}/{mof}','partypaymentdetails@partypaymentpdf');
//party payment detail paid confirm
Route::get('/partypaymentpaid/{partyname}/{start}/{end}','partypaymentdetails@partypaymentpaid');

});
?>