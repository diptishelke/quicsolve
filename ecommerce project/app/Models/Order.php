<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

   protected $tabel="orders";
   protected $fillable=[
       'user_id',
       'fname',
       'lname',
       'email',
       'phone',
       'address',
       'state',
       'city',
       'country',
       'pincode',
       'status',
       'message',
       'tracking_no',
   ];
    public function add() {
    }
}