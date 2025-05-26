<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Tenant as SpatieTenant;
// use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class Tenant extends SpatieTenant{

    protected $fillable = ['name','database','domain'];
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}