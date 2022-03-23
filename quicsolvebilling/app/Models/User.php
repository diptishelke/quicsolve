<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
   public $table = 'users';
    public $primaryKey = 'id';
    public $fillable = [
        'username',
        'first_name',
        'last_name',
        'email_id',
        'password',
        'status',
    ];
    
    use HasFactory;


  

   
}