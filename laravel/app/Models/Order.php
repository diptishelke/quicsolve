<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $field;
    
    public function add() {
        $this->name = $this->field['name'];
        $this->email = $this->field['email'];
        $this->phone = $this->field['phone'];
        $this->gender = $this->field['gender'];
        $this->save();
    }
}