<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billingfile extends Model
{
    public $timestamps = false;
   public $table = 'billing_files';
    public $primaryKey = 'rec_id';
    public $fillable = [
        'company_id',
        'invoice_date',
        'kind_attention',
        'last_name',
        'file_name',
        
    ];
    
    use HasFactory;


    public function billingfile()
    {
        return $this->belongsTo(Billingfile::class,'company_id','id');
    }

   
}