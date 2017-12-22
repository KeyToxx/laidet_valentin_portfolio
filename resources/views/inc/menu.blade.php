<link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
<!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
              <div class="container">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent-7" style="list-style: none;">
                      <ul class="navbar-nav mr-auto">

                          <li class="nav-item animated slideInUp <?php echo ($page == "accueil" ? "active" : "") ?>">
                              <a class="nav-link" href="{{route('accueil')}}">Accueil <span class="sr-only">(current)</span></a>
                          </li>

                          <li class="nav-item animated fadeInDown <?php echo ($page == "projet" ? "active" : "") ?>">
                            <a class="nav-link" href="{{route('projet')}}">Mes projets</a>
                          </li>

                          <li class="nav-item animated slideInUp <?php echo ($page == "contact" ? "active" : "") ?>">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                          </li>

                          @auth
                            <li class="nav-item animated fadeInDown">
                              <a class="nav-link" href="{{route('admin')}}">Administration</a>
                            </li> 
                          @endauth  
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