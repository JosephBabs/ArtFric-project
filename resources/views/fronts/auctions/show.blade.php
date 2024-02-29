@extends('frontLayouts.index')

@section('main')
<main role="main">

    <div class="container-fluid py-4">
        <div>
            <div class="container-fluid">
                <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/gb4.jpg'); background-position-y: 50%;">
                    <span class="mask bg-gradient-primary opacity-6"></span>
                </div>

                <div class="card card-body blur shadow-blur mx-4 mt-n6">
                    <div class="row gx-4">

                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                            </div>
                        </div>

                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1">
                                    {{$auction->title}}
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                <p class="lead mt-4">
                                    Description
                                    <!-- Add a description of your services. Aliquam at lorem tortor. Nulla eu sapien eu nibh dapibus ornare. Vestibulum posuere rhoncus elementum. Donec mattis luctus nisl non iaculis. Maecenas rhoncus augue nisi, id suscipit arcu luctus varius. -->
                                </p>

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid py-4">
                @foreach ($arts as $art)

                <div class="card mb-3" style="max-width: 540px; margin:05px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/storage/' . $art->artPath) }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">

                                <h5 class="card-title">{{ $art->title }}</h5>
                                <a href="/art_bid/{{ $art->id.'/'. $auction->id}}" class="btn btn-primary">Bid</a>

                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</main>
@endsection