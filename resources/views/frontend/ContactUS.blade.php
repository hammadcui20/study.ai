@extends('layouts.customer')


@section('title')
MUMTAZ & CO
@endsection


@section('content')

<div class="py-5"></div>
<div class="container">
    <h1 class="text_green fw-bold text-center">Contact US to MUMTAZ & CO</h1>
    <div class="row g-3 mt-3">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <h3 class="text_green fw-bold mb-3">Contact Information</h3>
                        <p><strong>Address:</strong> [Your Physical Address]</p>
                        <p><strong>Address:</strong> [Your Physical Address]</p>
                        <p><strong>Address:</strong> [Your Physical Address]</p>
                        <p><strong>Phone:</strong> [Your Contact Number]</p>
                        <p><strong>Email:</strong> <a href="mailto:[Your Email Address]">[Your Email Address]</a></p>
                        <h3 class="text_green fw-bold mb-3">Business Hours</h3>
                        <p><strong>Monday - Friday:</strong> [Opening Time - Closing Time]</p>
                        <p><strong>Saturday:</strong> [Opening Time - Closing Time]</p>
                        <p><strong>Sunday:</strong> [Opening Time - Closing Time]</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <div class="">
                        <h3 class="text_green fw-bold mb-3">Get In Touch</h3>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form id="contact-form" name="contact-form">
                            @csrf
                            <!--Grid row-->
                            <div class="row g-3">

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" value="" name="name" required class="form-control">
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" value="" name="email" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" value="" name="subject" required class="form-control">
                                    </div>
                                </div>
                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" value="" name="message" required rows="2" class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="text-center text-md-left">
                                        <button class="message btn btn_green w-100" type="button">SEND MESSAGE</button>
                                    </div>
                                    <!-- <div class="status"></div> -->
                                </div>
                            </div>
                            <!--Grid row-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5">
        <h3 class="text_green fw-bold">Visit Our Store</h3>
        <p>For a more personalized experience, visit our store at [Your Store Address]. Our knowledgeable staff is ready to help you find the perfect solutions for your needs.</p>

        <h3 class="text_green fw-bold">Connect With Us</h3>
        <p>Stay connected and follow us on social media for the latest updates, promotions, and more:</p>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
        </ul>
    </div>
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
