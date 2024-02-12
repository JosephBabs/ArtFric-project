@extends('frontLayouts.index')

@section('main')
    <main role="main">

        <div class="container-fluid py-4">
            <div>
                <div class="container-fluid">
                    <div class="page-header min-height-300 border-radius-xl mt-4"
                        style="background-image: url('../assets/img/gb4.jpg'); background-position-y: 50%;">
                        <span class="mask bg-gradient-primary opacity-6"></span>
                    </div>
                    <div class="card card-body blur shadow-blur mx-4 mt-n6">
                        <div class="row gx-4">
                            <div class="col-auto">
                                <div class="avatar avatar-xl position-relative">
                                    <img src="../assets/img/bruce-mars.jpg" alt="..."
                                        class="w-100 border-radius-lg shadow-sm">
                                    
                                </div>
                            </div>
                            <div class="col-auto my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1">
                                        {{ $artist->firstname . ' ' . $artist->lastname }}
                                    </h5>
                                    <p class="mb-0 font-weight-bold text-sm">
                                        State :{{ $artist->a_state }} | Country :{{ $artist->a_country }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <div class="nav-wrapper position-relative end-0">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid py-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Profile Information</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            
                            <u></u> <br>{{ $artist->bio }}
                            @foreach ($arts as $art)
                                <figure><a href="{{ route('art.show', $art->id) }}"><img
                                            src="/arts_images/{{ $art->artPath }}" alt="" class="img-fluid"></a>
                                </figure>
                            @endforeach

                        </div>
                        <div class="card-footer pb-0 px-3">
                            <p>
                                <strong>State :{{ $artist->a_state }}</strong><br>
                                <!-- <strong>City : {{ $artist->a_city }}</strong><br>
                                <br>Birthdate :{{ $artist->birthdate }} -->
                            </p>
                            <p><strong>Country :{{ $artist->a_country }}</strong>
                                <!-- <br>Address :{{ $artist->address }} -->
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </main>
@endsection
