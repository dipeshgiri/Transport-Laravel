<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\invoice;
use App\chalan_details;
class homegraph extends Controller
{
    public function graphdata(Request $req)
    {
    	$data='Na 3 KHA 335';
    	$data_335=DB::table('chalan_details')->select('gadi_no')->where('gadi_no',$data)->orderBy('id')->get();
    	$data_335=$data_335->count();
    	$data='Ba 3 KHA 294';
    	$data_294=DB::table('chalan_details')->select('gadi_no')->where('gadi_no',$data)->orderBy('id')->get();
    	$data_294=$data_294->count();
    	$data='Na 3 KHA 3983';
    	$data_3983=DB::table('chalan_details')->select('gadi_no')->where('gadi_no',$data)->orderBy('id')->get();
    	$data_3983=$data_3983->count();
    	return view('/home',['data335'=>$data_335,'data294'=>$data_294,'data3983'=>$data_3983]);
    }
}

?>