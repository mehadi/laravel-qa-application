@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>{{$question->question}}</b> | {{$question->name}} </div>
                    <div class="card-body">
                        <div class="card-body">
                            <p class="card-text">{{$question->description}}</p>
                            <hr>
                            <h5 class="card-title">Add Answer</h5>
                            <form method="post" action="{{ route('store_answer') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Your Name</label>
                                        <input type="text" name="answer_by" class="form-control" placeholder="Your Name"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Answer</label>
                                    <textarea class="form-control" name="answer"></textarea>
                                </div>

                                <input type="hidden" name="question_id" value="{{$question->id}}">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            @if(count($question->answer)>0)
                                <h5 class="appMargin">Answers</h5>
                                <hr>
                                @foreach($question->answer as $answer)
                                    <div class="row appMargin">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title"><b>Answer by: {{$answer->answer_by}}</b></h6>
                                                    <p class="card-text">Answer: {{$answer->answer}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else

                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



