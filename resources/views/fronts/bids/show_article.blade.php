@extends('frontLayouts.index')

@section('main')
<main class="blog-post">
    <section>
        <div style="background: url(../assets/img/gb4.jpg)" class="page-holder bg-cover">

            <div class="container py-5">
                <br>
                <br>
                <header class="text-center text-white py-5">
                    <h1 class="display-4 font-weight-bold mb-4 text-white " style="text-shadow: 3px 4px #0707078F;">
                        Bid on {{$art->title}}</h1>
                    <p class="lead mb-0">Award-winning Designs.</p>
                    <p class="font-italic"> <a href="https://bootstrapious.com" class="text-white">
                            <u></u></a>
                    </p>
                </header>
            </div>
        </div>
    </section>
    <div class="text-center mx-auto article-header  blur blur-rounded shadow py-2 start-2 end-2 mx4" style="margin-top: -30px; margin-bottom:0px; margin-right:10px; margin-left:10px;">

        <div class="pb-3">
            <div class="article-info pb-4" style="padding: 10px;">
                <span class="category-name">
                    <a href="/" itemprop="genre">Home</a> </span>
                <span class="px-2">|</span>

                <span class="category-name">
                    <a href="#" itemprop="genre">{{ $art->title }}</time></a> </span>
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
                <h1 class="fw-bolder mb-1">{{ $art->title }}</h1>
                <!-- Post meta content-->
                <!-- Post categories-->
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Author: wqwwqw</a>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Category: sasasa</a>
            </header>
            <!-- Preview image figure-->
            <img class="img-fluid rounded" src="{{ asset('storage/' . $art->artPath) }}" alt="..." style="width: 50%" />
            <!-- Post content-->
            <section class="mb-5">
                <p class="fs-5 mb-4">
                    @php $content = htmlspecialchars_decode($art->description) @endphp
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

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
           
                <div style="font-size:28px; margin-top:0px;line-height:42px; text-transform:uppercase;">{{$auction->title}}</div>
                <div style="margin-top:10px; font-size:20px; line-height:30px; ">{{$auction->description}}</div>
                <!--Aktuelles Gebot-->
                Starting bid: <b> $ {{$verify_bid->biderPrice}}</b> <br clear="all">
               
                    <div style="width:150px; float:left; font-weight:bold;">Estimate</div><b> $ {{$verify_bid->biderPrice}}</b><br clear="all">
               
                <!--Zeit bis Auktionsende-->
                <b>End: </b>{{$auction->end}} <br> (18 days, 03h:23m)
                <br clear="all">
                <!--Maximalgebot-Angabe-->

                <!--Bieten Hinweis-->
                <div class="bieten_hinweis">After entering your maximum bid you will <br>be able to check your entry and you will be <br>provided with further information. Only after a further <br>confirmation your bid will be binding.</div>
                
            
        </div>
        <div class="col-md-5">
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
            <form method="POST" action="{{route('bid.store')}}">
                @csrf
                @method('POST')
                <input type="hidden" name="auction_id" id="auction_id" value="{{$auction->id}}">
                <input type="hidden" name="art_id" id="art_id" value="{{$art->id}}">
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
                    <input name="biderPrice" class="form-control" type="number" step="50" required>
                </div>
                <button id="submit" type="submit" class="btn btn-primary">Bid</button>

            </form>
        </div>
    </div>
</main>
@endsection