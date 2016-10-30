@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default col-md-6">
                <div class="panel-heading" >Create your quizz</div>

                <div class="panel-body">
                    
                    
                   <form role="form" action="{{ url('/new_quiz') }}" method="POST">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      
      <input type="text" class="form-control" name ="quiz_name" placeholder="Name your Quizz" required="required">
    </div>
    <div class="form-group">
      
      <textarea class="form-control" rows="5" name="quiz_desc" placeholder="Do You want to add some descreption?(optional)"></textarea>
    </div>

    <div class="form-group">
  <label for="sel1">Select Number of Questions:</label>
  <select class="form-control" name="quiz_number" required="required">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>
<div class="form-group">



<input type="submit" class="btn btn-info" name="submit" value="Next">
 </div>
  </form>

  <!-- Button trigger modal -->


<!-- Modal -->

                </div>
            </div>
        
         <div class="panel panel-default col-md-6">
                
                <div class="panel-body">
               


                
                </div>
            </div>
            </div>
    </div>
</div>
@endsection
