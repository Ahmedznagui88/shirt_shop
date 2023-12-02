<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <div class="container-fluid textNav ">
    <a href="/" class="d- flex justify-content-center">
      <img src="/media/img.png" class="invert bg-warning rounded-5">
    </a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-5" id="navbarNav">
      <ul class="navbar-nav">
        @auth
        <li class="nav-item">
          <a class="nav-link active "  aria-current="page" href="{{ route('tshirt.create') }}">Add Product</a>
        </li>
        @endauth
        <li class="nav-item d-flex align-items-center  ">
          <a class="nav-link textNav " href="{{ route('tshirt.index') }}">Showcase</a>
          <a href="{{ route('tshirt.index') }}" class="icon">
            <i class="fa-solid fa-shop" style="color: rgb(230, 232, 142)"></i>
          </a>
        </li>
      </ul>
    </div>
    
    <ul class="navbar-nav">
      @auth
      <div class="d-flex align-items-center mx-3">
        <i class="fa-regular fa-user icon" style="color: rgb(230, 232, 142)"></i>
      </div>
      <li class="nav-item">
        <a class="nav-link textNav " aria-current="page" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
        <form action="{{route('logout')}}" method="POST" id="form-logout">
          @csrf
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link textNav text-danger" aria-current="page" href="#" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();">Cancella Account</a>
        <form action="{{ route('destroy') }}" method="POST" id="form-delete">
          @csrf
          @method('DELETE')
        </form>
      </li>
        @else
        
        <li class="nav-item textNav   d-flex align-items-center">
          <a href="{{ route('login') }}" class="icon">
            <i class="fa-regular fa-user mx-3 icon" style="color: rgb(230, 232, 142)"></i>
          </a>
          <a class="nav-link textNav " aria-current="page" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link textNav " href="{{ route('register') }}">Sign in</a>
        </li>
      @endauth
      
    </ul>
  </div>
</nav>