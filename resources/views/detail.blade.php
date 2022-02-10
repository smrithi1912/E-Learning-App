@extends('master')
@section("content")

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/add_rating" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rate the course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="rating-css">
                            <div class="star-icon">
                                <input type="radio" value="1" name="product_rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="product_rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="product_rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="product_rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="product_rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
<!-- Modal -->

<div class="container" style="padding-top:2rem;">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
        <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <h3>Price : {{$product['price']}}</h3>
       <h4>Details: {{$product['description']}}</h4>
       <h4>category: {{$product['category']}}</h4>   
 
       <hr> 
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Rate the course
        </button>
     
       <br><br>
       @if(Session::has('user'))
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-success">Add to Cart</button>
            </form>
        @else
            <a class="nav-link" href="/login"><button class="btn btn-success" href="/login">Add to Cart</button></a>
         
        @endif
       
       <br><br>

       @if(Session::has('user'))
            <form action="/orderplace" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-success">Buy Now</button>
            </form>
        @else
            <a class="nav-link" href="/login"><button class="btn btn-success" href="/login">Buy Now</button></a>
         
        @endif

       <br><br>
    </div>
   </div>
</div>
@endsection