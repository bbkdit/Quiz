@extends('layouts.master')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                

                <div class="panel-body">
                    
       
                    <h2><td><a href="open">create</a></td></h2>
 <table  class="table table-bordered" style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>id</th>
    <th>show</th>
    <th>update</th>
    <th>delete</th>
  </tr>
@foreach($data1 as $quiz)
  <tr>
    <td>{{$quiz->f_name}}</td>
    <td>{{$quiz->l_name}}</td>
    <td>{{$quiz->email}}</td>
    <td>{{$quiz->id}}</td>
    <td><a href="show/{{$quiz->id}}">show</a></td>
    <td><a href="edit/{{$quiz->id}}">update</a></td>
    <td><a href="delete/{{$quiz->id}}">delete</a></td>
  </tr>
  @endforeach
  <tr>
  </table>
    
     
@endsection

<!DOCTYPE html>
<html>
<head>
	<title>my work</title>
</head>
<body>

</body>
</html>