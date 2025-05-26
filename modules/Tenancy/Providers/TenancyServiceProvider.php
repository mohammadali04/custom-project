<?php
namespace Modules\Tenancy\Providers;
use Illuminate\Support\ServiceProvider;

class TenancyServiceProvider extends ServiceProvider

{
public function register(){

}   
Public function boot(){
    $this->loadRoutesFrom(__DIR__.'/../Routes/identity_api_routes.php');
    // $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
} 
}
