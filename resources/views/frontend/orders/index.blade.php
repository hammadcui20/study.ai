@extends('layouts.customer')
@section('title')
    My Orders || Mumtaz & Co
@endsection

@section('content')
<div class="py-5">

</div>

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-4">
                <div class="card-head">
                    <h3 class="text_green text-center fw-bold">My Orders</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr class="text_green">
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td> {{$item->tracking_no}} </td>
                                    <td> {{$item->total_price}} </td>
                                    <td> {{$item->status == '0' ? "Pending" : "Completed"}} </td>
                                    <td>
                                        <a href="{{url("view-order/".$item->id)}}" class="btn btn_outline_green px-4">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="py-5"></div>
<div class="py-5"></div>
<div class="py-5"></div>


@endsection
