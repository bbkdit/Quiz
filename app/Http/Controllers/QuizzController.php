<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\quizz;
use App\Questions;
use App\Options;
use App\Answers;
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
	
     return view('singlequiz',compact("questions","quiz"));

    }

	/**
	* Get all the quizes
	*
	**
	public function getQuizes(){
		$quizes = quizz::all();
		return view('quizz')->with(['quizes' => $quizes]);
	}
     

	/**
	*
	* Create a quiz
	**/
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


  
	/**
	* Create new question
	*
	**
	public function createNewQuestion(Request $req,$id){
		$quiz_id=$id;
		$question_table_data = [
			'question_name' => $req->input('question_name')
			'option_a' => $req->input('option_a')
			'option_b' => $req->input('option_b')
			'option_c' => $req->input('option_c')
			'option_d' => $req->input('option_d')
			'correct_answers' => $req->input('correct_answer')
		];
		$this->validate($req,[
			'question_name' => 'required',
			
		]);
		$question_id = \DB::table('my_questions')->insertGetId($question_table_data);
	}
		/*if($question_id != null){
			\DB::table('question_categories')->insert([
				'question_id' => $question_id,
				'quiz_id' => $quiz_id,
			]);
			\DB::table('skill_question')->insert([
				'skill_id' => $req->input('skill'),
				'question_id' => $question_id
			]);
			$options_table_data =[
				['option' => $req->input('option1'),'question_id' => $question_id],
				['option' => $req->input('option2'),'question_id' => $question_id],
				['option' => $req->input('option3'),'question_id' => $question_id],
				['option' => $req->input('option4'),'question_id' => $question_id]
			];
			\DB::table('options')->insert($options_table_data);
			return redirect()->back()->withErrors(['Question added successfully! Go to the question page to add answers or continue adding questions!']);
		}else{
			return redirect()->back()->withErrors(['Something went wrong! Please try again or contact the developer!']);
		}
	}*/

	public function showrelation($id){
         $comment= new quizz;
		$comments = quizz::find($id)->questions;
        return view('myfile.page2',compact("comments"));
         
	}


}
