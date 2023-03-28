<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['replay','question','student_id','user_id','rate'];

    public  function  student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
