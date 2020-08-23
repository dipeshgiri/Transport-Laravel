<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\invoice;
use App\invoicetotal;
use App\Rules\name;
use App;
use log;
use PDF;
use session;

class vat extends Controller
{
    public function vattranscation(Request $req)
    {
    	$start=$req->start;
    	$end=$req->end;
    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$start,$end])->orderBy('date')->groupBy('invoicetotal.bilti_no')->paginate(10);
        $totalsum=$data->sum('total_amt');
        $vat=$data->sum('vat');
        $totalamt=$data->sum('totalamtwithvat');
    	log::logs("User Viewed The Vat Details; Start-Date:$start, End-Date:$end");
    	return View('/vat',['record'=>$data,'start'=>$start,'end'=>$end,'totalsum'=>$totalsum,'vat'=>$vat,'totalamt'=>$totalamt]);

    }
    public function vatpdf($start,$end)
    {
    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$start,$end])->orderBy('date')->groupBy('invoicetotal.bilti_no')->get();
        $totalsum=$data->sum('total_amt');
        $vat=$data->sum('vat');
        $totalamt=$data->sum('totalamtwithvat');
    	log::logs("User Downloaded/Printed Vat Details; Start-Date:$start, End-Date:$end");
    	$pdf=PDF::loadView('/vatpdf',['data'=>$data,'start'=>$start,'end'=>$end,'totalsum'=>$totalsum,'vat'=>$vat,'totalamt'=>$totalamt]);
        return $pdf->stream();
    }
}
