@extends('master')
@section("content")
<div class="container  mt-5">
    <div class="col-sm-10">
        <table class="table caption-top">
            <tbody>
                <tr>
                    <th scope="row">Amount</th>
                    <td>${{$total}}</td>

                </tr>
                <tr>
                    <th scope="row">Tax</th>
                    <td>$0</td>
                </tr>
                <tr>
                    <th scope="row">Delivery</th>
                    <td>$10</td>
                </tr>
                <tr>
                    <th scope="row">Total Amount</th>
                    <td>$ {{$total +10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form- group mb-3">
                    <textarea class="form-control" placeholder="enter your address" name="address"></textarea>
                </div>
                <div class="form-group" style="display: inline;">
                    <label for="payment" class="form-label">Payment Method</label><br>
                    <input type="radio" name="payment" value="cash" style="margin-left: 8px;"><span style="margin-left: 5px;">Online payment</span><br>
                    <input type="radio" name="payment" value="cash" style="margin-left: 8px;"><span style="margin-left: 5px;">Payment On Delivery</span>
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection