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
                    <h2 class="card-title text-center text-primary">My Exam Result</h2>
                </div>

                <div class="card-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-primary">
                    <tr>
                        <th>Sl No</th>
                        <th>Exam Title</th>
                        <th>Mark </th>
                        <th>Exam Date</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($exam_result as $row)
                    <tr>
      
                      <td> {{$sl++}}</td>
                      <td>{{$row->exam->exam_title}}</td>
                      <td>{{$row->mark}}</td>
                      <td>{{$row->exam->exam_start_date}}</td>
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