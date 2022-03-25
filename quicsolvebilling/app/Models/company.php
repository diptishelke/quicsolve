<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    public $table = 'companies';
     public $primaryKey = 'rec_id';
     public $fillable = [
         'company_name',
        
     ];
     
    use HasFactory;
}
