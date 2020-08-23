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

class partypaymentdetails extends Controller
{
    public function partydetails(Request $req)
    {
    	if($req->modeofpayment=='Due' || $req->modeofpayment=='Paid')
    	{

    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$req->start,$req->end])->where([['consignor',$req->partyname],['mode_of_payment',$req->modeofpayment],['due_amt_paid',NULL]])->orderBy('date')->groupBy('invoicetotal.bilti_no')->paginate(10);
    	$totalsum=$data->sum('total_amt');
        $vat=$data->sum('vat');
        $totalamt=$data->sum('totalamtwithvat');
    	log::logs("User Viewed The Party Payment Detail; consignor:$req->partyname, mof:$req->modeofpayment, StartDate: $req->start, EndDate: $req->end");
    	return view('/partypaymentdetails',['record'=>$data,'consignor'=>$req->partyname,'mof'=>$req->modeofpayment,'startdate'=>$req->start,'enddate'=>$req->end,'totalsum'=>$totalsum,'vat'=>$vat,'totalamt'=>$totalamt]);

        }

        elseif($req->modeofpayment=='To Pay')
        {

    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$req->start,$req->end])->where([['consignee',$req->partyname],['mode_of_payment',$req->modeofpayment]])->orderBy('date')->groupBy('invoicetotal.bilti_no')->paginate(10);
    	$totalsum=$data->sum('total_amt');
        $vat=$data->sum('vat');
        $totalamt=$data->sum('totalamtwithvat');
    	log::logs("User Viewed The Party Payment Detail; consignor:$req->partyname, mof:$req->modeofpayment, StartDate: $req->start, EndDate: $req->end");
    	return view('/partypaymentdetails',['record'=>$data,'consignor'=>$req->partyname,'mof'=>$req->modeofpayment,'startdate'=>$req->start,'enddate'=>$req->end,'totalsum'=>$totalsum,'vat'=>$vat,'totalamt'=>$totalamt]);

        }

    }
    public function partypaymentpdf($partyname,$start,$end,$mof)
    {
    	if($mof=='Due' || $mof=='Paid')
    	{
    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$start,$end])->where([['consignor',$partyname],['mode_of_payment',$mof],['due_amt_paid',NULL]])->orderBy('date')->groupBy('invoicetotal.bilti_no')->get();
        $totalsum=$data->sum('total_amt');
        $vat=$data->sum('vat');
        $totalamt=$data->sum('totalamtwithvat');
    	log::logs("User Downloaded/Printed Party Payment Details; Partyname(Consginor): $partyname,Start-Date:$start, End-Date:$end,modeofpayment: $mof");
    	$pdf=PDF::loadView('/partypaymentpdf',['data'=>$data,'partyname'=>$partyname,'start'=>$start,'end'=>$end,'mof'=>$mof,'totalsum'=>$totalsum,'vat'=>$vat,'totalamt'=>$totalamt]);
        return $pdf->stream();
    }
    elseif($mof=='To Pay')
    {	
    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$start,$end])->where([['consignee',$partyname],['mode_of_payment',$mof]])->orderBy('date')->groupBy('invoicetotal.bilti_no')->get();
        $totalsum=$data->sum('total_amt');
        $vat=$data->sum('vat');
        $totalamt=$data->sum('totalamtwithvat');
    	log::logs("User Downloaded/Printed Party Payment Details; Partyname(Consginee): $partyname,Start-Date:$start, End-Date:$end,modeofpayment: $mof");
    	$pdf=PDF::loadView('/partypaymentpdf',['data'=>$data,'partyname'=>$partyname,'start'=>$start,'end'=>$end,'mof'=>$mof,'totalsum'=>$totalsum,'vat'=>$vat,'totalamt'=>$totalamt]);
        return $pdf->stream();
    }

    }
    public function partypaymentpaid(Request $req,$partyname,$start,$end)
    {

    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->whereBetween('date',[$start,$end])->where([['consignor',$partyname],['mode_of_payment','Due'],['due_amt_paid',NULL]])->orderBy('date')->groupBy('invoicetotal.bilti_no')->get();
    	foreach($data as $n)
    	{
    		$update = invoicetotal::where('bilti_no', $n->bilti_no)->update(['due_amt_paid'=>'Paid']);
    	}

    	$req->session()->flash('update','Party Payment Succesfull');
    	return redirect('/PartyPaymentDetails');
    }
}
