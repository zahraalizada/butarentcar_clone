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
            <h3> Show Currency</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" value="{{$item->name}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="value">Value</label>
                    <input class="form-control" name="value" id="value" type="text" placeholder="Value" value="{{$item->value}}" readonly />
                </div>



                <a href="{{route('admin.currency.index')}}" class="btn btn-primary" type="submit">Back</a>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
