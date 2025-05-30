<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{url('/')}}"><img width="200" src="images/cybercart light slogan.JPG" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="about.html">About</a></li>
                      <li><a href="testimonial.html">Testimonial</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="blog_list.html">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('show_order')}}">Order</a>
                </li>

                <form class="form-inline">
                   <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   </button>
                </form>

                @if (Route::has('login'))

                @auth

                    <a href="{{ route('profile.show') }}" id="prof" style="width:125px;" class="btn btn-primary">
                        {{ __('Edit Profile') }}</a>

                    <form method="POST" action="{{ route('logout') }}" style="width:150px; text-align:center;" class="inline">
                        @csrf

                        <button type="submit" class="btn btn-danger">
                            {{ __('Log Out') }}
                        </button>
                    </form>

                @else

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endauth

                @endif

             </ul>
          </div>
       </nav>
    </div>
 </header>
