 
@extends('layouts.master')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                

                <div class="panel-body">
                   
       
                    <table class="table">
                    
    <thead>
      <tr>
        <th>Questions</th>
        <th></th>
        
        <th>play</th>
      </tr>
    </thead>
    <tbody>
     @if(count($data) > 0)
    @foreach ($data as $question)
      <tr class="table table-bordered">
        <td >{{ $question->question_name }}<br><br>
        <form style="padding-left: 30px;">
    <label class="radio">
      <input type="radio" name="optradio"><b>A</b>.&nbsp;&nbsp;{{ $question->option_a }}
    </label>
    <label class="radio">
      <input type="radio" name="optradio"><b>B</b>.&nbsp;&nbsp;{{ $question->option_b }}
    </label>
    <label class="radio">
      <input type="radio" name="optradio"><b>C</b>.&nbsp;&nbsp;{{ $question->option_c }}
    </label>
     <label class="radio">
      <input type="radio" name="optradio"><b>D</b>.&nbsp;&nbsp;{{ $question->option_d }}
    </label>
  </form><br>
        </td>
        <td><br><button type="button" class="btn btn-info">check</button></td>
      </tr>
      @endforeach

                    @endif
     
@endsection



