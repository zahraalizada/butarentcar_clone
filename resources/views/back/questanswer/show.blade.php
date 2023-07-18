@extends('back.layouts.master')
@section('title', 'Quest & Answer')
@section('content')
    <div class="card mb-3">
        <div class="card-body text-end">
            <a class="btn btn-primary btn-md" href="#">
                <i class="fas fa-globe me-2"></i> Go Website
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3> Show Question & Answer</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="question">Question</label>
                    <input class="form-control" name="question" id="question" type="text" placeholder="Name" value="{{$item->question}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="answer">Answer</label>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" id="answer" name="answer" readonly>{{$item->answer}}</textarea>
                    </div>
                </div>
                <a href="{{route('admin.questanswer.index')}}" class="btn btn-primary" type="submit">Back</a>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
