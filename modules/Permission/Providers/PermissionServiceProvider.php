<?php
namespace Modules\Permission\Providers;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider

{
public function register(){

}   
Public function boot(){
    $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
    $this->loadRoutesFrom(__DIR__.'/../Routes/permission_api_routes.php');
} 
}
