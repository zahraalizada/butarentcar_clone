@extends('back.layouts.master')
@section('title', 'Privacy Policy')
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
            <h3> Update Title & Description</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.privacypolicy.update',$item->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" name="title" id="title" type="text" placeholder="Title" value="{{$item->title}}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" id="description" name="description">{{$item->description}}</textarea>
                    </div>
                </div>

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
