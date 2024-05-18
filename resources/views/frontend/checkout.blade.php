@extends('layouts.customer')

@section('title')
   Check Out
@endsection

@section('content')
<div class="py-5">

</div>
    <div class="container mt-3">
        <form action="{{url('place-order')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row my-4">
                                <div class="col-12">
                                <img src="https://www.kindpng.com/picc/m/761-7619848_jazz-cash-easy-paisa-hd-png-download.png" class="w-100" alt="Jazz Cash Easy Paisa, HD Png Download@kindpng.com"><br>
                                </div>
                                <div class="col-12">
                                <h3 class="text-center text-primary fs-1 py-3">0300-1565651</h3>
                                </div>
                            </div>
                                
                            <h5>Basic Detail</h5>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 my-2">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="fname" class="form-control" value="{{Auth::user()->name}}" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="firstname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" value="{{Auth::user()->name}}"   placeholder="First Name" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}"  placeholder="email@example.com" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Phone Number</label>
                                    <input type="number" name="phoneno" class="form-control"  value="{{Auth::user()->phoneno}}"  placeholder="92313587420" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Address 1</label>
                                    <input type="text" name="address1" class="form-control"  value="{{Auth::user()->address1}}"  placeholder="Enter Address 1" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Address 2</label>
                                    <input type="text" name="address2" class="form-control" value="{{Auth::user()->address2}}"   placeholder="Enter Address 2" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">City</label>
                                    <input type="text" name="city" class="form-control" value="{{Auth::user()->city}}"   placeholder="Islamabad" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">State</label>
                                    <input type="text" name="state" class="form-control"  value="{{Auth::user()->state}}"  placeholder="Punjab" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Country</label>
                                    <input type="text" name="country" class="form-control" value="{{Auth::user()->country}}"   placeholder="Pakistan" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Zip Code</label>
                                    <input type="number" name="pincode" class="form-control" value="{{Auth::user()->pincode}}"   placeholder="Punjab" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email">Transaction Proof</label>
                                    <input type="file" name="image"  class="form-control border border-dark" >
                                 </div>
                                 <div class="row">
                                <div class="col-md-12 mb-3">
                                        <select class="border border-dark p-2 " name="size_id">
                                            <option value="">Select Size</option>
                                                @foreach ($sizes as $item )
                                                    <option value="{{$item->id}}">{{$item->size}}</option>
                                                @endforeach
                                        </select>
                                        
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border-0 ">
                        <div class="card-body">
                            <h5>Order Detail</h5>
                            <hr>
                            <table class="table table-stripped">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    @foreach ($cartitem as $item)
                                        <tr>
                                            <td>{{$item->products->name}}</td>
                                            <td>{{$item->prod_qty}}</td>
                                            <td>{{$item->products->selling_price}}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        <hr>
                        <button type="submit" class="btn btn-outline-primary float-end">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('css')
<style>

.checkout-form input
{

    font-size: 1rem;
    padding: 10px;
    font-weight: 400;
}

.checkout-form label
{
    font-size: .9rem;
    font-weight: 700;
}

</style>
@endsection