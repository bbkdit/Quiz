 @extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#pane2").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
    
}

#panel {
    padding: 50px;
    display: none;
    visibility: hidden;
}
</style>
@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                

                <div class="panel-body">
                   
       
                    <table class="table">
                    
    <thead>
      <tr><div class="well"><h2>{{$quiz->quiz_name}}</h2><br>
      <p>{{$quiz->quiz_desc}}</p>
      </div>
        <th></th>
        <th></th>
        
        <th>play</th>
      </tr>
    </thead>
    <tbody>
     @if(count($questions) > 0)
     
    @foreach ($questions as $question)
      <tr class="table table-bordered">
        <td><li>{{ $question->question_name }}</li><br><br>
        <form>
    <label class="radio-inline">
      <input type="radio" name="optradio"><b>A</b>.&nbsp;&nbsp;{{ $question->option_a }}
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"><b>B</b>.&nbsp;&nbsp;{{ $question->option_b }}
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"><b>C</b>.&nbsp;&nbsp;{{ $question->option_c }}
    </label>
     <label class="radio-inline">
      <input type="radio" name="optradio"><b>D</b>.&nbsp;&nbsp;{{ $question->option_d }}
    </label>
  </form><br>
 
        </td>
        <td><br><br><button type="button" class="btn btn-info" id="flip">check</button></td>
        </tr>

      @endforeach
      </tbody>

    

                    @endif
                    </table>
        </div>
     
@endsection

 
 
