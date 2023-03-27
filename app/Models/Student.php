<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;


   protected $fillable =['name','phone','grade_id','user_id','email','password','age','another_phone','chapter_id','status'];

   public  function  chapter()
   {
       return $this->belongsTo(Chapter::class,'chapter_id');
   }

}
