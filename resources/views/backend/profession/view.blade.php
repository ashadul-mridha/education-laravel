
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
              <li class="breadcrumb-item"><a href="#"></a></li>
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
                    <b> Title: </b> <a class="float-right">{{ $data->title }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Image Path: </b> <a class="float-right">
                      <img src="{{ asset('Public/Profession/Img').'/'.$data->img_path}}" alt="profession Image" width="300px" height="400px">  
                    </a>
                  </li>
                  <li class="list-group-item">
                    <b>Profession Link: </b> <a class="float-right">{{ $data->profession_link }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Start Date: </b> <a class="float-right">{{ $data->start_date }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>End Date: </b> <a class="float-right">{{ $data->end_date }}</a>
                  </li>
                  
                </ul>

                <a href="{{ route('profession.edit',$data->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
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