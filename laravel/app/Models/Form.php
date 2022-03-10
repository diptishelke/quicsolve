<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $field;
    
    public function add() {
        $this->name = $this->field['name'];
        $this->email = $this->field['email'];
        $this->phone = $this->field['phone'];
        $this->age = $this->field['age'];
        
        $this->city = $this->field['city'];
        $this->state = $this->field['state'];
        $this->pincode = $this->field['pincode'];
        $this->password = $this->field['password'];
        
        $this->image = $this->field['image'];

        $this->save();
    }
}