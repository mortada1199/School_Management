<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

   protected $fillable =['name','phone','grade_id','user_id','email','password','age','another_phone'];
   //grade  الصف 
}
