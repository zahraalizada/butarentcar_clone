@extends('back.layouts.master')
@section('title', 'Quest & Answer')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> Update Question & Answer</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.questanswer.update',['questanswer'=>$item->id,'locale'=>app()->getLocale(),])}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="question">Question</label>
                    <input class="form-control" name="question" id="question" type="text" placeholder="Name" value="{{$item->question}}" />
                    @error('question')
                    <div><small class="text-danger">{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="answer">Answer</label>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" id="answer" name="answer">{{$item->answer}}</textarea>
                    </div>
                    @error('answer')
                    <div><small class="text-danger">{{ $message }}</small></div>
                    @enderror
                </div>

                <button class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
