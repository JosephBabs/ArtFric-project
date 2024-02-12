@extends('frontLayouts.index')

@section('main')
    <main role="main">

        <section>
            <div style="background: url(../assets/img/gb.webp)" class="page-holder bg-cover">

                <div class="container py-5">
                    <br>
                    <br>
                    <header class="text-center text-white py-5">
                        <h1 class="display-4 font-weight-bold mb-4 text-white " style="text-shadow: 3px 4px #0707078F;">Get in touch with us</h1>
                        <p class="lead mb-0">Artfric</p>
                        <p class="font-italic">
                            <a href="https://bootstrapious.com" class="text-white">
                                <u></u></a>


                        </p>
                        <div class="card blur blur-rounded" style="padding: 10px; text-align:start;">

                            <p class="lead mt-4 text-dark" style="padding: 20px; margin: 3em;"> <strong> Welcome to our art
                                    website's contact page!</strong>
                                <br>
                                We value your feedback, inquiries, and thoughts about our artistic endeavors. Whether you're
                                an art enthusiast, an aspiring artist,
                                or an event organizer seeking collaboration, we're thrilled to hear from you. Our dedicated
                                team is here to assist you with any questions,
                                provide information about upcoming events, or guide you through our curated collection of
                                awe-inspiring artworks. Don't hesitate to drop us a message using the form below.
                                We promise to respond promptly and make your art journey with us a delightful and
                                unforgettable experience.
                                Thank you for being a part of our creative community!
                            </p>
                            <br>



                            <div class="row" style="margin: 1em;">
                                <div class="col-md-3 card text-dark" style="padding: 20px; height: 150px; margin: 1em;">
                                    <p>
                                        <strong>Indiana</strong>
                                        <br>
                                        Indianapolis
                                        <br>
                                        917-735-8844
                                        <br>
                                        2800 Alfred Drive
                                    </p>
                                </div>
                                <div class="col-md-6 pl-lg-5 pl-md-5 card pd-4" style="padding: 20px; margin: 1em">
                                    @if (session('errors'))
                                        <div class="mb-4 font-medium text-sm text-green-600 alert alert-danger">
                                            {{ session('errors') }}
                                        </div>
                                    @endif
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600 alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <h2>
                                        Get in touch with us
                                    </h2>

                                    <div style="display: box; align-content: center; align-items: center; width: 100%;">
                                        <form action="contact_us" method="POST">
                                            @csrf
                                            <div class="contact-form mt-5">
                                                <div class="form-group row">

                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="firstname"
                                                            placeholder="Enter First Name" name="firstname">
                                                    </div>
                                                </div>
                                                <div class="form-group row">

                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="lastname"
                                                            placeholder="Enter Last Name" name="lastname">
                                                    </div>
                                                </div>
                                                <div class="form-group row">

                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Enter email" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">

                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="message" rows="5" id="message" placeholder="Your Message..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit"
                                                            class="btn bg-gradient-info w-100 mt-4 mb-0 font-weight-bold">Submit
                                                            Your
                                                            Message</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end:contact -->
                                </div>
                            </div>

                        </div>

                    </header>

                </div>
            </div>
        </section>



    </main>
    @include('art_request_popup')
@endsection
