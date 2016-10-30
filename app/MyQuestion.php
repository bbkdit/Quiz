<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyQuestion extends Model
{
    //
     protected $table = 'my_questions';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['question_name','quiz_id','option_a','option_b','option_c','option_d','correct_answer'];




	 public function quizz()
    {
        return $this->belongsTo('App\quizz','quiz_id');
    }
}
