<?php
namespace Modules\Blog\Providers;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider

{
public function register(){

}   
Public function boot(){
    $this->loadRoutesFrom(__DIR__.'/../Routes/blog_api_routes.php');
    $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
} 
}
