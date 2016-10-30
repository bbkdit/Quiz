@extends('layouts.master')


@section('content')

<div id="page">
        <div id="content">
            <div class="contentbg">
                <div class="post">
                <h2 class="title"><a href="#">Welcome {{$user->name}} to The Quizzer.com</a></h2>

              

<a href="">Quizes</a>
<p>A quiz is a form of game or mind sport in which the players (as individuals or in teams) attempt to answer questions correctly. In some countries, a quiz is also a brief assessment used in education and similar fields to measure growth in knowledge, abilities, and/or skills.

Quizzes are usually scored in points and many quizzes are designed to determine a winner from a group of participants – usually the participant with the highest score.</p>
<div class="panel panel-default">
 <div class="panel-heading">Play quiz</div>
  <div class="panel-body"> @if(count($data) > 0)
  <ol>
    @foreach ($data as $quizs)
      <li><tr class="table table-bordered">
        <td ><a href="{{ url('display/quiz/')}}/{{$quizs->id}}">{{ $quizs->quiz_name }}</a></td><br>
      </tr></li>
      @endforeach
      </ol>

                    @endif</div>
  
</div>
</div>
</div>
</div>

<div id="sidebar-bg">
            <div id="sidebar">
            
            <div class="list-group">
  <a href="#" class="list-group-item">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>

            <div id="centrada">


  
<div class="cube flip-to-top">
      <div class="default-state facebook">
            <span>Like</span>
      </div>
      <div class="active-state facebook">
          <span><a href="https://www.facebook.com/utopixstudios" target="_blank">Facebook</a></span>
    </div>
</div>

<div class="cube flip-to-top google-plus">
      <div class="default-state">
            <span>+1</span>
      </div>
      <div class="active-state google-plus">
          <span><a href="https://plus.google.com/u/0/+XavierPinyol-Utopix" target="_blank">Google Plus</a></span>
    </div>
</div>


<div class="cube flip-to-top twitter">
      <div class="default-state">
            <span>Follow</span>
      </div>
      <div class="active-state twitter">
          <span><a href="https://twitter.com/UtopixStudios" target="_blank">Twitter</a></span>
    </div>
</div>

<div class="cube flip-to-top">
      <div class="default-state linkedin">
            <span>Connect</span>
      </div>
      <div class="active-state linkedin">
          <span><a href="https://www.linkedin.com/pub/xavi-pinyol-sans/3b/9ab/180" target="_blank">Linkedin</a></span>
    </div>
</div>
  
</div>
</div>
</div>
</div>

@endsection

