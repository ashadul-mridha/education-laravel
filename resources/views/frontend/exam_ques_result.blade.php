@extends('frontend.master')

@section('content')
    
<div class="container">
    <div class="row my-5">
        <div class="col-md-12">
            <h1 class="text-primary text-center">
                Exam SuccessFull
            </h1>
        </div>
        <div class="col-md-12 text-center">
            <h3 class="text-success">Mark:            {{$result}}</h3>
        </div>
        <div class="col-md-12  text-center">
            <h3 class="text-success">Right Answare::{{$right}}</h3>
        </div>
        <div class="col-md-12 text-center">
            <h3 class="text-danger">Wrong Answare::{{$wrong_ans}}</h3>
        </div>
    </div>
</div>

@endsection