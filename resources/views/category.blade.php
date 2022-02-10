@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Categories </h4>
            @foreach($products as $item)
            <div class="searched-item">
              <!-- <p><a href="detail/{{$item['id']}}"></p> -->
              <!-- <img class="trending-image" src="{{$item['gallery']}}"> -->
              <div class="">
                <h2>{{$item['category']}}</h2>
                <!-- <h5>{{$item['description']}}</h5> -->
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection