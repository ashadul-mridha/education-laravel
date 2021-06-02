@extends('frontend.tutorials.full_topices_title')

@section('topic_details')


<div class="row">
    <div class="col-md-12">
        {!! html_entity_decode($data->description) !!}
    </div>
    <div class="col-md-12">
        <iframe src="{{ asset('Public/topics/file').'/'.$data->file}}" frameborder="0"></iframe>
    </div>
    <div class="col-md-12">
        <video src="{{ asset('Public/topics/video_file').'/'.$data->video_path}}"></video>
    </div>
</div>

        
    
@endsection