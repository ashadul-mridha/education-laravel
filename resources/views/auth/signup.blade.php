@extends('frontend.master')

@section('content')
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-6" style="background-image: url('{{ asset('assets/frontend/images/signup.jpg')}}'); background-attachment: fixed ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: left;">
                {{-- <img src="{{ asset('assets/frontend/images/signup.jpg')}}" width="50%" alt="Privacy Picture"> --}}
            </div>
            <div class="col-md-6">
                <h3 style="color: #FD5F00;" class="text-center">Sign Up Form</h3>

                <form class="pt-3" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
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
                            <button type="submit" class="btn btn-primary btn-lg float-right">Register</button>
                        </div>
                    </div>

                    <input type="hidden" name="role" value="user">
        
        
                </form>
            </div>
        </div>
    </div>
@endsection