@extends('master')
@section("content")
<div class="custom-product">


<form action="/add_new_product" method="POST" onsubmit="return validate()">
                 @csrf
                <div class="mb-3">
                   
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
                    <label for="exampleInputEmail1" class="form-label">Category</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">

                </div>

                </div>

                <button type="submit" class="btn btn-primary" id="submitBtn">Register</button>
            </form>

@endsection