@php

    $sl = 1;
@endphp
@extends('frontend.master')

@section('content')


  
<div class="container">
    
    <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              
                <div class="row">
                    <div class="col-6">
                        <h5 class=" text-secondary">Exam Title : {{ $exam->exam_title }}</h5> 
                        <h5 class=" text-secondary">Exam Date : {{ $exam->exam_start_date }}</h5>
                    </div>
                    <div class="col-6">
                        <h5 class="text-secondary text-right">Total Mark : 100</h5> 
                        <h5 class="text-secondary text-right">Highest Mark : {{ $top_mark }}</h5> 
                        <h5 class="text-secondary text-right">Lowest Mark : {{ $min_mark }}</h5>
                    </div>
                </div>
              {{-- <div class="row">
                <div class="col-md-6 ">
                  <h2 class="card-title text-primary">Exam Title : {{ $exam->exam_title }}</h2> <br> <br>
                  <h2 class="card-title text-primary">Exam Date : {{ $exam->exam_start_date }}</h2>
                </div>
  
                <div class="col-md-6">
                  <h2 class="card-title text-primary float-right">Total Mark : 100</h2> <br> <br>
                  <h2 class="card-title text-primary float-right">Highest Mark : {{ $top_mark }}</h2> <br> <br>
                  <h2 class="card-title text-primary float-right">Lowest Mark : {{ $min_mark }}</h2>
                </div> 
              </div> --}}
              
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-primary">
                <tr>
                  
                  <th id="exam_start_date">Position</th>
                  <th id="exam_start_date">User Name</th>
                  <th id="exam_start_date">Mark</th>
                  <th id="exam_start_time">Comment</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($exam_result as $row)
                <tr>

                  <td>{{$sl++}}</td>
                  <td>{{$row->user->name}}</td>
                  <td> {{$row->mark}}</td>
                  <td> {{$row->comment}}</td>
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
</div>

    <script>
      $(document).ready(function(){

      })
    </script>

@endsection