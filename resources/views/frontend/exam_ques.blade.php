@php
    $sl = 1;
@endphp

@extends('frontend.master')

@section('content')
    
<div class="container">
    @foreach ($exam_ques as $question)
        <div class="row">
            <div class="col-md-12">
                <h3>{{$sl++ .'.'}} {{  $question->question_title}}</h3>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">{{$question->question_option_1}}</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                    <label class="form-check-label" for="inlineRadio2">{{$question->question_option_2}}</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                    <label class="form-check-label" for="inlineRadio3">{{$question->question_option_3}}</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                    <label class="form-check-label" for="inlineRadio4">{{$question->question_option_4}}</label>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection