@extends('tailor.tailor')


@section('content')
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Blogs
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table  align-middle text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                    <tr>
                                        <td> {{$item->tracking_no}} </td>
                                        <td> {{$item->total_price}} </td>
                                        <td> {{$item->status == '0' ? "Pending" : "Completed"}} </td>
                                        <td>    
                                            <a href="{{url("view-orders/".$item->id)}}" class="btn btn-primary">View</a>
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
@endsection