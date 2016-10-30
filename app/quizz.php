<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quizz extends Model
{
    //
    protected $table = 'quizzs';
    
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['quiz_name','quiz_desc','quiz_number'];


	//public function UserQuestion(){
	//	return $this->hasMany('App/Question','quiz_id');
//}
 public function my_questions(){

         return $this->hasMany('App\MyQuestion');
    }
}
