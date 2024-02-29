@extends('backLayouts.index')

@section('content')
<!-- START CONTENT -->

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ajouter un Auction<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
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
                        <form action="{{route('auctions.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @METHOD('POST')
                            <div class="col-xl-8 col-lg-8 col-md-9 col-12">


                                <div class="form-group">
                                    <label class="form-label" for="label">Auction title</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="label" value="{{old('label')}}" class="form-control" id="label" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="label">Auction description</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <textarea  name="description" value="{{old('description')}}" class="form-control" id="description" required></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="form-label" for="label">Start date</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input  type="datetime-local" name="start" value="{{old('start')}}" class="form-control" id="start" required></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="form-label" for="label">End date</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="datetime-local"  name="end" value="{{old('end')}}" class="form-control" id="end" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="label">Cover Image</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="file"  name="auctionPath" class="form-control" id="auctionPath" required></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label for="tags">Arts :</label>
                                        <select name="from" id="multiselect" class="form-control" multiple="multiple">
                                            @foreach($arts as $art)
                                            <option value="{{ $art->id }}">{{ $art->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="fa fa-forward"></i></button>
                                        <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="fa fa-chevron-right"></i></button>
                                        <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="fa fa-backward"></i></button>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label for="multiselect_to">Arts affectés</label>
                                        <select name="arts[]" id="multiselect_to" class="form-control" size="8" multiple="multiple">
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</section>
<!-- END CONTENT -->
@endsection