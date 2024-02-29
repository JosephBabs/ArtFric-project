@extends('frontLayouts.index')

@section('main')
    <!-- Include jQuery library -->
    <style>
        /* Add your styling for tabs and sections here */
        .tab-content {
            display: none;
        }

        .active-tab {
            display: block;
        }
    </style>
    <main role="main">


        <section>
            <div style="background: url(../assets/img/gb.webp) " class="page-holder bg-cover">
    
                <div class="container py-5">
                    <br>
                    <br>
                    <header class="text-center text-white py-5">
                        <h1 class="display-4 font-weight-bold mb-4 text-white " style="text-shadow: 3px 4px #0707078F;">Welcome To Artfric</h1>
                        <p class="lead mb-0">Explore African Best Artworks</p>
                        <p class="font-italic"> 
                            <a href="https://bootstrapious.com" class="text-white">
                                <u></u></a>
    
    
                        </p>
                        
                    </header>
                </div>
            </div>
        </section>

       
        <section class="space-md">

            <div class="card card-background  card-background-mask-secondary" style="margin-top: -10px">
                <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')">
                </div>
                <div class="card-body row text-start p-3 w-100">
                    <div class=" text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">

                    </div>
                    <div class="row text-center">
                        <div class="col-md-1 icon icon-shape icon-sm bg-white shadow">
                        </div>
                        <div class="col-md-8">
                            <h1>Enjoy african universe</h1>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px; margin-bottom: 10px; padding: 25px;">

                        {{-- tab1 --}}
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <a href="#featured-artworks" onclick="showTab(1)">
                                <div class="card " id="tab1">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold"></p>
                                                    <h5 class="font-weight-bolder mb-0">
                                                        Featured Artwork
                                                        <span class="text-success text-sm font-weight-bolder"></span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                    <i class="fa fa-list text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- tab2 --}}
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <a href="#artists" onclick="showTab(2)">
                                <div class="card" id="tab2">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold"></p>
                                                    <h5 class="font-weight-bolder mb-0">
                                                        Artists
                                                        <span class="text-success text-sm font-weight-bolder"></span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                    <i class="fa fa-brush text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- tab3 --}}
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <a href="#events" onclick="showTab(3)">
                                <div class="card" id="tab3">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold"></p>
                                                    <h5 class="font-weight-bolder mb-0">
                                                        Upcoming Events
                                                        <span class="text-success text-sm font-weight-bolder"></span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                    <i class="fa fa-calendar text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- TAB CONTENTS BEGIN HERE --}}
                    <div class="section card tab-content" id="tabContent1"
                        style="background-color: #f3f2f2; padding: 25px;">
                        <h2 id="featured-artworks">Featured Artworks</h2>
                        <div class="cards-grid">
                            <div class="row mt-3" style="">
                                @php $counter = 0 @endphp

                                @foreach ($arts as $art)
                                    @if ($counter < 8)
                                        <div class="card "
                                            style="width: 17rem; margin: 8px; background-image: url('../assets/img/curved-images/white-curved.jpeg'); background-repeat:no-repeat; background-size:cover ">
                                            {{-- asset('storage/' . $artist->photoPath)  --}}
                                            <img src="{{ asset('storage/' . $art->artPath) }}" alt="{{ $art->title }}"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $art->title }}</h5>
                                                <p class="card-text text-dark">
                                                    {{ Illuminate\Support\Str::limit($art->description, 100) }}</p>
                                                <a href="{{ route('art.show', $art->id) }}" class="btn btn-primary">More
                                                    details</a>
                                            </div>
                                        </div>
                                        @php $counter++ @endphp
                                    @else
                                    @break
                                @endif
                            @endforeach
                            {{-- View All Button --}}
                            <div class="col-12 mt-3">
                                <a href="{{ route('our-arts') }}" class="btn btn-outline-primary">View All</a>
                            </div>
                        </div>

                    </div>
                    <!-- Add more artwork cards as needed -->
                </div>
                <div class="section card tab-content" id="tabContent2"
                    style="background-color: #f3f2f2; padding: 25px;">
                    <h2  id="artists">Featured Artists</h2>



                    <div class="row mt-3" style="">
                        @foreach ($artists as $artist)
                            <div class="card" style="width: 20rem; margin: 3px;">
                                <img src="{{ asset('storage/' . $artist->photoPath) }}" class="card-img-top"
                                alt="{{ $artist->firstname . ' ' . $artist->lastname }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $artist->firstname . ' ' . $artist->lastname }}</h5>
                                    <p class="card-text text-dark">
                                        {{ Illuminate\Support\Str::limit($artist->bio, 100) }}</p>
                                    <a href="{{ route('artist.show', $artist->id) }}" class="btn btn-primary">View
                                        Profile</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Add more artist cards as needed -->
                </div>
                <div class="section card tab-content" id="tabContent3"
                    style="background-color: #f3f2f2; padding: 25px;">
                    <h2 id="events">Upcoming Events</h2>



                    <div class="cards-grid">

                        <div class="row mt-3" style="">
                            @foreach ($events as $event)
                                <div class=" h-100 p-3" style="width: 20rem; margin: 0px;">
                                    <div class="overflow-hidden  shadow position-relative border-radius-lg bg-cover h-100"
                                        style="background-image: url('../assets/img/ivancik.jpg');">
                                        {{-- change url with this asset('storage/' . $event->imagePath)  --}}
                                        <span class="mask bg-gradient-dark"></span>
                                        <div
                                            class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                            <h6
                                                class="text-white card font-weight-vold mb-4 pt-2 p-1 bg-gradient-primary shadow">
                                            </h6>
                                            <h5 class="text-white font-weight-bolder mb-4 pt-2">{{ $event->title }}
                                            </h5>
                                            <p class="text-white">
                                                {{ Illuminate\Support\Str::limit($event->description, 40) }}</p>
                                            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto openPopupBtn"
                                                data-event="{{ $event->id }}" href="javascript:;"
                                                data-toggle="modal" data-target="#bidevent">
                                                Bid
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                    </div>
                    <!-- Add more event cards as needed -->
                </div>
            </div>

        </div>
    </section>
