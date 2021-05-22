
{{-- @extends('layouts.guest') --}}
@extends('frontend.home')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <h1>logo</h1>
        </div>
        <div class="col-md-8">
            <div style="color: #FC5F00" class="admin_text"><h1 style="color: #FC5F00" >Welcome!</h1></div>
            <div>
                <form method="POST" action="" id="login-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-9">
                            <input id="password" type="password" class="form-control" name="password" placeholder=" Enter Your Password">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email">

                    </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                    </div> --}}

                    <div class="row mt-3 mb-3">
                        <div class="col-md-6">
                            <a href="{{ route('password.request') }}" class="forgot-password" style="color: #FC5F00">
                                {{ __('Forgot Password') }}? </a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn" style="color: #FC5F00; border-color: #FC5F00" type="submit"> Login </button>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>




    <script type="text/javascript">
        $(document).ready(function() {

            $('#login-form').validate({
                rules: {

                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },

                },
                messages: {
                    email: {
                        required: "Email is required",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Password is required",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

    </script>
@endsection
