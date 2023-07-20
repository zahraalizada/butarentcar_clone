@extends('back.layouts.master')
@section('title', 'Currency')
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
            <h3> New Currency</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.currency.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="value">Value</label>
                    <input class="form-control" name="value" id="value" type="text" placeholder="Value" />
                </div>

                <button class="btn btn-primary mt-3" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
