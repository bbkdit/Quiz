@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>your profile</h2>
            {{$user->name}}<br>
            {{$user->email}}
         

            </div>
        </div>
    </div>
@endsection
