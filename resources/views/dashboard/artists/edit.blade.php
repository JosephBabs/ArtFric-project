@extends('backLayouts.index')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Artist informations<small></small></h3>
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
                        <form role="form" action="{{route('artists.update', $artist->id)}}" method="post" enctype="multipart/form-data" id="form-notif">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="id_type">Firstname :</label>
                                    <input type="text" name="firstname" value="{{$artist->firstname}}" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="id_type">Lastname :</label>
                                    <input type="text" name="lastname" value="{{$artist->lastname}}" class="form-control" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="id_type">Phone Number :</label>
                                    <input type="text" name="phoneNumber" value="{{$artist->phoneNumber}}" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="id_type">Email :</label>
                                    <input type="email" name="email" value="{{$artist->email}}" class="form-control" require>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="country-dd">Country:</label>
                                    <select id="country-dd" name="country" class="form-control" require>
                                        <option value="">Select Country</option>
                                        @foreach ($data['countries'] as $dt)

                                        <option value="{{$dt->id}}" @if($dt->id == $artist->country) selected @endif>
                                            {{$dt->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="state-dd">States:</label>
                                    <select id="state-dd" name="state" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="city-dd">Cities:</label>
                                    <select id="city-dd" name="city" class="form-control">
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="birthdate">Birth date:</label>
                                    <input type="date" name="birthdate" value="{{$artist->birthdate}}" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="address">Address :</label>
                                    <input type="text" name="address" value="{{$artist->address}}" class="form-control" require>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="birthdate">Bio:</label>
                                    <textarea name="bio" class="form-control" required>{{$artist->bio}}</textarea>
                                </div>

                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="artPath">Artist's Photo :</label>
                                    <input type="file" accept=".png,.gif,.jpg,.webp,.pdf" id="artistPath" name="artistPath" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="featured">Featured :</label>
                                    <select id="featured" name="featured" required="">
                                        <option value="@php  echo 1; @endphp" @if($artist->featured == 1) selected @endif>Yes</option>
                                        <option value="@php echo 0; @endphp" @if($artist->featured == 0) selected @endif>No</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                </div>

                                <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <button class="btn btn-success pull-right" type="submit">Enregistrer </button>
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

@endsection