<?php

namespace App\Logs;

use Illuminate\Support\Facades\Facade;

class logfacades extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'userlogs';
	}
}


?>