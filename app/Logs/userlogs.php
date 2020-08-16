<?php

namespace App\Logs;
use App\audit;
class userlogs
{
	public function logs($message)
	{
		$audit=new audit;
		$audit->user_name=session('data');
		date_default_timezone_set("Asia/Kathmandu"); 
		$audit->created_at=date("Y-m-d H:i:s");
		$audit->activity=$message;
		$audit->save();
	}
}

?>