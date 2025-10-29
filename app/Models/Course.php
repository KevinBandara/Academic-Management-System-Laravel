<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'courceID';
    public $incrementing = true;

    protected $fillable = [
        'courceName',
        'courceAbout',
        'lectureName',
    ];
}
