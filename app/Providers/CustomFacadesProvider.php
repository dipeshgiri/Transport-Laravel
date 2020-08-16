<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Logs\userlogs;

class CustomFacadesProvider extends ServiceProvider
{
   
    public function register()
    {  
        $this->app->bind('userlogs', function(){
            return new userlogs();
        });
    }

    public function boot()
    {
    }
}
?>