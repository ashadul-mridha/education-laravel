@php
    $sl = 1;
@endphp

@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Exam Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            
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
              <h2 class="card-title">All Exam result</h2>
              <a href="{{route('exam_result.create')}}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle">Add Exam Result</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-info">
                <tr>
                    <th id="exam_start_date">Sl No</th>
                    <th id="exam_title">Exam Date</th>
                  <th id="exam_start_date">Exam Title</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($exam as $row)
                <tr>

                  <td> {{$sl++}}</td>
                  <td>{{$row->exam_start_date}}</td>
                  <td>{{$row->exam_title}}</td>
                  <td>
                    <a href="{{ route('exam_result.list',$row->id)}}" class="btn btn-sm btn-primary" href=""><i class="far fa-eye"></i>Show Result</a>
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