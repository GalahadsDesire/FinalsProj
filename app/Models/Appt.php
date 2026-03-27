<?php

namespace App\Models;
 use Illuminate\Database\Eloquent\Factories\HasFactory; 

use Illuminate\Database\Eloquent\Model;

class Appt extends Model
{
     use HasFactory; 
     protected $fillable = ['appt_id','Customer_FN','Customer_LN','phone_number','email','HomeAddress','Doctor_Assigned','Date','Time_slot','Status'];
}
