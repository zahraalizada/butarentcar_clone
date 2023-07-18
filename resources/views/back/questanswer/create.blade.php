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
            <h3> New Question & Answer</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.questanswer.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="question">Question</label>
                    <input class="form-control" name="question" id="question" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="answer">Answer</label>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" id="answer" name="answer"></textarea>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
