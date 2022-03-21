<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = false;

   
    protected $fillable = [

        'cate_id',
        'name',
        'slug',
        'small_desc',
        'qty',
        'description',
        'selling_price',
        'original_price',
        'image',
        'trending',
        'status',
       
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
}
