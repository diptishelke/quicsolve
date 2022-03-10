<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   public $table = 'patients';
    public $primaryKey = 'id';
    public $fillable = ['name', 'email', 'phone', 'age', 'gender', 'address', 'photo'];
    use HasFactory;
}
