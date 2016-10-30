@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            






                    <form class="form-signin"   role="form" method="POST" action="{{ url('/login') }}">

                    {{ csrf_field() }}       
      <h2 class="form-signin-heading"  >Please login</h2>

       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" value="{{ old('email') }}"/>

       @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

       @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
       <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>  
    </form>




            
            </div>
        </div>
    </div>
</div>
@endsection
