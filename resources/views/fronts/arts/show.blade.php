@extends('frontLayouts.index')

@section('main')
<main role="main">

    <div class="container-fluid py-4">
        <div>
            <div class="container-fluid">
                <div class="page-header min-height-400 border-radius-xl mt-3"
                    style="background-image: url('{{ asset('/arts_images/' . $art->artPath) }}'); background-position-y: 50%;">
                    <span class="mask bg-gradient-primary opacity-3"></span>
                </div>

                <div class="card card-body blur shadow-blur mx-2 mt-n6">
                    <div class="row gx-4">
                        
                        <div class="col-auto">
                            
                        </div>

                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1">
                                    {{$art->title}} by {{ $artist->firstname . ' ' . $artist->lastname }} 
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                    <p class="lead mt-4">
                                        {{$art->description}} <br>
                                        Features :  {{$art->features}}
                                            <!-- Add a description of your services. Aliquam at lorem tortor. Nulla eu sapien eu nibh dapibus ornare. Vestibulum posuere rhoncus elementum. Donec mattis luctus nisl non iaculis. Maecenas rhoncus augue nisi, id suscipit arcu luctus varius. -->
                                        </p>
                                   
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid py-4">
                <div class="card">
                    <figure><img src="/arts_images/{{$art->artPath}}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        
    </div>

</main>
@endsection