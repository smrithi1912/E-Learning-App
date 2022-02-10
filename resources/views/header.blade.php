<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))      //when logged in, user can add items
  {
    $total = ProductController::cartItem();
  }

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ELearn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-align" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category">Category</a>
        </li>
        @if(Session::has('user'))
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Orders</a>
          </li>
        @endif

        <form action="search" class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <input type="text" name="query" class="form-control search-box" placeholder="Search for your product">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0  ms-auto">
      @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">cart({{$total}})</a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">cart({{$total}})</a>
        </li>
      @endif
        
        @if(Session::has('user'))
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Session::get('user')['name']}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/logout">Logout</a>              
            </div>
          </div>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        @endif 

      </ul>
    </div>        


    </div>
  </div>
</nav>