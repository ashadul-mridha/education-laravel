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
              <li class="breadcrumb-item"><a href="#">All Setting</a></li>
            
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
              <h2 class="card-title">Setting List</h2>
              <a href="{{route('setting.create')}}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle">Add Setting</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-info">
                <tr>
                  <th>Title</th>
                  <th>Logo</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($all_data as $row)
                <tr>

                  <td>{{$row->title}}</td>
                  <td>
                    <img src="{{ asset('Public/setting/logo').'/'.$row->logo}}" width="80px" height="100px" alt="logo Image">
                  </td>
                  <td> {{$row->phone}}</td>
                  <td> {{$row->email}}</td>
                  <td> {{$row->address}}</td>
                  <td>
                    <a href="{{ route('setting.view',$row->id)}}" class="btn btn-sm btn-primary" href=""><i class="far fa-eye"></i>View</a>
                    <a href="{{ route('setting.edit',$row->id)}}" class="btn btn-sm btn-warning" href=""><i class="far fa-edit"></i>Edit</a>
                    <a href="{{ route('setting.delete', $row->id)}}" class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i>Delete</a>
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