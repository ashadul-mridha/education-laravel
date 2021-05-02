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
              <h2 class="card-title">Contact List</h2>
              {{-- <a href="{{route('user.create')}}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle">Add User</i></h4></a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-info">
                <tr>
                  <th id="exam_title">Exam Title</th>
                  <th id="exam_start_date">Start Date</th>
                  <th id="exam_start_time">Start Time</th>
                  <th id="exam_end_time">End Time</th>
                  <th id="exam_description">Exam Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  {{-- @foreach($exams as $row)
                <tr>

                  <td>{{$row->exam_title}}
                  </td>
                  <td>{{$row->exam_start_date}}</td>
                  <td> {{$row->exam_start_time}}</td>
                  <td> {{$row->exam_end_time}}</td>
                  <td> {{$row->exam_description}}</td>
                  <td>
                    <a href="{{ route('exam.edit',$row->id)}}" class="btn btn-sm btn-warning" href=""><i class="far fa-edit"></i>Edit</a>
                    <a href="{{ route('exam.delete', $row->id)}}" class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i>Delete</a>
                  </td>
                </tr>
                @endforeach --}}
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    // function getrecodes(){

        // $.get("/contact/view").success(function(data){
        //     console.log(data)
        // })

        $.ajax({
        type: "GET",
        url: "/contact/view",
        success: function (data) { 
            console.log(data)

    }
});
    // }

    // getrecodes();
    </script>

@endsection