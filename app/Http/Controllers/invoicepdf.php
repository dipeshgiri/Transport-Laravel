<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class invoicepdf extends Controller
{
    public function invoicepdf()
    {
    	 $Consignor = session('Consignor');
    	 $ConsignorAddress= session('ConsignorAdd');
         $Consignorpan=session('Consignorpan');
         $Consignee=session('Consignee');
         $ConsigneeAddress=session('ConsigneeAdd');
         $Consigneepan=session('Consigneepan');
         $Consignorbill=session('Consignorbillno');
         $Consignorbillamt=session('Consignorbillamount');
         $Date=session('Date');
         $payementmode=session('modeofpayment');
         $biltino=session('biltino');
         $sn=session('sn');
         $particulars=session('particulars');
         $itemtype=session('itemtype');
         $Quantity=session('Quantity');
         $Rate=session('Rate');
         $Amount=session('Amount');
         $Totalamt=session('Totalamt');
         $Taxableamt=session('Taxableamt');
         $Vat=session('vat');
         $Totalamtwithvat=session('Totalamtwithvat');
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
         <tr><td><p><label style='margin-top:0px; font-style:bold; font-size:15px;'>Bilti Number: </label> $biltino</p></td>
         <td><p><label style='margin-top:0px; font-style:bold; font-size:15px;'>Invoice-Date: </label> $Date</p></td>
         </tr>
         <hr>
         </table>
         <table style='border:none;'>
         <tr>
         <td><p style='font-size:14px; margin-left:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor: </label> $Consignor</p></td>
         <td><p style='font-size:14px; margin-left:100px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee: </label> $Consignee</p></td>
         </tr>
         <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Address: </label> $ConsignorAddress</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee-Address: </label> $ConsigneeAddress</p></td>
         </tr>

                  <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Pan-No: </label> $Consignorpan</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignee-Pan-No: </label> $Consigneepan</p></td>
         </tr>
                  <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Bill-Number: </label>$Consignorbill</p></td>
         <td><p style='font-size:14px; margin-left:100px;; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Consignor-Bill-Amount: </label> $Consignorbillamt</p></td>
         </tr>

         <tr>
         <td><p style='font-size:14px; margin-left:0px; margin-top:0px;'><label style='margin-top:0px; font-style:bold; font-size:15px;'>Mode-Of-Payement: </label> $payementmode</p></td>
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
         <th style='width:5%' id='data'>SN</th>
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
         <td  style='text-align:center; ' id='data'> $Quantity</td>
         <td  style='text-align:center; ' id='data'> $Rate</td>
         <td  style='text-align:center; ' id='data'> $Amount</td>
         </tr>
         </table>
         <table>

         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Total Amount:  $Totalamt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Taxable Amount:  $Taxableamt</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Vat:  $Vat</p></td>
         </tr>
         <tr>
         <td><p style='margin-left:470px; margin-top:0px;'>Total Amount With Vat:  $Totalamtwithvat</p></td>
         
         </tr>
         </table>
         <p>Created By: Dipesh</p>
         <p style='text-align:right'>Created At:12:24:48pm</p>
         ";
    	 $pdf->loadHTML($data);
    	 return $pdf->stream();
    	 session()->flush();


    }
}
