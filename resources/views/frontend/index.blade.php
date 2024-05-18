@extends('layouts.customer')


@section('title')
MUMTAZ & CO
@endsection

@section('content')
    @include('layouts.inc.IntroVideo')
    <div class="py-2">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="border border-dark " style="width:20rem; background:black;"></div>
            <h3 class="text_green fw-bold">Helpers of MUMTAZ & CO</h3>
            <div class="border border-dark " style="width:20rem; background:black;"></div>
        </div>
    </div>
<section>
    <div class="py-5">
        <div class="container">
            <div class="row position-relative">
                <div class="col-4">
                    <a  href="{{url('/plumber')}}"  style="border:none;">
                        <div class="card-body zoom postion-relative">
                            <img src="{{asset('images/eee.jpg')}}"  class="w-100  rounded" height="300px"   alt="">
                            <div >
                                <h4 class="text_green fw-bold text-center py-2">Mr. Ali Ahmed</h4>
                                <h6 class="text-center">Plumber</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{url('/electrician')}}"    style="border:none;">
                        <div class="card-body zoom postion-relative">
                            <img src="{{asset('images/fff.jpg')}}"  class="w-100  rounded" height="300px"  alt="">
                            <div >
                                <h4 class="text_green fw-bold text-center py-2">Mr. Waqas Khan</h4>
                                <h6 class="text-center">Electrician</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{url('/hardware')}}"  style="border:none;">
                        <div class="card-body zoom postion-relative">
                            <img src="{{asset('images/fhh.jpg')}}"  class="w-100  rounded" height="300px"  at="">
                            <div >
                                <h4  class="text_green fw-bold text-center py-2">Mr. Danish Zafar</h4>
                                <h6 class="text-center">Hardware</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
<div class="container  d-flex align-items-center justify-content-around">
        <div class="border border-dark " style="width:22rem; background:black;"></div>
        <h3 class="text_green fw-bold">What's Trending </h3>
        <div class="border border-dark " style="width:22rem; background:black;"></div>
    </div>
    <div class="py-5" id="products">
        <div class="container">
            <div class="row d-flex flex-wrap">
                @foreach ($product as $item )
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 my-2">
                             <a  class="link-dark"  href="{{url(asset('view-product/'.$item->slug))}}">
                            <div class="card shadow hello-card rounded">
                                <div class="product_img">
                                <img src="{{asset('upload/product/'.$item->image)}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title text_green">{{$item->name}}</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, nihil...</p>
                                        <span href="#" class=" pe-auto text-danger float-start">RS <s>{{$item->original_price}}</s></span>
                                        <span href="#" class=" pe-auto float-end">RS {{$item->selling_price}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
            </div>
            <div class="row justify-content-center my-4">
                <div class="col-4">
                    <div class="">
                        <a href="#" class="btn btn_green w-100">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
<div class="pt-2 pb-5">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="border border-dark " style="width:20rem; background:black;"></div>
            <h3 class="text_green fw-bold">Reviews of MUMTAZ & CO</h3>
            <div class="border border-dark " style="width:20rem; background:black;"></div>
        </div>
</div>
    <div class="container mb-5">
    <div class="row g-3 pb-5">
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p><strong>Jhone Smith</strong></p>
                                        <p class="text-warning">★★★★★</p>
                                    </div>
                                    <p>Mr. Danish Zafar is a plumbing wizard! He fixed a persistent leak in my bathroom with efficiency and a friendly attitude. Definitely my go-to Hardware from now on!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p><strong>Mike Doe</strong></p>
                                        <p class="text-warning">★★★★★</p>
                                    </div>
                                    <p>Prompt, professional, and reasonably priced - that's Mr. Danish Zafar for you! I had a plumbing emergency, and he came to the rescue. Highly recommend his services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p><strong>Lisa Smith</strong></p>
                                        <p class="text-warning">★★★★★</p>
                                    </div>
                                    <p>Kudos to Mr. Danish Zafar for his exceptional plumbing skills! He not only fixed the issue but also took the time to explain the problem and how to prevent it in the future. Top-notch service!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p><strong>Bilal Raheem</strong></p>
                                        <p class="text-warning">★★★★★</p>
                                    </div>
                                    <p>I recently hired Mr. Danish Zafar for a plumbing upgrade, and I'm extremely satisfied with the results. Professional, courteous, and his attention to detail is unmatched. Highly recommended!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p><strong>Farida Sahil</strong></p>
                                        <p class="text-warning">★★★★★</p>
                                    </div>
                                    <p>If you need a reliable Hardware, look no further than Mr. Danish Zafar. He responded promptly to my call, diagnosed the issue accurately, and had it fixed in no time. I'm impressed!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p><strong>Ahmed Khan</strong></p>
                                        <p class="text-warning">★★★★★</p>
                                    </div>
                                    <p>Mr. Danish Zafar is the best Hardware in town! I've had him fix various plumbing issues in my home, and each time he has exceeded my expectations. Trustworthy and skilled.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

</section>

@endsection



@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            disable:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <script>
        swal("Done!", `${response.status}`, "success");
    </script>
@endsection
@section('css')
  <style>

    .owl-nav
    {
        display: block !important;
    }
    .owl-nav button
    {
        font-size: 2rem !important;
    }

</style>



@endsection


