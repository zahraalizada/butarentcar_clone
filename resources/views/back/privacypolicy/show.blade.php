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
            <h3> Show Title & Description</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" name="title" id="title" type="text" placeholder="Title" value="{{$item->title}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <div class="min-vh-50">
                        <textarea class="tinymce d-none" id="description" name="description" readonly>{{$item->description}}</textarea>
                    </div>
                </div>
                <a href="{{route('admin.privacypolicy.index')}}" class="btn btn-primary" type="submit">Back</a>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
