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
                <h2 class="card-title text-center text-primary">Previous Questions</h2>
            </div>

            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-primary">
                <tr>
                    <th>Sl No</th>
                    <th>Exam Date</th>
                    <th>Exam Name </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($ques_list as $row )

                  <tr>
                      <th>{{ $sl++}}</th>
                      <th>{{ $row->question_year }}</th>
                      <th>{{ $row->question_title }}</th>
                      <th>
                        <a href="{{ route('previous_questions_details',$row->id) }}" class="btn btn-primary btn-sm">See Details</a>
                      </th>
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