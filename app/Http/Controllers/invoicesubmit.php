<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoice;
use App\invoicetotal;
use App\Rules\name;
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


        $invoicetotal=new invoicetotal;
        $invoicetotal->bilti_no=$req->Biltino;
        $invoicetotal->total_amt=$req->TotalAmt;
        $invoicetotal->taxable_amt=$req->taxableamt;
        $invoicetotal->vat=$req->vatamt;
        $invoicetotal->totalamtwithvat=$req->totalamtwithvat;
        $invoicetotal->user="Dipesh";
        date_default_timezone_set("Asia/Kathmandu");
        $invoicetotal->timestamp=date("h:i:sa");
        $invoicetotal->save();
        session(['Consignor'=>$req->Consignor,'ConsignorAdd'=>$req->ConsignorAddress,'Consignorpan'=>$req->Consignorpan,'Consignee'=>$req->Consignee,'ConsigneeAdd'=>$req->ConsigneeAddress,'Consigneepan'=>$req->Consigneepan,'Consignorbillno'=>$req->Consignorbillno,'Consignorbillamount'=>$req->Consignorbillamount,'Date'=>$req->Date,'modeofpayment'=>$req->modeofpayment,'biltino'=>$req->Biltino,'sn'=>$req->SN,'particulars'=>$req->Particulars,'Quantity'=>$req->Quantity,'itemtype'=>$req->itemtype,'Rate'=>$req->Rate,'Amount'=>$req->Amount,'Totalamt'=>$req->TotalAmt,'Taxableamt'=>$req->taxableamt,'vat'=>$req->vatamt,'Totalamtwithvat'=>$req->totalamtwithvat]);
        return redirect()->action('invoicepdf@invoicepdf');
        



    }


}
