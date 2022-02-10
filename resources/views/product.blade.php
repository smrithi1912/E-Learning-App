@extends('master')
@section("content")
<div class="custom-product">

<!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

        <div class="carousel-inner">
          <?php 
            $count = 0;
            foreach ($products as $values){
              ?>
              <div class="carousel-item <?php 
                if($count==0){
                  echo "active";  
                }
                else{
                  echo " ";
                }
                ?>" data-interval="200">
                <img src="<?php echo $values['gallery']; ?>" class=" w-100 d-block slider-img" alt="...">
                <div class="carousel-caption slider-text">
                  <h3>{{$values['name']}}</h3>
                  <p>{{$values['description']}}</p>
                </div>
              </div>
              <?php 
                $count++;
            }
              ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

  </div>
    <!-- carousel -->


    <!-- gallery -->
    <div class="trending-wrapper">
      <h3>Trending Courses</h3>
      @foreach ($products as $item)
      <div class="trending-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="">
              <h5>{{$item['name']}}</h5>

            </div>
          </a>
        </div>    
        @endforeach
    </div>
   <!-- gallery -->

  

  </div>
@endsection