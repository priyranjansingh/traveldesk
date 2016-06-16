<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'password',
        'type',
        'email'        
    ];
   

}
