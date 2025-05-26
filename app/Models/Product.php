<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class Product extends Model
{
    use UsesTenantConnection ;
   protected $fillable = ['name'];
   public function tenant(){
    return $this->belongsTo(Tenant::class);
   }
}
