@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add About Us</li>
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
              <h2 class="card-title">Add New User</h2>
              <a href="{{ route('user.view') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All User</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form class="pt-3" action="{{ route('storenew.user') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="name">Enter Your Name:</label>
                            <input class="form-control" type="text" value="{{ old('name')}}" id="name" name="name" placeholder=" Please Enter Your Name:">
                            @error('name')
                                <strong class="text-danger">{{ $message }} </strong>
                            @enderror 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="email">Enter Your Email:</label>
                            <input class="form-control" type="email" id="email" value="{{ old('email')}}" name="email" placeholder=" Please Enter Your Email:">
                            @error('email')
                                <strong class="text-danger">{{ $message }} </strong>
                            @enderror 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="phone">Enter Your Phone Number:</label>
                            <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone')}}" placeholder=" Please Enter Your Phone Number:">
                            @error('phone')
                                <strong class="text-danger">{{ $message }} </strong>
                            @enderror 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="color: #0D1128;" class="h5" for="password">Enter Your Password:</label>
                            <input class="form-control" type="text" id="password" value="{{ old('password')}}" name="password" placeholder=" Please Enter Password:">
                            @error('password')
                                <strong class="text-danger">{{ $message }} </strong>
                            @enderror 
                        </div>
                        <div class="col-md-6">
                            <label style="color: #0D1128;" class="h5" for="conform_password">Conform Your Password:</label>
                            <input class="form-control" type="text" id="conform_password" value="{{ old('conform_password')}}" name="conform_password" placeholder="Conform Your Password:">
                            @error('conform_password')
                                <strong class="text-danger">{{ $message }} </strong>
                            @enderror 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="role">Select User Role:</label>
                            <select name="role" id="role" class="form-control">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="gender">Select Your gender:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="men" value="men" checked>
                                <label class="form-check-label" for="men">
                                  Men
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="women" value="women" >
                                <label class="form-check-label" for="women">
                                  Women
                                </label>
                              </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="image">Upload Your Image:</label>
                            <input class="form-control" type="file" id="image" name="image">
                            @error('image')
                                <strong class="text-danger">{{ $message }} </strong>
                            @enderror 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="color: #0D1128;" class="h5" for="address">Enter Your Address:</label>
                            <input class="form-control" type="text" value="{{ old('address')}}" id="address" name="address" placeholder=" Please Enter Your Address:">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg float-right">Add New User</button>
                        </div>
                    </div>
        
        
                </form>
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

@endsection