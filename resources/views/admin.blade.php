@extends('master')
@section("content")
<div class="custom-product">

<a class="btn btn-primary" href="/add_new_products" role="button">Add New Products</a>

    <div class="container" style="margin-top:50px;">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Gallery</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        @foreach ($products as $item)

        <tbody>
            <tr> 
            <!-- <td>{{$item['gallery']}}</td> -->
            <th scope="row">{{$item['id']}}</th>
            <td><img class="trending-image" src="{{$item['gallery']}}"></td>
            <td>{{$item['name']}}</td>
            <td>{{$item['price']}}</td>
            <td>{{$item['category']}}</td>
            <td>{{$item['description']}}</td>
            <td><a class="btn btn-warning" href="/edit_products" role="button">Edit</a></td>
            <td><a class="btn btn-danger" href="delete_products" role="button">Delete</a></td>

            </tr>

        </tbody>
        @endforeach
        </table>

        <br><br>
        
    </div>
</div>

@endsection