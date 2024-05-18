@extends('layouts.customer')


@section('title')
MUMTAZ & CO
@endsection


@section('content')
<div class="container py-5">
<div class="row align-items-center g-3 my-5">
    <div class="col-12">
        <h1 class="text_green fw-bold text-center mb-4">MUMTAZ & CO Hardware Details</h1>
    </div>
            <div class="col-md-5">
                <div style="width: 400px; height: 400px; overflow: hidden; border-radius: 50%;">
                    <img src="{{asset('images/fhh.jpg')}}" class="w-100 h-100 rounded-circle" alt="">
                </div>

            </div>
            <div class="col-md-7">
                <h2>Mr. Danish Zafar</h2>
                <p>Expertise: <span>Hardware</span></p>
                <p>Phone Number: <a href="tel:+123456789">+123456789</a></p>
                <div class="mb-3">
                    <p>Reviews: <span class="text-warning">★★★★★</span></p>
                    <p>Email: <span class="text-warning">Hardware@gmail.com</span></p>
                    <p>Addresss:</p>
                    <p>Street 17, House #0789 B-17, Islamabad</p>
                </div>
            </div>
            <div class="col-md-12">
                <p class="justify mt-3">
                As a dedicated and skilled Hardware, I take pride in my expertise in handling a wide range of plumbing tasks crucial for the smooth functioning of residential and commercial spaces. With a keen eye for detail and precision, I specialize in the meticulous installation and repair of plumbing systems.

                    In new construction projects, I excel in crafting intricate networks of pipes and fixtures, ensuring optimal water distribution and efficient waste removal. My commitment to quality extends to addressing emergency situations promptly, whether it's fixing leaks, resolving stubborn clogs, or troubleshooting malfunctioning water heaters.
                    <br>
                    Beyond technical proficiency, I am known for effective communication and problem-solving. I collaborate seamlessly with fellow construction professionals, interpret complex blueprints, and offer valuable insights to clients. Upholding safety standards and compliance with building codes is non-negotiable for me, as I prioritize the well-being of occupants in every project.
                    <br>
                    With a customer-centric approach, I aim to not only meet but exceed expectations. Whether it's a residential repair or a large-scale commercial installation, I bring dedication, reliability, and a passion for ensuring the functionality and comfort of the spaces I work on. As a Hardware, I am committed to making a positive impact in the construction industry, one project at a time.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-main my-4">Customer Reviews</h2>
                <!-- Display existing reviews -->
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

        </div>
        <hr>

</div>


@endsection

@section('scripts')
<script>
    $('.message').click(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();


        console.log(name, email, subject, message)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/sendMessage",
            data: {
                'name': name,
                'email': email,
                'subject': subject,
                'message': message,
            },
            success: function(response) {
                if (response.status === "Please Login First...") {

                    swal("Oops...", `${response.status}`, "error");
                } else if (response.status === "Please Verify you Email") {

                    swal("Oops...", `${response.status}`, "error");
                } else if (response.status === undefined) {

                    swal("Oops...", `We are unable to deliver your message`, "info");
                } else if (response.status === 'Kindly Fill Form Correctly') {

                    swal("Oops...", `${response.status}`, "error");
                } else {
                    swal("Done!", `${response.status}`, "success");
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        })
    })
</script>
@endsection
