

 <nav class="navbar navbar-default navbar-static-top" >
        <div class="container" style="background-color:#ffffcc;">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Create Own Quiz
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/quiz') }}">All Quizs</a></li>
                    <li><a href="{{ url('/createn') }}">Creat Quiz</a></li>
                    <li><a href="{{ url('/index') }}">Crud</a></li>
                    <li><a href="{{ url('/quizqsn') }}">allqsn</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn"></i>Profile</a></li>
                                
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


	<!--<div id="menu-wrapper">
		<!--<ul id="menu">
			<li><a href="{{ url('/') }}"><span>Home</span></a></li>
			<li><a href=""><span>About</span></a></li>
			<li><a href="{{ url('/quiz') }}"><span>All Quizs</span></a></li>
			<li><a href="{{ url('/createn') }}"><span>Create Quizs</span></a></li>
		</ul>-->
		</div>
		
	
