
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
              <li class="breadcrumb-item"><a href="{{ route('setting.list')}}">All Setting</a></li>
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
                    <b>Phone: </b> <a class="float-right">{{ $data->phone }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Email: </b> <a class="float-right">{{ $data->email }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Logo: </b> <a class="float-right">
                    
                      <iframe src="{{ asset('Public/setting/logo').'/'. $data->logo}}" frameborder="0">
                      </iframe>
                    </a>
                  </li>

                  <li class="list-group-item">
                    <b>Favicon: </b> <a class="float-right">
                    
                      <iframe src="{{ asset('Public/setting/Favicon').'/'. $data->favicon}}" frameborder="0">
                      </iframe>
                    </a>
                  </li>
                  
                  <li class="list-group-item">
                    <b> Fb Link: </b> <a class="float-right">{{ $data->fb_link }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Youtube Link: </b> <a class="float-right">{{ $data->youtube_link }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Linkedin Link: </b> <a class="float-right">{{ $data->linkedin_link }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Address: </b> <a class="float-right">{{ $data->address }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Copywright Text: </b> <a class="float-right">{{ $data->copywright_text }}</a>
                  </li>
                  
                </ul>


                

                <a href="{{ route('setting.edit',$data->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
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