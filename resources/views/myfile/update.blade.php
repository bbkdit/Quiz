<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
 {{Form::model($data1,['method'=>'patch','action'=>['MyController@update',$data1->id]])}}


 {{Form::label('f_name','First Name')}}
 {{Form::text('f_name')}}<br><br>
 
 {{Form::label('l_name','Last Name')}}
 {{Form::text('l_name')}}<br><br>

 {{Form::label('email','Email')}}
 {{Form::text('email')}}<br><br>

 {{Form::submit('update')}}

 {{Form::close()}}


 

</body>
</html> 