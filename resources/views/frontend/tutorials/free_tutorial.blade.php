@extends('frontend.master')

@section('content')

<div class="container">
    <div class="row">
            @foreach ($data as $row)
                <div class="col-md-6  pt-5 pb-5 text-center border border-primary" style="background-color: #D9EEE1">
                    <h1 style="font-size: 5rem; font-weight: 600; ">{{ strtoupper($row->topics_type) }}</h1>
                    <br>
                    <a href="{{ route('tutorials_title', $row->topics_slug)}}" class="btn btn-primary pr-3 pl-3">Learn {{ strtoupper($row->topics_type) }}</a>
                </div>
                <hr>
            @endforeach
            
    </div>
</div>

@endsection