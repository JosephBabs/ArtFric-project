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
                    <h1 itemprop="headline" class="article-blog-titre text-center mx-auto w-100">
                        Explore our different artworks<!--</>-->
                    </h1>

                    <div class="pb-3">


                        <div class="article-info pb-4">

                            <!--
                                    <dt class="article-info-term invisible">
                                                          Détails					</dt>-->

                            <span class="category-name">
                                <a href="#all" itemprop="genre">All</a> </span>
                            <span class="px-2">-</span>
                            @foreach ($categories as $categorie)
                                <span class="createdby" itemprop="author" itemscope=""
                                    itemtype="https://schema.org/Person">
                                    <a href="#{{ $categorie->name }}" itemprop="url"><span
                                            itemprop="name">{{ $categorie->name }}</span></a> </span>
                                <span class="px-2">-</span>
                            @endforeach
                        </div>
                    </div>


                </div>


                <div class="row">

                    @foreach ($arts as $art)
                        @foreach ($artists as $artist)
                            @if ($art->artist_id == $artist->id)
                                @php
                                    $artist_name = $artist->firstname . ' ' . $artist->lastname;
                                @endphp
                            @endif
                        @endforeach
                        <div class="card mb-3" style="max-width: 540px; margin:05px;">
                            <div
                                class="row no-gutters 
                        @foreach ($categories as $categorie) 
                              @if ($art->categorie_id == $categorie->id)
                           
                             {{ $categorie->name }}
                            
                        @endif @endforeach">
                                <div class="col-md-4">
                                    <img src="{{ asset('/arts_images/' . $art->artPath) }}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span
                                            class="badge @if ($art->status == 1) btn-danger @elseif($art->status == 0)  btn-success @endif">
                                            @if ($art->status == 1)
                                                Sold
                                            @elseif($art->status == 0)
                                                Available
                                            @endif
                                        </span>
                                        <h5 class="card-title">{{ $art->title }}</h5>
                                        <p class="card-text">by <a
                                                href="{{ route('artist.show', $art->artist_id) }}">{{ $artist_name }}</a>
                                        </p>
                                        <p class="card-text"><a href="#" class="btn btn-primary">View</a></p>
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
