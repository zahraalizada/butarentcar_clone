@extends('back.layouts.master')
@section('title', 'New Car Brand')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> New Car Brand</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.carbrands.store',['locale'=>app()->getLocale()])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="icon">Brand Icon</label>
                    <input type="file" name="icon" class="form-control" />
                </div>


                <button class="btn btn-primary mt-3" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
