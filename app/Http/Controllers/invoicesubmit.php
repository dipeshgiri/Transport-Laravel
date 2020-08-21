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

class invoicesubmit extends Controller
{
    public function submit(Request $req)
    {
    	$req->validate(['Consignor'=>[new name],'ConsignorAddress'=>[new name],'Consignorpan'=>'size:9','Consignee'=>[new name],'ConsigneeAddress'=>[new name],'Consigneepan'=>'size:9','Consignorbillno'=>'numeric','Consignorbillamount'=>'numeric','Date'=>'alpha_dash | size:10','Biltino'=>'numeric','SN'=>'numeric','Particulars'=>[new name],'Quantity'=>'numeric','Rate'=>'numeric']);

    	$invoice=new invoice;
        $invoice->consignor=$req->Consignor;
        $invoice->consignor_address=$req->ConsignorAddress;
        $invoice->consignor_pan_no=$req->Consignorpan;
        $invoice->consignee=$req->Consignee;
        $invoice->consignee_address=$req->ConsigneeAddress;
        $invoice->consignee_pan_no=$req->Consigneepan;
        $invoice->consignor_bill_no=$req->Consignorbillno;
        $invoice->consignor_bill_amount=$req->Consignorbillamount;
        $invoice->date=$req->Date;
        $invoice->mode_of_payment=$req->modeofpayment;

        $invoice->bilti_no=$req->Biltino;

        $invoice->sn=$req->SN;
        $invoice->particulars=$req->Particulars;
        $invoice->quantity=$req->Quantity;
        $invoice->rate=$req->Rate;
        $invoice->amount=$req->Amount;
        $invoice->item_type=$req->itemtype;

        $invoice->save();

        if($req->SN2 && $req->Particulars2)
        {
        $invoice1=new invoice;
        $invoice1->consignor=$req->Consignor;
        $invoice1->consignor_address=$req->ConsignorAddress;
        $invoice1->consignor_pan_no=$req->Consignorpan;
        $invoice1->consignee=$req->Consignee;
        $invoice1->consignee_address=$req->ConsigneeAddress;
        $invoice1->consignee_pan_no=$req->Consigneepan;
        $invoice1->consignor_bill_no=$req->Consignorbillno;
        $invoice1->consignor_bill_amount=$req->Consignorbillamount;
        $invoice1->date=$req->Date;
        $invoice1->mode_of_payment=$req->modeofpayment;

        $invoice1->bilti_no=$req->Biltino;

        $invoice1->sn=$req->SN2;
        $invoice1->particulars=$req->Particulars2;
        $invoice1->quantity=$req->Quantity2;
        $invoice1->rate=$req->Rate2;
        $invoice1->amount=$req->Amount2;
        $invoice1->item_type=$req->itemtype2;
        $invoice1->save();
    }
    else
    {
        $req->itemtype2=NULL;
    }

        if($req->SN3 && $req->Particulars3)
        {
        $invoice2=new invoice;
        $invoice2->consignor=$req->Consignor;
        $invoice2->consignor_address=$req->ConsignorAddress;
        $invoice2->consignor_pan_no=$req->Consignorpan;
        $invoice2->consignee=$req->Consignee;
        $invoice2->consignee_address=$req->ConsigneeAddress;
        $invoice2->consignee_pan_no=$req->Consigneepan;
        $invoice2->consignor_bill_no=$req->Consignorbillno;
        $invoice2->consignor_bill_amount=$req->Consignorbillamount;
        $invoice2->date=$req->Date;
        $invoice2->mode_of_payment=$req->modeofpayment;

        $invoice2->bilti_no=$req->Biltino;

        $invoice2->sn=$req->SN3;
        $invoice2->particulars=$req->Particulars3;
        $invoice2->quantity=$req->Quantity3;
        $invoice2->rate=$req->Rate3;
        $invoice2->amount=$req->Amount3;
        $invoice2->item_type=$req->itemtype3;
        $invoice2->save();
        }

    else
    {
        $req->itemtype3=NULL;
    }

        if($req->SN4 && $req->Particulars4)
        {
        $invoice3=new invoice;
        $invoice3->consignor=$req->Consignor;
        $invoice3->consignor_address=$req->ConsignorAddress;
        $invoice3->consignor_pan_no=$req->Consignorpan;
        $invoice3->consignee=$req->Consignee;
        $invoice3->consignee_address=$req->ConsigneeAddress;
        $invoice3->consignee_pan_no=$req->Consigneepan;
        $invoice3->consignor_bill_no=$req->Consignorbillno;
        $invoice3->consignor_bill_amount=$req->Consignorbillamount;
        $invoice3->date=$req->Date;
        $invoice3->mode_of_payment=$req->modeofpayment;

        $invoice3->bilti_no=$req->Biltino;

        $invoice3->sn=$req->SN4;
        $invoice3->particulars=$req->Particulars4;
        $invoice3->quantity=$req->Quantity4;
        $invoice3->rate=$req->Rate4;
        $invoice3->amount=$req->Amount4;
        $invoice3->item_type=$req->itemtype4;
        $invoice3->save();
        }

    else
    {
        $req->itemtype4=NULL;
    }

        if($req->SN5 && $req->Particulars5)
        {
        $invoice4=new invoice;
        $invoice4->consignor=$req->Consignor;
        $invoice4->consignor_address=$req->ConsignorAddress;
        $invoice4->consignor_pan_no=$req->Consignorpan;
        $invoice4->consignee=$req->Consignee;
        $invoice4->consignee_address=$req->ConsigneeAddress;
        $invoice4->consignee_pan_no=$req->Consigneepan;
        $invoice4->consignor_bill_no=$req->Consignorbillno;
        $invoice4->consignor_bill_amount=$req->Consignorbillamount;
        $invoice4->date=$req->Date;
        $invoice4->mode_of_payment=$req->modeofpayment;

        $invoice4->bilti_no=$req->Biltino;

        $invoice4->sn=$req->SN5;
        $invoice4->particulars=$req->Particulars5;
        $invoice4->quantity=$req->Quantity5;
        $invoice4->rate=$req->Rate5;
        $invoice4->amount=$req->Amount5;
        $invoice4->item_type=$req->itemtype5;
        $invoice4->save();
        }

    else
    {
        $req->itemtype5=NULL;
    }


        $invoicetotal=new invoicetotal;
        $invoicetotal->bilti_no=$req->Biltino;
        $invoicetotal->total_amt=$req->TotalAmt;
        $invoicetotal->taxable_amt=$req->taxableamt;
        $invoicetotal->vat=$req->vatamt;
        $invoicetotal->totalamtwithvat=$req->totalamtwithvat;
        $invoicetotal->user=session('data');
        date_default_timezone_set("Asia/Kathmandu");
        $invoicetotal->timestamp=date("h:i:sa");
        $invoicetotal->save();
        $createddate=date("h:i:sa");
        log::logs("New Invoice Created ;BiltiNo:$req->Biltino;Consignor:$req->Consignor;Consignee:$req->Consignee");
        $username=session('data');

         $pdf=App::make('dompdf.wrapper');
         $data="
          <table style='border:none;'>
         <tr><td><p style='font-size: 25px; margin-left: 220px; font-style:bold;'>Om Laxmi Dhuwani Sewa</p></td></tr>
         <tr><td><p style='font-size:15px; margin-top:0px;'>Main Branch: Biratnagar</p></td>
         <td><p style='font-size:15px; margin-top:0px; text-align:right;'>Birtamode Branch: Birtamode</p></td></tr>
         <tr><td><p style='font-size:15px; margin-top:0px;'>Opposite Of Bijuli Office</p></td>
         <td><p style='font-size:15px; margin-top:0px;'>Harkalal Marga</p></td>
         </tr>
         <tr><td><p style='font-size:15px; margin-top:0px;'>Phone Number: 9802723942/9802753385/021-535671</p></td>
         <td><p style='font-size:15px; margin-top:0px;'>Phone Number:9852023942</p></td>
         </tr>

         <tr><td><p style='margin-top:0px; font-size:20px; font-style:bold; margin-left:310px;'>Invoice</p></td></tr>
         <tr><td><p><label style='margin-top:0px; font-style:bold; font-size:15px;'>Bilti Number: </label>$req->Biltino</p></td>

       <td><p><label style='margin-top:0px; font-style:bold; font-size:15px;'>Invoice-Date: </label> $req->Date</p></td>
         </tr>
         <hr>
         </table>
         <table style='border:none;'>
         <tr>
         <td><p style='font-size:14px; margin-left:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor: </label> $req->Consignor</p></td>
         <td><p style='font-size:14px; margin-left:100px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee: </label> $req->Consignee</p></td>
         </tr>
         <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Address: </label> $req->ConsignorAddress</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee-Address: </label> $req->ConsigneeAddress</p></td>
         </tr>

                  <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Pan-No: </label> $req->Consignorpan</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee-Pan-No: </label> $req->Consigneepan</p></td>
         </tr>
                  <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Bill-Number: </label>$req->Consignorbillno</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Bill-Amount: </label> $req->Consignorbillamount</p></td>
         </tr>

         <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Mode-Of-Payement: </label> $req->modeofpayment</p></td>
         </tr>
         <hr>
         </table>
         <table style='height:0mm; width:100%;'>
         <br>
         <style>
         #data
          {
             border-bottom: 1px solid #ddd;
                 }
         </style>
         <tr>
         <th style='width:5%'  id='data'>SN</th>
         <th style='width:30%' id='data'>Particulars</th>
         <th style='width:20%' id='data'>Item-Type</th>
         <th style='width:20%' id='data'>Quantity</th>
         <th style='width:20%' id='data'>Rate</th>
         <th style='width:20%' id='data'>Amount</th>
         </tr>


         <tr>
         <td  style='text-align:center; ' id='data'> $req->SN</td>
         <td  style='text-align:center; ' id='data'> $req->Particulars</td>
         <td  style='text-align:center; ' id='data'> $req->itemtype</td>
         <td  style='text-align:center; ' id='data'> $req->Quantity</td>
         <td  style='text-align:center; ' id='data'> $req->Rate</td>
         <td  style='text-align:center; ' id='data'> $req->Amount</td>
         </tr>
        
        <tr>
         <td  style='text-align:center; ' id='data'> $req->SN2</td>
         <td  style='text-align:center; ' id='data'> $req->Particulars2</td>
         <td  style='text-align:center; ' id='data'> $req->itemtype2</td>
         <td  style='text-align:center; ' id='data'> $req->Quantity2</td>
         <td  style='text-align:center; ' id='data'> $req->Rate2</td>
         <td  style='text-align:center; ' id='data'> $req->Amount2</td>
        </tr>  

        <tr>
         <td  style='text-align:center; ' id='data'> $req->SN3</td>
         <td  style='text-align:center; ' id='data'> $req->Particulars3</td>
         <td  style='text-align:center; ' id='data'> $req->itemtype3</td>
         <td  style='text-align:center; ' id='data'> $req->Quantity3</td>
         <td  style='text-align:center; ' id='data'> $req->Rate3</td>
         <td  style='text-align:center; ' id='data'> $req->Amount3</td>
        </tr>
        
        <tr>
         <td  style='text-align:center; ' id='data'> $req->SN4</td>
         <td  style='text-align:center; ' id='data'> $req->Particulars4</td>
         <td  style='text-align:center; ' id='data'> $req->itemtype4</td>
         <td  style='text-align:center; ' id='data'> $req->Quantity4</td>
         <td  style='text-align:center; ' id='data'> $req->Rate4</td>
         <td  style='text-align:center; ' id='data'> $req->Amount4</td>
        </tr>
            
        <tr>
         <td  style='text-align:center; ' id='data'> $req->SN5</td>
         <td  style='text-align:center; ' id='data'> $req->Particulars5</td>
         <td  style='text-align:center; ' id='data'> $req->itemtype5</td>
         <td  style='text-align:center; ' id='data'> $req->Quantity5</td>
         <td  style='text-align:center; ' id='data'> $req->Rate5</td>
         <td  style='text-align:center; ' id='data'> $req->Amount5</td>
        </tr>
            
         </table>

         <table>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Total Amount:  $req->TotalAmt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Taxable Amount:  $req->taxableamt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Vat:  $req->vatamt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Total Amount With Vat:  $req->totalamtwithvat</p></td>
         
         </tr>
         </table>
         <p>Created By: {$username}</p>
         <p style='text-align:right'>Created At: {$createddate}</p>

";
         $pdf->loadHTML($data);
         return $pdf->stream();
    }

