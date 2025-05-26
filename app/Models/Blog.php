<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable= ['name','body'];
    
    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
}
