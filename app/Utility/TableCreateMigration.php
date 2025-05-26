<?php
namespace App\Utility;
use Illuminate\Console\Command;
use Spatie\Multitenancy\Commands\Concerns\TenantAware;
use App\Models\Tenant;

class TableCreateMigration extends Command
{
    use TenantAware;

    // protected $signature = 'tenants:make-migration create_product_table {--tenant=*}';

    // public function handle()
    // {
    //     return $this->line( static::created(function (Tenant $tenant) {
    //         $tenant->createDatabase();
    //     }));
       
    // }

   // ....
   protected $signature = 'tenants:artisan --tenant=1 {--tenant=*}';

   public function handle()
   {
       return $this->line('The tenant is '. Tenant::current()->name);
   }
public function createDatabase()
{
  DB::connection('tenant')->statement("CREATE DATABASE " . $this->getDatabaseName() );

 Artisan::call('tenants:artisan "migrate --database=tenant" --tenant=' . $this->id);
}
}