<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps = false;
   public $table = 'invoices';
    public $primaryKey = 'rec_id';
    public $fillable = [
        
        'billing_name',
        'billing_address',
        
    ];
    
    use HasFactory;


    public function billinginfo()
    {
        return $this->belongsTo(Invoice::class,'invoice_no','id');
    }
}