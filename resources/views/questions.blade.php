@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add 5 Questions to the Quizz{{$data->id}} <a href="">{{$data->quiz_desc}}{{$data->quiz_name}}
                {{$data->quiz_number}}</a></div>
                <div class="panel-body">
                <div class="col-md-8 col-md-offset-1">
 <form role="form" action="{{ url('/quiz') }}/{{$data->id}}/question/add" method="post">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" name="quiz_id" value="{{$data->id}}">
  <div class="form-group">
    <label for="email">Question no:</label>
    <input type="text" class="form-control" name="question_name">
  </div>
  <div class="form-group">
  <div class=" col-sm-4">
    <label for="pwd">Option 1</label>
    

    <input type="text" class="form-control" name="option_a">
    </div>
    <div class=" col-sm-4">
     <label for="pwd">Option 2</label>
    
    <input type="text" class="form-control" name="option_b">
    </div>
    <div class=" col-sm-4">
     <label for="pwd">Option 3</label>
    
    <input type="text" class="form-control" name="option_c">
    </div>
    <div class=" col-sm-4">
     <label for="pwd">Option 4</label>
    
    <input type="text" class="form-control" name="option_d">
    </div>
    <div class=" col-sm-4">
     <label for="pwd">correct option</label>
    
    <input type="text" class="form-control" name="correct_answer">
  </div>
  <div class=" col-sm-4"><br>
  <button type="submit" class="btn btn-primary">Next Question</button>
  </div>
  </div>
    
  
</form></div></div>
                </div>

         

            </div>
        </div>
    </div>
@endsection




 