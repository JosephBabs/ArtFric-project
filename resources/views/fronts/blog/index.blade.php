@extends('frontLayouts.index')

@section('main')
    <main role="main">

        <section>
            <div style="background: url(../assets/img/gb2.webp)" class="page-holder bg-cover">

                <div class="container py-5">
                    <br>
                    <br>
                    <header class="text-center text-white py-5">
                        <h1 class="display-4 font-weight-bold mb-4 text-white" style="text-shadow: 3px 4px #0707078F;">The African history Arts of
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

            <div class="text-center mx-auto article-header  blur blur-rounded shadow py-2 start-0 end-0 mx4"
                style="margin-top: -30px; margin-bottom:10px;">

                <div class="pb-3">
                    <div class="article-info pb-4">

                        <span class="category-name">
                            <a href="/" itemprop="genre">Home</a> </span>
                        <span class="px-2"> / </span>

                        <span class="createdby" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                            <a href="#" itemprop="url"><span itemprop="name">Blog</span></a> </span>
                        <span class="px-2"></span>

                    </div>
                </div>


            </div>

            <div class="section row m-4">
                @foreach ($articles as $article)
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4" style="padding: 10px;">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->title }}">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-white bg-opacity-10 bg-blur text-dark fw-bold rounded-circle"
                                            title=" rating"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3 p-3" >
                            <h4 class="card-title"><a href="{{ route('single_post', $article->id) }}"
                                    class="btn-link text-reset stretched-link fw-bold">{{ $article->title }}</a></h4>

                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item" style="margin: 5px;"></li>
                                
                                <li class="nav-item">
                                    <a href="{{ route('single_post', $article->id) }}" class=" btn btn-primary text-white">View post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
