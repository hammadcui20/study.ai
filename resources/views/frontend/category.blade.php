@extends('layouts.customer')
@section('title')
    Category
@endsection

@section('content')
<div class="py-5"></div>
    <div class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Sellers</h2>
                </div>
                <div class="row ">
                    @foreach ($category as $cate )
                        <div class="col-md-4 ">
                            <a href="{{url(asset('view-category/'.$cate->slug))}}">
                                <div class="card-body zoom postion-relative" >
                                    <img src="{{asset('upload/category/'.$cate->image)}}"   class="w-100 lazy rounded" height="200px"  alt="">
                                    <div class="text-light  position-absolute top-50 start-50  translate-middle">
                                        <h4 style="letter-spacing:3px; ">{{$cate->name}}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section class="mb-5">
  <div class="container-fluid">
      <div class="row g-3 justify-content-center">
        <div class="col-12">
            <h1 class="text-center mb-3 text-uppercase"><span class="border-bottom">All sanitary PRODUCT</span></h1>
            <h4 class="text-center mb-3">Most Popular Products</h4>
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
          <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/satinary2.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/satinary3.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/satinary4.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div> -->
          <div class="col-12">
            <div class="mb-3">
            <a href="{{url('view-productsan')}}" class="btn btn_green px-4 w-100">View More</a>
            </div>
          </div>
      </div>
  </div>
</section>
<section class="mb-5">
  <div class="container-fluid">
      <div class="row g-3 justify-content-center">
        <div class="col-12">
            <h1 class="text-center mb-3 text-uppercase"><span class="border-bottom">All electrical PRODUCT</span></h1>
            <h4 class="text-center mb-3">Most Popular Products</h4>
        </div>
        @foreach ($p_1 as $p1 )
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('upload/product/'.$p1->image)}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">{{$p1->name}}</h5>
                        <p>{{$p1->small_description}}</p>
                        <a href="{{url(asset('view-product/'.$p1->slug))}}" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
        @endforeach
          <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/electric2.png')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/electric3.png')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/electric4.png')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div> -->
          <div class="col-12">
            <div class="mb-3">
            <a href="{{url('view-productselec')}}" class="btn btn_green px-4 w-100">View More</a>
            </div>
          </div>
      </div>
  </div>
</section>
<section class="mb-5">
  <div class="container-fluid">
      <div class="row g-3 justify-content-center">
        <div class="col-12">
            <h1 class="text-center mb-3 text-uppercase"><span class="border-bottom">All Hardware PRODUCT</span></h1>
            <h4 class="text-center mb-3">Most Popular Products</h4>
        </div>
        @foreach ($p_2 as $p2 )
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">

              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{asset('upload/product/'.$p2->image)}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">{{$p2->name}}</h5>
                        <p>{{$p2->small_description}}</p>
                        <a href="{{url(asset('view-product/'.$p2->slug))}}" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
        @endforeach
          <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/hardware6.png')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/hardware7.png')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <div class="card shadow">
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('images/hardware8.png')}}" class="img-fluid rounded" alt="">
                    </div>
                        <h5 class="text_green pt-3">Product 1</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, labore....</p>
                        <a href="#" class="btn btn_green px-4 w-100">Read More</a>
                  </div>
              </div>
          </div> -->
          <div class="col-12">
            <div class="mb-3">
            <a href="{{url('view-productshar')}}" class="btn btn_green px-4 w-100">View More</a>
            </div>
          </div>
      </div>
  </div>
</section>

@endsection
