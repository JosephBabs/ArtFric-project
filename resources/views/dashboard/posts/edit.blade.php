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
                        <h3 class="card-title">Update a Post<small></small></h3>
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
                        <form role="form" action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data" id="form-notif">
                            @csrf()
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="title">Title :</label>
                                    <input type="text" name="title" class="form-control" value="{{$post->title}}" required>
                                </div>
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="cover">Cover Image :</label>
                                    <input type="file" name="cover" class="form-control" required>
                                </div>


                            </div>
                            <div class="row">
                                <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <label for="content">Contenu :</label>
                                    <textarea name="content" id="content" class="tinymce-editor" required>{!! $post->title !!}</textarea>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <label for="multiselect">Tags :</label>
                                    <select name="from" id="multiselect" class="form-control" multiple="multiple">
                                        <option value=""></option>
                                        @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="fas fa-forward"></i></button>
                                    <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="fas fa-chevron-right"></i></button>
                                    <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="fas fa-chevron-left"></i></button>
                                    <button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="fas fa-backward"></i></button>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <label for="multiselect_to">Selected Tags</label>
                                    <select name="tags[]" id="multiselect_to" class="form-control" size="8" multiple="multiple">
                                      
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="is_published">Make this Post public :</label>
                                    <select name="is_published" class="form-control" required>
                                        <option value=""></option>
                                        @if($post->is_published)
                                        <option value="no">No</option>
                                        <option value="yes" selected>Yes</option>
                                        @else
                                        <option value="no" selected>No</option>
                                        <option value="yes">Yes</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label for="artist_id">Category :</label>
                                    <select name="categorie_id" class="form-control" required>
                                        <option value=""></option>
                                        @foreach($categories as $categorie)

                                        <option value="{{ $categorie->id }}" @if($categorie->id == $post->category_id) {{'selected'}} @endif >{{ $categorie->name }}</option>
                                        @endforeach
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