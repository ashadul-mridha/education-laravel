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
              <li class="breadcrumb-item active">Edit Setting</li>
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
              <h2 class="card-title"> Edit Setting</h2>
              <a href="{{ route('setting.list') }}"><h4 class="btn btn-sm btn-success float-right"><i class="fa fa-list">All Setting List</i></h4></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{ route('setting.update')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="logo">Logo</label>
                        <img src="{{ asset('Public/setting/logo').'/'. $data->logo}}" height="300px" width="300px" alt="Logo">
                        <br>
                        <label class="text-info" for="logo">Update Logo</label>
                        <input type="file" class="form-control" name="logo">
                        <br>
                    </div>
                    @error('logo')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror  
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="favicon">Favicon</label>
                        <img src="{{ asset('Public/setting/Favicon').'/'. $data->favicon}}" alt="Favicon">
                        <br>
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
                        <input type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Enter Your Title">
                    </div>
                    @error('title')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $data->phone }}" placeholder="Enter Your Phone">
                    </div>
                    @error('phone')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="Enter Your Email">
                    </div>
                    @error('email')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="fb_link">Fb Link</label>
                        <input type="text" class="form-control" name="fb_link" value="{{ $data->fb_link }}" placeholder="Enter Your Fb Link:">
                    </div>
                    @error('fb_link')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="youtube_link">youtube Link</label>
                        <input type="text" class="form-control" name="youtube_link" value="{{ $data->youtube_link }}" placeholder="Enter Your Youtube Link">
                    </div>
                    @error('youtube_link')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="linkedin_link">Linkedin Link</label>
                        <input type="text" class="form-control" name="linkedin_link" value="{{ $data->linkedin_link  }}" placeholder="Enter Your Linkedin Link">
                    </div>
                    @error('linkedin_link')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
            </br>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-info" for="address">Adress</label>
                        <input type="text" class="form-control" name="address" value="{{ $data->address }}" placeholder="Enter Your Address:">
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
                                {{ $data->copywright_text }}
                        </textarea>
                    </div>
                    @error('copywright_text')
                    <strong class="text-danger">{{ $message }} </strong>
                    @enderror 
                </div>
                
                <input type="hidden" name="updated_by" value="{{ Auth::id() }}">
                <input type="hidden" name="id" value="{{ $data->id }}">
             
            <!-- /.card-body -->
            <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-primary">Update</button>
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