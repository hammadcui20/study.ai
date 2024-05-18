<nav class="navbar navbar-expand-lg navbar-default fixed-top shadow">
  <div class="container navbar-default ">
     <a class="navbar-brand text_green fw-bold" href="{{url('/')}}">Mumtaz & CO</a>
     <button class="navbar-toggler bg_green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span><i class="fas fa-bars"></i></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
           <a class="nav-link text_green text-uppercase fw-bold px-3 active" aria-current="page" href="/"><span class="border-bottom-custom">Home</span></a>
           <a class="nav-link text_green  text-uppercase  fw-bold px-3" href="{{url('category')}}"><span>Products</span></a>
           <a class="nav-link text_green text-uppercase  fw-bold px-3" href="{{url('about')}}"><span>About Us</span></a>
           <a class="nav-link text_green  text-uppercase  fw-bold px-3" href="{{url('contact')}}"><span>Contact Us</span></a>

        </div>
        <div class="navbar-nav ms-auto justify-content-center">


           @guest

           @if (Route::has('login'))
           <li class="nav-item">
              <a class="nav-link btn btn_green fw-bold me-2" id="loginblack" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li class="nav-item">
               <a class="nav-link btn btn_green fw-bold" id="loginblack"  href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif


            @else

            <div class="input-group hello">
               <form class="d-flex bg-transparent w-100" action="{{url('searchProduct')}}" class="form-control" method="POST">
                  @csrf
                  <div class="input-group">
                     <input name="product_name" required type="search" id="search_product" class="form-control text_green rounded-pill "  placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                     <button class="btn text_green" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
               </form>
             </div>
            <a class="cartblack nav-link text_green" href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link text_green" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <img
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
            class="rounded-circle"
            height="22"
            alt="Portrait of a Woman"
            loading="lazy"
          />
              </a>
              <div class="dropdown-menu dropdown-menu-end text_green fs-6" aria-labelledby="navbarDropdown">

               <a class="dropdown-item"> {{ Auth::user()->name }}</a>

                  <a class="dropdown-item" href="{{url('my-order')}}">
                     My Orders
                  </a>

                 <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                 </form>
              </div>
           </li>

           @endguest
        </div>
     </div>
  </div>
</nav>
