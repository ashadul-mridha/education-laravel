@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> All Topices Details</a></li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
  
<section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Topices Details</h2>
              <a href="{{route('top_de.create')}}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle">Add Topices Details</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-info">
                <tr>
                  <th>Topices Type</th>
                  <th>Topices Title</th>
                  <th>Description</th>
                  <th>File</th>
                  <th>Video Path</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($all_data as $row)
                <tr>

                  <td>{{optional($row->topices_type_name)->topics_type}}</td>
                  <td>{{optional($row->topices)->topices_title}}</td>
                  <td>{!! html_entity_decode($row->description) !!} </td>
                  <td> {{$row->file}}</td>
                  <td> {{$row->video_path}}</td>
                  <td>
                    <a href="{{ route('top_de.view',$row->id)}}" class="btn btn-sm btn-primary" href=""><i class="far fa-eye"></i>View</a>
                    <a href="{{ route('top_de.edit',$row->id)}}" class="btn btn-sm btn-warning" href=""><i class="far fa-edit"></i>Edit</a>
                    <a href="{{ route('top_de.delete', $row->id)}}" class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i>Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
          <!-- /.Left col -->

        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
      $(document).ready(function(){

      })
    </script>

@endsection