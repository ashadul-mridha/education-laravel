
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
              <li class="breadcrumb-item"><a href="{{ route('topices.list',$data->topices_type)}}">{{ $data->topices_data->topics_type }} Topices</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
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
          
          <div class="col-md-6 offset-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                
                <ul class="list-group list-group-unbordered mb-3">
                  

                <li class="list-group-item">
                  <b> Topices Type: </b> <a class="float-right">{{ $data->topices_data->topics_type }}</a>
                </li>

                <li class="list-group-item">
                  <b>Topices Title: </b> <a class="float-right">{{ $data->topices_title }}</a>
                </li>
                <li class="list-group-item">
                  <b>Topices View: </b> <a class="float-right">{{ $data->topices_view }}</a>
                </li>
                
              </ul>

                <a href="{{ route('topices.edit',$data->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

      
            <!-- /.card -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection