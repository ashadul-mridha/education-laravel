@extends('frontend.tutorials.tutorials_title')

@section('topic_details')

        @if(Session::has('message'))
            
            <p class="alert alert-danger">{{ Session::get('message') }}</p>
        @endif

    {!! html_entity_decode($data->description) !!}

        
    
@endsection