    public function showallinvoice(Request $req)
    {
        $result=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->paginate(10);
        log::logs("Viewed The All Invoices");
        return view('/showallinvoice',['data'=>$result]);
    }

    public function editinvoice($id)
    {
        $data=DB::table('invoice')->where('bilti_no',$id)->get();
        $data2=invoicetotal::where('bilti_no',$id)->get();
        log::logs("Goes To Edit Page For Bilti No: $id");
        return view('/editinvoice',['data'=>$data,'data2'=>$data2]);
    }

    public function updateinvoice(Request $req)
    {

    invoice::where('id',$req->input('id'))->update(['consignor'=>$req->input('Consignor'),'consignor_address'=>$req->input('ConsignorAddress'),'consignor_pan_no'=>$req->input('Consignorpan'),'consignee'=>$req->input('Consignee'),'consignee_address'=>$req->input('ConsigneeAddress'),'consignee_pan_no'=>$req->input('Consigneepan'),'consignor_bill_no'=>$req->input('Consignorbillno'),'consignor_bill_amount'=>$req->input('Consignorbillamount'),'date'=>$req->input('Date'),'mode_of_payment'=>$req->input('modeofpayment'),'bilti_no'=>$req->input('Biltino'),'sn'=>$req->input('SN'),'particulars'=>$req->input('Particulars'),'quantity'=>$req->input('Quantity'),'rate'=>$req->input('Rate'),'amount'=>$req->input('Amount'),'item_type'=>$req->input('itemtype')]);

    if($req->input('id1')!=NULL)      
    {
     invoice::where('id',$req->input('id1'))->update(['consignor'=>$req->input('Consignor'),'consignor_address'=>$req->input('ConsignorAddress'),'consignor_pan_no'=>$req->input('Consignorpan'),'consignee'=>$req->input('Consignee'),'consignee_address'=>$req->input('ConsigneeAddress'),'consignee_pan_no'=>$req->input('Consigneepan'),'consignor_bill_no'=>$req->input('Consignorbillno'),'consignor_bill_amount'=>$req->input('Consignorbillamount'),'date'=>$req->input('Date'),'mode_of_payment'=>$req->input('modeofpayment'),'bilti_no'=>$req->input('Biltino'),'sn'=>$req->input('SN2'),'particulars'=>$req->input('Particulars2'),'quantity'=>$req->input('Quantity2'),'rate'=>$req->input('Rate2'),'amount'=>$req->input('Amount2'),'item_type'=>$req->input('itemtype2')]);


    if($req->input('id2')!=NULL)      
    {
     invoice::where('id',$req->input('id2'))->update(['consignor'=>$req->input('Consignor'),'consignor_address'=>$req->input('ConsignorAddress'),'consignor_pan_no'=>$req->input('Consignorpan'),'consignee'=>$req->input('Consignee'),'consignee_address'=>$req->input('ConsigneeAddress'),'consignee_pan_no'=>$req->input('Consigneepan'),'consignor_bill_no'=>$req->input('Consignorbillno'),'consignor_bill_amount'=>$req->input('Consignorbillamount'),'date'=>$req->input('Date'),'mode_of_payment'=>$req->input('modeofpayment'),'bilti_no'=>$req->input('Biltino'),'sn'=>$req->input('SN3'),'particulars'=>$req->input('Particulars3'),'quantity'=>$req->input('Quantity3'),'rate'=>$req->input('Rate3'),'amount'=>$req->input('Amount3'),'item_type'=>$req->input('itemtype3')]);


    if($req->input('id3')!=NULL)      
    {
     invoice::where('id',$req->input('id3'))->update(['consignor'=>$req->input('Consignor'),'consignor_address'=>$req->input('ConsignorAddress'),'consignor_pan_no'=>$req->input('Consignorpan'),'consignee'=>$req->input('Consignee'),'consignee_address'=>$req->input('ConsigneeAddress'),'consignee_pan_no'=>$req->input('Consigneepan'),'consignor_bill_no'=>$req->input('Consignorbillno'),'consignor_bill_amount'=>$req->input('Consignorbillamount'),'date'=>$req->input('Date'),'mode_of_payment'=>$req->input('modeofpayment'),'bilti_no'=>$req->input('Biltino'),'sn'=>$req->input('SN4'),'particulars'=>$req->input('Particulars4'),'quantity'=>$req->input('Quantity4'),'rate'=>$req->input('Rate4'),'amount'=>$req->input('Amount4'),'item_type'=>$req->input('itemtype4')]);


    if($req->input('id4')!=NULL)      
    {
     invoice::where('id',$req->input('id4'))->update(['consignor'=>$req->input('Consignor'),'consignor_address'=>$req->input('ConsignorAddress'),'consignor_pan_no'=>$req->input('Consignorpan'),'consignee'=>$req->input('Consignee'),'consignee_address'=>$req->input('ConsigneeAddress'),'consignee_pan_no'=>$req->input('Consigneepan'),'consignor_bill_no'=>$req->input('Consignorbillno'),'consignor_bill_amount'=>$req->input('Consignorbillamount'),'date'=>$req->input('Date'),'mode_of_payment'=>$req->input('modeofpayment'),'bilti_no'=>$req->input('Biltino'),'sn'=>$req->input('SN5'),'particulars'=>$req->input('Particulars5'),'quantity'=>$req->input('Quantity5'),'rate'=>$req->input('Rate5'),'amount'=>$req->input('Amount5'),'item_type'=>$req->input('itemtype5')]);

    }

}
}
}
     invoicetotal::where('id',$req->input('ids'))->update(['bilti_no'=>$req->input('Biltino'),'total_amt'=>$req->input('TotalAmt'),'taxable_amt'=>$req->input('taxableamt'),'vat'=>$req->input('vatamt'),'totalamtwithvat'=>$req->input('totalamtwithvat')]);

     log::logs("Invoice Data Updated (Edited) BiltiNumber:$req->Biltino, id:$req->id, Consignor:$req->Consignor");

    $req->session()->flash('update','Invoice Data Updated Successfully');
    return redirect('/showallinvoice');
    }

    public function deleteinvoice(Request $req,$id)
    {
        invoice::where('bilti_no',$id)->delete();
        invoicetotal::where('bilti_no',$id)->delete();
        log::logs("Invoice Deleted BiltiNo: $id");
        $req->session()->flash('delete','Invoice Deleted Successfully');
        return redirect('/showallinvoice');

    }


    public function invoicepdf(Request $req,$id)
    {
        $invoicedata=DB::table('invoice')->where('bilti_no',$id)->get();
        $invoicetotal=DB::table('invoicetotal')->where('bilti_no',$id)->get();
        
        $consignor=$invoicedata[0]->consignor;
        $consignoradd=$invoicedata[0]->consignor_address;
        $consignorpan=$invoicedata[0]->consignor_pan_no;
        
        $consignee=$invoicedata[0]->consignee;
        $consigneeadd=$invoicedata[0]->consignee_address;
        $consigneepan=$invoicedata[0]->consignee_pan_no;
        
        $consignorbill=$invoicedata[0]->consignor_bill_no;
        $consignorbillamt=$invoicedata[0]->consignor_bill_amount;

        $date=$invoicedata[0]->date;
        $biltino=$invoicedata[0]->bilti_no;
        $modeofpayment=$invoicedata[0]->mode_of_payment;

        $sn=$invoicedata[0]->sn;
        $particulars=$invoicedata[0]->particulars;
        $quantity=$invoicedata[0]->quantity;
        $rate=$invoicedata[0]->rate;
        $amount=$invoicedata[0]->amount;
        $itemtype=$invoicedata[0]->item_type;

        if(isset($invoicedata[1]->particulars))
        {

             $sn1=$invoicedata[1]->sn;
             $particulars1=$invoicedata[1]->particulars;
             $quantity1=$invoicedata[1]->quantity;
             $rate1=$invoicedata[1]->rate;
             $amount1=$invoicedata[1]->amount;
             $itemtype1=$invoicedata[1]->item_type;

        }

         else
             {
                $sn1=null;
                $particulars1=null;
                $quantity1=null;
                $rate1=null;
                $amount1=0;
                $itemtype1=null;

             }

             if(isset($invoicedata[2]->particulars))
             {
                 $sn2=$invoicedata[2]->sn;
                 $particulars2=$invoicedata[2]->particulars;
                 $quantity2=$invoicedata[2]->quantity;
                 $rate2=$invoicedata[2]->rate;
                 $amount2=$invoicedata[2]->amount;
                 $itemtype2=$invoicedata[2]->item_type;

                         }
             else
             {
                $sn2=null;
                $particulars2=null;
                $quantity2=null;
                $rate2=null;
                $amount2=0;
                $itemtype2=null;

             }



                 if(isset($invoicedata[3]->particulars))
             {
                 $sn3=$invoicedata[3]->sn;
                 $particulars3=$invoicedata[3]->particulars;
                 $quantity3=$invoicedata[3]->quantity;
                 $rate3=$invoicedata[3]->rate;
                 $amount3=$invoicedata[3]->amount;
                 $itemtype3=$invoicedata[3]->item_type;
                 }

             else
             {
                $sn3=null;
                $particulars3=null;
                $quantity3=null;
                $rate3=null;
                $amount3=0;
                $itemtype3=null;

             }


                 if(isset($invoicedata[4]->particulars))
             {
                 $sn4=$invoicedata[4]->sn;
                 $particulars4=$invoicedata[4]->particulars;
                 $quantity4=$invoicedata[4]->quantity;
                 $rate4=$invoicedata[4]->rate;
                 $amount4=$invoicedata[4]->amount;
                 $itemtype4=$invoicedata[4]->item_type;

             }
             else
             {
                $sn4=null;
                $particulars4=null;
                $quantity4=null;
                $rate4=null;
                $amount4=0;
                $itemtype4=null;

             }

             $totalamt=$invoicetotal[0]->total_amt;
             $taxableamt=$invoicetotal[0]->taxable_amt;
             $vat=$invoicetotal[0]->vat;
             $totalamtwithvat=$invoicetotal[0]->totalamtwithvat;
             $user=$invoicetotal[0]->user;

        date_default_timezone_set("Asia/Kathmandu");
        $todaydate=date("h:i:sa");
        log::logs("Invoice Pdf Print/Downloaded/Viewed; BiltiNo:$biltino; Consignor:$consignor; Consingee:$consignee;");
        $reprintname=session('data');
         $pdf=App::make('dompdf.wrapper');
         $data="
          <table style='border:none;'>
         <tr><td><p style='font-size: 25px; margin-left: 220px; font-style:bold;'>Om Laxmi Dhuwani Sewa</p></td></tr>
         <tr><td><p style='font-size:15px; margin-top:0px;'>Main Branch: Biratnagar</p></td>
         <td><p style='font-size:15px; margin-top:0px; text-align:right;'>Birtamode Branch: Birtamode</p></td></tr>
         <tr><td><p style='font-size:15px; margin-top:0px;'>Opposite Of Bijuli Office</p></td>
         <td><p style='font-size:15px; margin-top:0px;'>Harkalal Marga</p></td>
         </tr>
         <tr><td><p style='font-size:15px; margin-top:0px;'>Phone Number: 9802723942/9802753385/021-535671</p></td>
         <td><p style='font-size:15px; margin-top:0px;'>Phone Number:9852023942</p></td>
         </tr>
         <tr><td><p style='margin-top:0px; font-size:20px; font-style:bold; margin-left:310px;'>Invoice</p></td></tr>
         <tr><td><p><label style='margin-top:0px; font-style:bold; font-size:15px;'>Bilti Number: </label>$biltino</p></td>
       <td><p><label style='margin-top:0px; font-style:bold; font-size:15px;'>Invoice-Date: </label> $date</p></td>
         </tr>
         <hr>
         </table>
         <table style='border:none;'>
         <tr>
         <td><p style='font-size:14px; margin-left:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor: </label> $consignor</p></td>
         <td><p style='font-size:14px; margin-left:100px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee: </label> $consignee</p></td>
         </tr>
         <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Address: </label> $consignoradd</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee-Address: </label> $consigneeadd</p></td>
         </tr>
                  <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Pan-No: </label> $consignorpan</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee-Pan-No: </label> $consigneepan</p></td>
         </tr>
                  <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Bill-Number: </label>$consignorbill</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Bill-Amount: </label> $consignorbillamt</p></td>
         </tr>
         <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Mode-Of-Payement: </label> $modeofpayment</p></td>
         </tr>
         <hr>
         </table>
         <table style='height:0mm; width:100%;'>
         <br>
         <style>
         #data
          {
             border-bottom: 1px solid #ddd;
                 }
         </style>
         <tr>
         <th style='width:5%'  id='data'>SN</th>
         <th style='width:30%' id='data'>Particulars</th>
         <th style='width:20%' id='data'>Item-Type</th>
         <th style='width:20%' id='data'>Quantity</th>
         <th style='width:20%' id='data'>Rate</th>
         <th style='width:20%' id='data'>Amount</th>
         </tr>
         <tr>
         <td  style='text-align:center; ' id='data'> $sn</td>
         <td  style='text-align:center; ' id='data'> $particulars</td>
         <td  style='text-align:center; ' id='data'> $itemtype</td>
         <td  style='text-align:center; ' id='data'> $quantity</td>
         <td  style='text-align:center; ' id='data'> $rate</td>
         <td  style='text-align:center; ' id='data'> $amount</td>
         </tr>
        
        <tr>
         <td  style='text-align:center; ' id='data'> $sn1</td>
         <td  style='text-align:center; ' id='data'> $particulars1</td>
         <td  style='text-align:center; ' id='data'> $itemtype1</td>
         <td  style='text-align:center; ' id='data'> $quantity1</td>
         <td  style='text-align:center; ' id='data'> $rate1</td>
         <td  style='text-align:center; ' id='data'> $amount1</td>
        </tr>  
        <tr>
         <td  style='text-align:center; ' id='data'> $sn2</td>
         <td  style='text-align:center; ' id='data'> $particulars2</td>
         <td  style='text-align:center; ' id='data'> $itemtype2</td>
         <td  style='text-align:center; ' id='data'> $quantity2</td>
         <td  style='text-align:center; ' id='data'> $rate2</td>
         <td  style='text-align:center; ' id='data'> $amount2</td>
        </tr>
        
        <tr>
         <td  style='text-align:center; ' id='data'> $sn3</td>
         <td  style='text-align:center; ' id='data'> $particulars3</td>
         <td  style='text-align:center; ' id='data'> $itemtype3</td>
         <td  style='text-align:center; ' id='data'> $quantity3</td>
         <td  style='text-align:center; ' id='data'> $rate3</td>
         <td  style='text-align:center; ' id='data'> $amount3</td>
        </tr>
            
        <tr>
         <td  style='text-align:center; ' id='data'> $sn4</td>
         <td  style='text-align:center; ' id='data'> $particulars4</td>
         <td  style='text-align:center; ' id='data'> $itemtype4</td>
         <td  style='text-align:center; ' id='data'> $quantity4</td>
         <td  style='text-align:center; ' id='data'> $rate4</td>
         <td  style='text-align:center; ' id='data'> $amount4</td>
        </tr>
            
         </table>
         <table>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Total Amount:  $totalamt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Taxable Amount:  $taxableamt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Vat:  $vat</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Total Amount With Vat:  $totalamtwithvat</p></td>
         
         </tr>
         </table>
         <p>Created By: {$user}</p>
         <p>Reprinted By: {$reprintname}</p>
         <p style='text-align:right'>Reprint Time: {$todaydate}</p>
";
         $pdf->loadHTML($data);
         return $pdf->stream();

             }

    public function allinvoicepdf()
    {
        $result=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->orderBy('date')->get();
        log::logs("User Downloaded/Viewed/Printed Whole Invoice Data ");
        $pdf=PDF::loadView('allinvoicepdf',['data'=>$result])->setPaper('a4', 'landscape');
        return $pdf->stream();
     }

     public function searchinvoicebybilti(Request $req)
     {
        $data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('invoice.bilti_no',$req->biltinumber)->get();
        log::logs("User Searched The Invoice By Bilti Number Bilti No:$req->biltinumber");
        return View('/showinvoicebybilti',['data'=>$data]);
     }

     public function searchinvoicebydate(Request $req)
     {
        $data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('invoice.date',$req->date)->paginate(10);
        log::logs("User Searched The Invoice By Date; Invoice-Date:$req->date");
        return View('/showinvoicebydate',['data'=>$data]);  
     }
     public function allinvoicepdfbydate($date)
     {

        $result=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('date',$date)->get();
        log::logs("User Downloaded/Viewed/Printed Invoice Data By Date; Date:$date");
        $pdf=PDF::loadView('allinvoicepdfbydate',['data'=>$result])->setPaper('a4', 'landscape');
        return $pdf->stream();
     }
     public function searchinvoicebyconsignor(Request $req)
     {
        $data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('invoice.consignor',$req->consignor)->paginate(10);
        log::logs("User Searched The Invoice By Consignor Name; Consignor:$req->consignor");
        return View('/showinvoicebyconsignor',['data'=>$data]);  
     }
     public function allinvoicepdfbyconsignor($consignor)
     {
        $result=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('consignor',$consignor)->get();
        log::logs("User Downloaded/Viewed/Printed Invoice Data By Consignor Name; Consignor:$consignor");
        $pdf=PDF::loadView('allinvoicepdfbyconsignor',['data'=>$result,'consignor'=>$result[0]->consignor,'address'=>$result[0]->consignor_address,'pan'=>$result[0]->consignor_pan_no])->setPaper('a4', 'landscape');
        return $pdf->stream();
     }

     public function searchinvoicebyconsignee(Request $req)
     {
        $data=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('invoice.consignee',$req->consignee)->paginate(10);
        log::logs("User Searched The Invoice By Consignee Name; Consignee:$req->consignee");
        return View('/showinvoicebyconsignee',['data'=>$data]);  
     }

     public function allinvoicepdfbyconsignee($consignee)
     {
        $result=DB::table('invoice')->join('invoicetotal','invoicetotal.bilti_no','invoice.bilti_no')->where('consignee',$consignee)->get();
        log::logs("User Downloaded/Viewed/Printed Invoice Data By Consignee Name; Consignee:$consignee");
        $pdf=PDF::loadView('allinvoicepdfbyconsignee',['data'=>$result,'consignee'=>$result[0]->consignee,'address'=>$result[0]->consignee_address,'pan'=>$result[0]->consignee_pan_no])->setPaper('a4', 'landscape');
        return $pdf->stream();
     }

}
?>
