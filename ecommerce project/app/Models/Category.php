<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Category extends Model
{
    
    public $timestamps = false;

    protected $table = 'categories';
    protected $fillable=[
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        
       
    ];
    use HasFactory;
}
