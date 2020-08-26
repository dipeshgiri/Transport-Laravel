<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\invoice;
use App\invoicetotal;
use App\chalan_details;
use App\chalan_bilti;
use App\Rules\name;
use App;
use log;
use PDF;
use session;


class chalan extends Controller
{
    public function chalandetails(Request $req)
    {
    	$data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('gadi_no',NULL)->orderBy('date')->groupBy('invoicetotal.bilti_no')->get();
    	log::logs("User Goes To Chalan Page");
    	return View('/chalan',['data'=>$data]);
    }

    public function chalansubmit(Request $req)
    {

        $req->validate(['driver_name'=>[new name],'departure_location'=>[new name],'destination_location
            '=>[new name],'loading_charge'=>[new name],'date'=>'alpha_dash | size:10']);
    	$chalanno=chalan_bilti::all()->last();
        if(!$chalanno)
        {
            $chalanno=1;
        }

        else
        {
    	$chalanno=$chalanno->chalan_no+1;
        }

        $noofcheckbox=count($req->records);
        $i=0;
        $totalamt=0;
        $vatamt=0;
        $totalamtwithvat=0;

        while($i<$noofcheckbox)
        {

        $biltino=$req->records[$i];
        $chalan_bilti=new chalan_bilti;
        $chalan_bilti->chalan_no=$chalanno;
        $chalan_bilti->bilti_no=$biltino;
        $chalan_bilti->save();

        $update = invoicetotal::where('bilti_no', $biltino)->update(['gadi_no'=>$req->truck_number]);

        $sum=DB::table('invoicetotal')->where('bilti_no',$biltino)->get();
        $totalamt=$totalamt+$sum[0]->total_amt;
        $vatamt=$vatamt+$sum[0]->vat;
        $totalamtwithvat=$totalamtwithvat+$sum[0]->totalamtwithvat;
        $i++;

        }

        $chalan_details=new chalan_details;
        $chalan_details->chalan_no=$chalanno;
        $chalan_details->driver_name=$req->driver_name;
        $chalan_details->departure_location=$req->departure_location;
        $chalan_details->destination_location=$req->destination_location;
        $chalan_details->date=$req->date;
        $chalan_details->gadi_no=$req->truck_number;
        $chalan_details->total_amt=$totalamt;
        $chalan_details->vat_amt=$vatamt;
        $chalan_details->totalamtwithvat=$totalamtwithvat;
        $chalan_details->loading_charge=$req->loading_charge;
        $chalan_details->user=session('data');
        date_default_timezone_set("Asia/Kathmandu");
        $chalan_details->created_at=date("h:i:sa");
        $chalan_details->save();
        log::logs("User Created Chalan; Chalan-No: $chalanno; Driver-Name: $req->driver_name; Truck-Number: $req->truck_number");
        return redirect()->route('chalanpdf', [$chalanno]);
    }

    public function chalanpdf($chalanno)
    {
        $chalandetails=DB::table('chalan_details')->where('chalan_no',$chalanno)->get();
        $chalandata=DB::table('invoice')->join('invoicetotal','invoice.bilti_no','invoicetotal.bilti_no')->join('chalan_bilti','invoice.bilti_no','chalan_bilti.bilti_no')->where('chalan_bilti.chalan_no',$chalanno)->get();
        log::logs("User Printed The Chalan; Chalan-NO: $chalanno");
        $pdf=PDF::loadView('/chalanpdf',['chalandetails'=>$chalandetails,'chalandata'=>$chalandata])->setPaper('a4', 'landscape');
        return $pdf->stream(); 


    }

    public function showallchalan()
    {
        $chalandata=DB::table('chalan_details')->paginate(10);
        log::logs("User Searched All The Chalan");
        return view('/showchalan',['data'=>$chalandata]);
    }

    public function exportallchalandata()
    {
        $chalandata=DB::table('chalan_details')->get();
        $totalsum=$chalandata->sum('total_amt');
        $vat=$chalandata->sum('vat_amt');
        $totalamt=$chalandata->sum('totalamtwithvat');
        log::logs("User Exported/Printed The Chalan Details");
        $pdf=PDF::loadView('/exportchalandata',['chalandetails'=>$chalandata,'totalsum'=>$totalsum,'vat'=>$vat,'totalamtwithvat'=>$totalamt])->setPaper('a4', 'landscape');
        return $pdf->stream(); 

    }
}
  