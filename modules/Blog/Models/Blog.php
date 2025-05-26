<?php 
namespace Modules\Blog\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    protected $fillable = ['name','cat_id','body'];
}