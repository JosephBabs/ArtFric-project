@extends('frontLayouts.index')

@section('main')
    <main role="main">

        <section>
            <div style="background: url(../assets/img/gb4.jpg)" class="page-holder bg-cover">

                <div class="container py-5">
                    <br>
                    <br>
                    <header class="text-center text-white py-5">
                        <h1 class="display-4 font-weight-bold mb-4 text-white " style="text-shadow: 3px 4px #0707078F;">The African history Arts of
                            Imagination.</h1>
                        <p class="lead mb-0">Award-winning Designs.</p>
                        <p class="font-italic"> <a href="https://bootstrapious.com" class="text-white">
                                <u></u></a>
                        </p>
                    </header>
                </div>
            </div>
        </section>
        <section class="space-md">


            <!-- portfolio -->
            <div id="portfolio" class="container">
                <div id="portfolio-filters">
                    <!-- Mobile menu button -->
                    <div class="mobile-menu-btn">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>

                    <!-- Your menu items -->
                    {{-- <nav class="menu">
                        <ul id="filters" class="p-0 navbar-nav  justify-content-end">
                            <li><a href="*" class="active">All</a></li>
                            @foreach ($categories as $categorie)
                                <li><a href=".{{ $categorie->name }}">{{ $categorie->name }}</a></li>
                            @endforeach
                        </ul>
                    </nav> --}}
                </div>

                <div class="text-center mx-auto article-header  blur blur-rounded shadow py-2 start-0 end-0 mx4"
                    style="margin-top: -30px; margin-bottom:10px;">

                    <!--< itemprop="headline" class="article-blog-titre text-center mx-auto w-90">-->
                    <h1 itemprop="headline" class="article-blog-titre text-center mx-auto w-100" style="padding: 10px">
                        Explore our artsworks in auctions<!--</>-->
                    </h1>

                </div>


                <div class="row">

                    @foreach ($auctions as $auction)
                       
                        <div class="card mb-3" style="max-width: 540px; margin:05px;">
                            <div
                                class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('/storage/' . $auction->auctionPath) }}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        
                                        <h5 class="card-title">{{ $auction->title }}</h5>
                                        
                                        <p class="card-text"><a href="{{route('auction.show', $auction->id)}}" class="btn btn-primary">View</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- /end:portfolio -->
        </section>
    </main>
    @include('art_request_popup')
@endsection
