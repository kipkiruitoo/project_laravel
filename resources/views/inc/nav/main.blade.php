<nav class="navbar ">
        <div class="navbar-brand">
            <a  href="{{ url('/') }}">
             <img src="{{asset('images/devmarketer-logo.png')}}" alt="">
           </a>
        </div>
           
           

           <div class="navbar-menu has-text-info">
               <div class="navbar-start">
                   <a href="" class="navbar-item is-tab">Videos</a>
                   <a href="" class="navbar-item is-tab">Ebooks</a>
                   <a href="" class="navbar-item is-tab">Blog</a>
               </div>
               
               <div class="navbar-end">
                 <div class="navbar-item">
                  <form action="/search" method="GET">
                    <div class="control">
                    <input name="value" class="input" placeholder="search" type="text">
                    </form>
                  </div>
                  </div>
                   <!-- Authentication Links -->
                   @guest
                       <a class="navbar-item is-tab" href="{{ route('login') }}">{{ __('Login') }}</a>
                       <a class="navbar-item is-tab" href="{{ route('register') }}">{{ __('Register') }}</a>
                   @else
                   <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger navbar-item is-tab ">
                          <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span>Hey  {{ Auth::user()->name }}</span>
                            <span class="icon is-small">
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                          </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu">
                          <div class="dropdown-content">
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-user"></i> Profile
                            </a>
                            <a class="dropdown-item">
                                <i class="fa fa-bell"></i> Notificaions
                            </a>
                            <a href="#" class="dropdown-item ">
                                <i class="fa fa-cogs"></i> Settings
                            </a>
                            <hr class="dropdown-divider">
                            <a  class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                              
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                          </div>
                        </div>
                      </div>
                      
                   @endguest
                </div>
           </div>
       
   </nav>