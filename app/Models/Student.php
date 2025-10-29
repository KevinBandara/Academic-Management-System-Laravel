<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; 

    protected $primaryKey = 'studentID';
    protected $fillable = ['studentID', 'studentFname', 'studentLname', 'telephone', 'email', 'address'];

}
 