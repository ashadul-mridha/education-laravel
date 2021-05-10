@extends('master')

@section('content')


        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Setting</li>
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
              <h2 class="card-title"> Add Setting</h2>
              <a href="{{ route('setting.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Setting List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('setting.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="logo">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    @error('logo')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror  
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="favicon">Favicon</label>
                        <input type="file" class="form-control" name="favicon">
                    </div>
                    @error('favicon')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title')}}" placeholder="Enter Your Title">
                    </div>
                    @error('title')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone')}}" placeholder="Enter Your Phone">
                    </div>
                    @error('phone')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email')}}" placeholder="Enter Your Email">
                    </div>
                    @error('email')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="fb_link">Fb Link</label>
                        <input type="text" class="form-control" name="fb_link" value="{{ old('fb_link')}}" placeholder="Enter Your Fb Link:">
                    </div>
                    @error('fb_link')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="youtube_link">youtube Link</label>
                        <input type="text" class="form-control" name="youtube_link" value="{{ old('youtube_link')}}" placeholder="Enter Your Youtube Link">
                    </div>
                    @error('youtube_link')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="linkedin_link">Linkedin Link</label>
                        <input type="text" class="form-control" name="linkedin_link" value="{{ old('linkedin_link')}}" placeholder="Enter Your Linkedin Link">
                    </div>
                    @error('linkedin_link')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="address">Adress</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address')}}" placeholder="Enter Your Address:">
                    </div>
                    @error('address')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        {{-- use summernote plugin --}}
                        <label for="copywright_text" class="text-info">Copy Wright Text</label>
                        <textarea class="textarea" name="copywright_text" placeholder="Place some text here"
                                  style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{old('copywright_text')}}
                        </textarea>
                    </div>
                    @error('copywright_text')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
                
                <input type="hidden" name="created_by" value="{{ Auth::id() }}">
             
            <!-- /.card-body -->
            <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-primary">Submit</button>
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