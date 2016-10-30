 
@extends('layouts.master')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                   
       
                    <table class="table table-bordered" style="width:100%">
                    
      <thead>
      <tr>
        <th>Quizz Name</th>
        
        
        <th>Delete</th>
        <th>Add</th>
        <th>Play</th>
      </tr>
    </thead>
    <tbody>
     @if(count($data) > 0)
    @foreach ($data as $quizs)
      <tr class="table table-bordered">
        <td ><a href="{{ url('display/quiz/')}}/{{$quizs->id}}">{{ $quizs->quiz_name }}</a></td>
        
        
        <td><a href="deleteqz/{{$quizs->id}}">delete</a></td>
        <td><a href="create/{{$quizs->id}}">Add Questions</a></td>
        <td><button type="button" class="btn btn-info">play</button></td>
      </tr>
      @endforeach

                    @endif
     
@endsection