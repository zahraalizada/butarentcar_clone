@extends('back.layouts.master')
@section('title', 'Currency')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> Update Currency</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.carbrand.update',['carbrand'=>$item->id,'locale'=>app()->getLocale()])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" value="{{$item->name}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="icon">Brand Icon</label>
                    <input type="file" name="icon" class="form-control" value="{{$item->icon}}"/>
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label class="form-label" for="name">Icon</label>--}}
{{--                    <input class="form-control" name="icon" id="icon" type="text" placeholder="Icon" value="{{$item->icon}}" />--}}
{{--                </div>--}}
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
