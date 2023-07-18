@extends('back.layouts.master')
@section('title', 'Social icons')
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
            <h3> New Social Link</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.social.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="link">Link</label>
                    <input class="form-control" name="link" id="name" type="text" placeholder="Link" />
                    <div class="mt-2"><a class="mt-2" href="https://fontawesome.com/search?o=r&m=free">Click here</a></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="icon">Icon</label>
                    <input class="form-control" name="icon" id="name" type="text" placeholder="Icon" />
                </div>

                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
