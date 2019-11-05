@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Questions</div>

                    <div class="card-body">
                        @foreach($questions as $question)

                            <div class="row appMargin">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>{{$question->question}}</b></h5>
                                            <h6>Question by: {{$question->name}}</h6>
                                            <p class="card-text">{{substr($question->description, 0, 150)}}</p>
                                            <a href="{{ url("question/view/$question->id") }}" class="btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
