@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Question</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-info">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Show the single quiz questions here and let admin to add new questions into it -->

                    <div class="row">
                        <div class="col-md-12">
                            <form class="" action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="quiz_id" value="">
                                <div class="form-group row">
                                    <label for="" class="col-md-2 control-label">Question</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="question_name" value="" placeholder="Add your question" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2 control-label">Options</label>
                                    <div class="col-md-6">
                                        <input type="text" name="option1" class="form-control" value="" placeholder="option 1" required="required"><br>
                                        <input type="text" name="option2" class="form-control" value="" placeholder="option 2" required="required"><br>
                                        <input type="text" name="option3" class="form-control" value="" placeholder="option 3" required="required"><br>
                                        <input type="text" name="option4" class="form-control" value="" placeholder="option 4" required="required"><br>
                                        <input type="text" name="c_answer" class="form-control" value="" placeholder="Correct Answer" required="required">
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" name="button" class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection