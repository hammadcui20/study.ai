@extends('layouts.customer')
@section('title')
    My Orders Details || Mumtaz & Co
@endsection

@section('content')
<div class="py-5"></div>
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-4">
                <div class="card-head d-flex justify-content-between">
                    <h3 class="my-2 text_green fw-bold">My Orders Details</h3>
                    <a href="{{url('/')}}" class="btn btn_outline_green px-4 my-2">Back</a>
                </div>
                <div class="card-body px-0">
                    <div class="row g-4 justify-content-end">
                        <div class="col-12">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="my-1">First Name:</label>
                                        <div class="border p-2 ">{{$order->fname}}</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="my-1">Last Name:</label>
                                        <div class="border p-2">{{$order->lname}}</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="my-1">Email:</label>
                                        <div class="border p-2">{{$order->email}}</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="my-1">Contact No:</label>
                                        <div class="border p-2">{{$order->phoneno}}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <label for="" class="my-1">Shipping Address:</label>
                                        <div class="border p-2">
                                                {{$order->address1}}
                                                <br>
                                                {{$order->address2}}
                                                <br>
                                                {{$order->city}}
                                                <br>
                                                {{$order->state}}
                                                <br>
                                                {{$order->country}}
                                                <br>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <label class="my-1" for="">ZIP CODE:</label>
                                        <div class="border p-2">{{$order->pincode}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr class="text_green">
                                        <th>Name</th>
                                        <th>Qunatity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                        <tr >
                                            <td>
                                                @if ($item->products) <!-- Check if $item->products is not null -->
                                                    {{ $item->products->name }}
                                                @else
                                                    Product not available
                                                @endif
                                            </td>

                                            <td> {{$item->qty}} </td>
                                            <td> {{$item->size}} </td>
                                            <td> {{$item->price}} </td>
                                            <td>
                                                @if ($item->products && $item->products->image)
                                                    <img style="width: 100px; height: 100px;" src="{{ asset('upload/product/' . $item->products->image) }}" alt="">
                                                @else
                                                    Image not available
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4 class="px-2 text_green">Grand Total : <span class="float-end fw-bold">RS {{ $order->total_price }} /=</span></h4>
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection

