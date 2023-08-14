@extends('back.layouts.master')
@section('title', 'Driver Status')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> Update Driver Status</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.driverstatus.update',['driverstatus'=>$item->id,'locale'=>app()->getLocale()])}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" value="{{$item->name}}" />
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
