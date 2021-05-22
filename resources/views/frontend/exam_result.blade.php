@php
    $sl = 1;
@endphp

@extends('frontend.master')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
      
              <div class="card">

                <div class="card-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-primary">
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
                        <a href="{{ route('single_exam_result',$row->id)}}" class="btn btn-sm btn-primary" href=""><i class="far fa-eye"></i>Show Result</a>
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
        
        <!-- /.content -->
    </div>

  <script>
    $(document).ready(function(){

    })
  </script>

@endsection