</main>

<div class="modal fade" id="bidevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bid on event</h5>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="store_bid">
                    @csrf
                    <input type="hidden" name="event_id" id="event_id">
                    <div class="form-group">
                        <label for="biderName">Full Name:</label>
                        <input type="text" class="form-control" id="biderName" name="biderName" required>
                    </div>
                    <div class="form-group">
                        <label for="biderEmail">Email:</label>
                        <input type="email" class="form-control" id="biderEmail" name="biderEmail" required>
                    </div>

                    <div class="form-group">
                        <label for="biderPrice">Your Price ($):</label>
                        <input name="biderPrice" class="form-control" type="number" step="1" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="submit" type="submit" class="btn btn-primary">Bid</button>
            </div>
        </div>
    </div>
</div>


<div class="popup-container" hidden id="popupContainer">
    <div class="popup-content">
        <span class="close-btn" id="closePopupBtn">&times;</span>
        <h2>Bid on event</h2>
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
    </div>
</div>


<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize variables
        var currentSlide = 1;

        // Show the first carousel initially
        showSlide(currentSlide);

        // Set interval to switch slides every 2 seconds
        setInterval(function() {
            // Increment currentSlide and reset to 1 if it exceeds the total number of slides
            currentSlide = (currentSlide % 3) + 1;

            // Show the current slide
            showSlide(currentSlide);
        }, 5000);

        // Function to show the specified slide
        function showSlide(slideNumber) {
            // Hide all slides
            var slides = document.querySelectorAll('.carousel');
            slides.forEach(function(slide) {
                slide.classList.remove('active');
            });

            // Show the specified slide
            var currentCarousel = document.getElementById('carousel' + slideNumber);
            if (currentCarousel) {
                currentCarousel.classList.add('active');
            }
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Show the initial tab content
        showTab(1);
    });

    // Function to show the specified tab content and hide others
    function showTab(tabNumber) {
        // Hide all tab contents
        var currentTabContent = document.getElementById('tabContent' + tabNumber);
        var tabContents = document.querySelectorAll('.tab-content');
        var tabbtn = document.getElementById('tab' + tabNumber);

        tabContents.forEach(function(tabContent) {
            tabbtn.classList.add('shadow-none');
            tabContent.classList.remove('active-tab');

        });

        // Show the specified tab content
        if (currentTabContent && tabbtn) {
            currentTabContent.classList.add('active-tab');
            tabbtn.classList.remove('shadow-none');
        } else {
            tabbtn.classList.add('shadow-none');
        }

    }
</script>

@include('art_request_popup')
<hr>
@endsection
