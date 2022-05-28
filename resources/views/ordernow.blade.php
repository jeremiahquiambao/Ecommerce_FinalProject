@extends('master')
@section("content")
<div class="custom-product"> 
    <div class="col-sm-10">
        <table class="table">

        <tbody>
            <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$ 0</td>
            </tr>
            <tr>
                <td>Delivery Fee</td>
                <td>$ 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
            </tr>
        </tbody>
        </table>
        <div>
        <form action="/action_page.php">
            <div class="form-group"> <label for="pwd">Delivery Address</label>
                 <textarea type="email" placeholder ="please enter your delivery address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Choose a Payment Method</label> <br><br>
                <input type="radio" name="payment"><span>DEBIT CARDS</span> <br><br>
                <input type="radio" name="payment"><span>E-PAYMENTS</span> <br><br>
                <input type="radio" name="payment"><span>CASH ON DELIVERY</span> <br><br>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
</div> 
@endsection