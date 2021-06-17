@php
    $sl=1;
@endphp
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

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row justify-content-center">

        <h1 class="text-primary">Solution All Questions</h1>
        
        @foreach ($all_question as $exam_ques)

            <div class="col-md-12">
                <h4>{{$sl++}}.  {{    $exam_ques->question_title}}</h4>
            </div>

            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        {{$exam_ques->question_option_1}}
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        {{$exam_ques->question_option_2}}
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        {{$exam_ques->question_option_3}}
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault4">
                    <label class="form-check-label" for="flexRadioDefault4">
                        {{$exam_ques->question_option_4}}
                    </label>
                </div>
            </div> 
            <div class="col-md-12">
                <label class="text-success">Right Answare:  {{$exam_ques->right_answare}}</label>
            </div>
        
    @endforeach
    </div>
    
</div>

@endsection