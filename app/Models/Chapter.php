<?php

namespace App\Models;

use App\Traits\FilesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Chapter extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia , FilesTrait;
    protected  $fillable=['name','student_id','user_id','Classes','servings'];
}
