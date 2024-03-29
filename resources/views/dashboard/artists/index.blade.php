@extends('backLayouts.index')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tableau r&eacute;capitulatif des courriers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover tag_dataTable">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artists as $artist)
                            <tr class="">
                                <td>{{ $artist->firstname }}</td>
                                <td>{{ $artist->lastname }}</td>
                                <td>{{ $artist->phoneNumber }}</td>
                                <td>{{ $artist->email }}</td>
                                
                                <td>
                                    <a href="{{route('artist.show', $artist->id)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title=""><i class="fas fa-eye"></i></a>
                                    <a href="{{route('artists.edit', $artist->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-warning btn-xs"><i class="fas fa-edit "></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
    </div>
</section>
@endsection