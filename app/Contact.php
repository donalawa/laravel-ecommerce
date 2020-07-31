<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // public $table = "student_table";
    protected $fillable = ["name","email","number","message"];
}
