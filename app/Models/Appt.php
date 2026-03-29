<?php

namespace App\Models;
 use Illuminate\Database\Eloquent\Factories\HasFactory; 

use Illuminate\Database\Eloquent\Model;

class Appt extends Model
{
     use HasFactory; 
     public $timestamps = false; // disable timestamps since we dont need it
     protected $fillable = ['appt_id','Patient_FN','Patient_LN','phone_number','email','HomeAddress','Doctor_Assigned','Date','Time_slot','Status'];
}
