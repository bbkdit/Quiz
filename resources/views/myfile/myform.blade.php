<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
 <form method="post" action="{{ url('myrout') }}">
  First name:<br>
  <input type="text" name="f_name"><br>
  Last name:<br>
  <input type="text" name="l_name"><br>
  Email:<br>
  <input type="email" name="email"><br>
    Password:<br>
  <input type="password" name="password"><br>

  <input type="submit" name="submit">
</form>


</body>
</html>