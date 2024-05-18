


<section class="vh-100 hero_section">
    <div class="container-fluid">
        <div class="row cus_hero" >
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="">
                <h1 class="display-3 fw-bold text_green">MUMTAZ & CO.</h1>
                <hr>
                <p class="fs-5 justify">
                    Building the digital bridge for MUMTAZ & CO – where quality meets convenience, and a world of sanitary, electrical, and hardware essentials awaits your fingertips.
                </p>
                </div>
            </div>
            <div class="col-12">
                <div class="">
                    <div class="input-group hello z-10">
                    <div class="input-group hello">
                        <form class="d-flex bg-transparent w-100" action="{{url('searchProduct')}}" class="form-control" method="POST">
                            @csrf
                            <div class="input-group ">
                                <input name="product_name" required type="search" id="search_product" class="form-control text_green rounded-pill "  placeholder="Search Product Here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn text_green" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row g-3">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card bg-transparent border-0 p-0">
                    <div class="card-body p-0">
                        <div class="">
                        <img src="{{ asset('images/hardware6.png') }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="">
                            <h1 class="text_green fw-bold">Mumtaz & CO</h1>
                            <hr>
                            <p class="justify">Welcome to Mumtaz & CO - where fashion meets elegance, style meets comfort, and quality meets affordability. Techniques, and trends that are essential for creating exceptional clothing, we have built a reputation for excellence in the industry.</p>
                            <ul class="list-unstyled">
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Instant Assistance</li>
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Helpful Service</li>
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Responsive Helpdesk</li>
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Quick Transportation</li>
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Secure Checkout</li>
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Best Quality</li>
                                <li><span><i class="fas fa-check text_green me-2"></i></span> Attentive Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
