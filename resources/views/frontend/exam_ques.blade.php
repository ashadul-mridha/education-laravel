@extends('frontend.master')

@section('content')
    
<div class="container">
        <div class="row mt-5 ml-2 justify-content-center">
            
            <form action="{{route('next_exam_ques')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $exam_name }} Quiz</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h3>Question {{$num}} of {{$total_question}}</h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h4> {{  $exam_ques->question_title}}</h4>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault1" value="{{$exam_ques->question_option_1}}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{$exam_ques->question_option_1}}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault2" value="{{$exam_ques->question_option_2}}">
                            <label class="form-check-label" for="flexRadioDefault2">
                                {{$exam_ques->question_option_2}}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault3" value="{{$exam_ques->question_option_3}}">
                            <label class="form-check-label" for="flexRadioDefault3">
                                {{$exam_ques->question_option_3}}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answare" id="flexRadioDefault4" value="{{$exam_ques->question_option_4}}">
                            <label class="form-check-label" for="flexRadioDefault4">
                                {{$exam_ques->question_option_4}}
                            </label>
                        </div>
                    </div> 
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Next Question</button>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $exam_ques->id }}">
                <input type="hidden" name="exam_id" value="{{ $exam_ques->exam_id }}">
                <input type="hidden" name="right_answare" value="{{ $exam_ques->right_answare }}">
                <input type="hidden" name="num" value="{{ $num }}">
            </form>
        </div>
</div>

@endsection