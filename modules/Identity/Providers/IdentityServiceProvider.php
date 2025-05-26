<?php
namespace Modules\Identity\Providers;
use Illuminate\Support\ServiceProvider;

class IdentityServiceProvider extends ServiceProvider

{
public function register(){

}   
Public function boot(){
    $this->loadRoutesFrom(__DIR__.'/../Routes/identity_api_routes.php');
    $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
} 
}
