@extends('back.layouts.master')
@section('title', 'Privacy Policy')
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.privacypolicy.update',['privacypolicy'=>$item->id,'locale'=>app()->getLocale(),])}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" name="title" id="title" type="text" placeholder="Title" value="{{$item->title}}" />
                    @error('title')
                    <div><small class="text-danger">{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" id="description" name="description">{{$item->description}}</textarea>
                    </div>
                    @error('description')
                    <div><small class="text-danger">{{ $message }}</small></div>
                    @enderror
                </div>

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
