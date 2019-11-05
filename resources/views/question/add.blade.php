@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Question</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('store_question') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name." required>
                                    @if ($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Question *</label>
                                    <input type="text" name="question" class="form-control" placeholder="Enter a question.">
                                    @if ($errors->has('question'))
                                        <div class="error">{{ $errors->first('question') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Type</label>
                                    <select class="form-control" name="type">
                                        <option value="1">Type 1</option>
                                        <option value="2">Type 2</option>
                                        <option value="3">Type 3</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <div class="error">{{ $errors->first('type') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <div class="error">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



