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
            <h1 class="m-0 text-dark">{{ $exam->exam_title }} Exam Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('all_exam_result.list')}}">All Exam Result</a></li>
            
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
              <h2 class="card-title text-success h1">Exam Result</h2>
              <a href="{{route('exam_result.create')}}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle">Add Exam Result</i></h4></a>
            </div>

            
            <div class="card-header">
              
              <div class="row">
                <div class="col-md-6 ">
                  <h2 class="card-title text-primary">Exam Title : {{ $exam->exam_title }}</h2> <br> <br>
                  <h2 class="card-title text-primary">Exam Date : {{ $exam->exam_start_date }}</h2>
                </div>
  
                <div class="col-md-6">
                  <h2 class="card-title text-primary float-right">Total Mark : 100</h2> <br> <br>
                  <h2 class="card-title text-primary float-right">Highest Mark : {{ $top_mark }}</h2> <br> <br>
                  <h2 class="card-title text-primary float-right">Lowest Mark : {{ $min_mark }}</h2>
                </div> 
              </div>
              
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-info">
                <tr>
                  
                  <th id="exam_start_date">Position</th>
                  <th id="exam_start_date">User Name</th>
                  <th id="exam_start_date">Mark</th>
                  <th id="exam_start_time">Comment</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($exam_result as $row)
                <tr>

                  <td>{{$sl++}}</td>
                  <td>{{$row->user->name}}</td>
                  <td> {{$row->mark}}</td>
                  <td> {{$row->comment}}</td>
                  <td>
                    <a href="{{ route('exam_result.view',$row->exam_slug)}}" class="btn btn-sm btn-primary" href=""><i class="far fa-eye"></i>View</a>
                    <a href="{{ route('exam_result.edit',$row->exam_slug)}}" class="btn btn-sm btn-warning" href=""><i class="far fa-edit"></i>Edit</a>
                    <a href="{{ route('exam_result.delete', $row->exam_slug)}}" class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i>Delete</a>
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