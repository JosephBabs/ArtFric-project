@extends('frontLayouts.index')

@section('main')
    <main class="blog-post">
        <section>
            <div style="background: url(../assets/img/gb2.webp)" class="page-holder bg-cover">

                <div class="container py-5">
                    <br>
                    <br>
                    <header class="text-center text-white py-5">
                        <h1 class="display-4 font-weight-bold mb-4 text-white " style="text-shadow: 3px 4px #0707078F;">
                            BLOG POST</h1>
                        <p class="lead mb-0">Award-winning Designs.</p>
                        <p class="font-italic"> <a href="https://bootstrapious.com" class="text-white">
                                <u></u></a>
                        </p>
                    </header>
                </div>
            </div>
        </section>
        <div class="text-center mx-auto article-header  blur blur-rounded shadow py-2 start-2 end-2 mx4"
            style="margin-top: -30px; margin-bottom:0px; margin-right:10px; margin-left:10px;">

            <div class="pb-3">
                <div class="article-info pb-4" style="padding: 10px;">
                    <span class="category-name">
                        <a href="/" itemprop="genre">Home</a> </span>
                    <span class="px-2">|</span>
                    <span class="category-name">
                        <a href="/blog" itemprop="genre">Blog</a> </span>
                    <span class="px-2">/</span>
                    <span class="category-name">
                        <a href="#" itemprop="genre">{{ $article->title }}</time></a> </span>
                    <span class="px-2"></span>

                </div>
            </div>

        </div>

        <div class="col-lg-11 card m-5" style="padding: 20px; width:100;">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on <time datetime="{{ $article->created_at }}">{{ $article->created_at }}</time></div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Author: {{ $article->name }}</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Category: {{ $article->category }}</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/' . $article->cover) }}" alt="..." style="width: 100%"></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">
                        @php $content = htmlspecialchars_decode($article->content)  @endphp
                <p>{!! $content !!}</p>
                    </p>
                </section>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    
                </div>
            </section>
        </div>
    </main>
@endsection
