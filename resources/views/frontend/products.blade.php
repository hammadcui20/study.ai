@extends('layouts.customer')
@section('title')
    Category
@endsection
<br>
<br>
<br>
<br>

@section('content')
   <section class="mb-5">
  <div class="container-fluid">
      <div class="row g-3 justify-content-center">
        <div class="col-12">
            <h1 class="text-center mb-3 text-uppercase"><span class="border-bottom">Relevant Products</span></h1>
        </div>
        @foreach ($p_0 as $p0 )
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">

              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('upload/product/'.$p0->image)}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">{{$p0->name}}</h5>
                        <p>{{$p0->small_description}}</p>
                        <a href="{{url(asset('view-product/'.$p0->slug))}}" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
        @endforeach
      </div>
  </div>
</section>

@endsection
