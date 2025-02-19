 <!-- navbar -->
 <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="/">
           <img src="{{ url('frontend/images/logo.png')}}" alt="Logo"> 
        </a>
        <button 
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
        >
         <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a class="nav-link active" href="#" >Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#">Paket Travel</a>
                </li>    
                <li class="nav-item dropdown">
                    <a 
                    class="nav-link dropdown-toggle" 
                    href="#"
                    id="navbardrop"
                    data-toggle="dropdown"
                    >
                    Services
                </a>
                <div class="dropdown-menu"> 
                    <a href="#" class="dropdown-item" >Link 1</a>
                    <a href="#" class="dropdown-item" >Link 2</a>
                    <a href="#" class="dropdown-item" >Link 3</a>
                </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#" >Testimonial</a>
                </li>
            </ul>
            @guest
                  <!-- Mobile button -->
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0 " type="button" 
        onclick="event.preventDefault(); window.location='/login';">
          Masuk
        </button>
      </form>

      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" 
        onclick="event.preventDefault(); window.location= '/login';">
          Masuk
        </button>
        
      </form>            
      @endguest

            @auth
            <!-- Mobile button -->
<form class="form-inline d-sm-block d-md-none" action="{{ 'logout'}}" method="POST">
  @csrf
  <button class="btn btn-login my-2 my-sm-0 ">
    Keluar
  </button>
</form>

<!-- Desktop Button -->
<form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ 'logout'}}" method="POST">
  @csrf
  <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
    Keluar
  </button>
  
</form>
      @endauth
          
    </div>
  </nav>
</div> 
