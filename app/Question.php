<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
    protected $table = 'questions';



    protected $fillable = ['quiz_name','quiz_desc','quiz_number'];
}
