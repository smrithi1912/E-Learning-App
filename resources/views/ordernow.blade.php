@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
     <table class="table table-striped">

      <tbody>
        <tr>
          <td>Amount</td>
          <td>Rs {{$total}}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>Rs 0.</td>
        </tr>
        <tr>
          <td>Delivey</td>
          <td>Rs 0.</td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td>Rs {{$total}}</td>
        </tr>

      </tbody>
    </table>

    <form action="/orderplace" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlSelect1">Payment Method</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" checked>
          <label class="form-check-label" for="exampleRadios1">
            Netbanking
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="cash">
          <label class="form-check-label" for="exampleRadios2">
            Credit Card
          </label>
        </div>

      </div>
      <button type="submit" class="btn btn-primary">Order Now</button>

    </form>
     </div>
</div>
@endsection 