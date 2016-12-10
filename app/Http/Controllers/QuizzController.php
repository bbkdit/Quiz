<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\quizz;
use App\Questions;
use App\MyQuestion;
use App\User;
class QuizzController extends Controller
{
    

     
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
	* Create new quiz page
	*
	*/
	
	public function userprofile(){
		$user = User::where('id','=',\Auth::user()->id)->get()->first();
		return view('users.profile',compact("user"));
	}
	public function getCreateQuizPage($id){
		$data=quizz::find($id);
		return view('questions',compact("data"));
	}

	 public function getQuizes(){
        $data=quizz::all();
        return view('display',compact("data"));
    }

    public function showatwlcm(){
        $data=quizz::all();
        $user = User::where('id','=',\Auth::user()->id)->get()->first();
        return view('welcome',compact("data","user"));   
    }


    public function getQuizesQsn(){
        $data=MyQuestion::all();
        return view('allquestions',compact("data"));
        
    }

    public function displayqsn($id){
	$questions=MyQuestion::where('quiz_id','=',$id)->get();
	$quiz=quizz::find($id);
	$i=0;
     return view('singlequiz',compact("questions","quiz"))->with('i');

    }

  
	public function createNewQuiz(Request $request){
		$bs = new quizz; //model from database
    $bs->quiz_name = Input::get('quiz_name');
    $bs->quiz_desc = Input::get('quiz_desc');
    $bs->quiz_number = Input::get('quiz_number');
    $bs->save();
    return redirect('quiz');
	}

	public function delete($id){
        $data=quizz::find($id);
        $data->delete();
        return redirect('quiz');

    }

	public function createNewQuestion(Request $request,$id){
    $bss = new  MyQuestion;
    $bss->question_name = Input::get('question_name');
    $bss->quiz_id = $id;
    $bss->option_a = Input::get('option_a');
    $bss->option_b = Input::get('option_b');
    $bss->option_c = Input::get('option_c');
    $bss->option_d = Input::get('option_d');
    $bss->correct_answers = Input::get('correct_answer');
    $bss->save();
    return "question inserted";
	}

	 public function getQuestion(){
        $questions = MyQuestion::all();
        return view('allquestions',compact("questions"));
    }
//<----ajax request--->
    public function ans(Request $request){
    	   //$data = $request->all();
    	   //var_dump($data);

    	   $qzid=$request->qzid;
    	   $qsnid=$request->qsnid;
    	   $cans=$request->chkd;

    	$questions=MyQuestion::where('quiz_id','=',$qzid)->get();
        if($questions->correct_answer==$cans)
    	{
    		return "correct answer";
    	 }
        }

	public function showrelation($id){
         $comment= new quizz;
		$comments = quizz::find($id)->questions;
        return view('myfile.page2',compact("comments"));
         
	}


}
