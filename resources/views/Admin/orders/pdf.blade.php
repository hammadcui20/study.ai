{{-- @section('content') --}}
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table  align-middle text-center">
                            <thead>
                                <tr>
                                    <th>Tracking Number</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr>
                                    <td> {{$item['tracking_no']}} </td>
                                    <td> {{$item['total_price']}} </td>
                                    <td> {{$item['status'] == '0' ? "Pending" : "Completed"}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>
{{-- @endsection --}}