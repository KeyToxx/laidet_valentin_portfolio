	    <link rel="stylesheet" type="text/css" href="{{asset('css/menuadmin.css')}}">
	    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
	        <div class="container">
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarSupportedContent-7" style="list-style: none;">
	                <ul class="navbar-nav mr-auto">



	                	<a class="navbar-brand" href="{{route('admin')}}"><i class="fa fa-home" aria-hidden="true"></i></a>

	                    <li class="nav-item animated fadeInDown">
	                      <a class="nav-link" href="{{route('admin-about')}}">Gestion a propos</a>
	                    </li>

	                    <li class="nav-item animated slideInUp">
	                      <a class="nav-link" href="{{route('admin-skills')}}">Gestion des compétences</a>
	                    </li>

                      	<li class="nav-item animated fadeInDown">
                      	  <a class="nav-link" href="{{route('admin-projects')}}">Gestion des projets</a>
                      	</li>

                      	<li class="nav-item animated slideInUp">
	                      <a class="nav-link" href="{{route('admin-mails')}}">Gestion des E-mails</a>
	                    </li>

	                    <li class="nav-item animated slideInUp">
	                      <a class="nav-link" href="{{route('admin-cv')}}">Gestion du CV</a>
	                    </li>

	                </ul>
	                <div class="form-inline">
	                    <!-- <a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>CONNEXION</a> -->
	                    @guest
	                      <a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>CONNEXION</a>
	                    @else
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
	                                {{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->lastname }} <span class="caret"></span>
	                            </a>

	                            <ul class="dropdown-menu">
	                                <li>
	                                    <a href="{{ route('logout') }}"
	                                        onclick="event.preventDefault();
	                                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i>
	                                        DECONNEXION
	                                    </a>

	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        {{ csrf_field() }}
	                                    </form>
	                                </li>
	                            </ul>
	                        </li>
	                    @endguest
	                </div>
	            </div>
	        </div>
	    </nav><!--nav-->