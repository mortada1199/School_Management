<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model

{
    use HasApiTokens, HasFactory, Notifiable;


   protected $fillable =['name','phone','grade_id','user_id','email','password','age','another_phone'];

}
