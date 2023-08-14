@extends('back.layouts.master')
@section('title', 'Currency')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> Update Setting</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.settings.update',['setting'=>$item->id,'locale'=>app()->getLocale()])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="logo_img">Logo image</label>
                    <input type="file" name="logo_img" class="form-control" value="{{$item->logo_img}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" name="phone" id="phone" type="text" value="{{$item->phone}}" placeholder="Phone" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone wp</label>
                    <input class="form-control" name="phone_wp" id="phone_wp" type="text" value="{{$item->phone_wp}}" placeholder="Phone wp" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">email</label>
                    <input class="form-control" name="email" id="email" type="text" value="{{$item->email}}" placeholder="email" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control" name="address" id="address" type="text" value="{{$item->address}}" placeholder="address" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address_map">Address_map</label>
                    <input class="form-control" name="address_map" id="address_map" type="text" value="{{$item->address_map}}" placeholder="address_map" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="hours">Hours</label>
                    <input class="form-control" name="hours" id="hours" type="text" value="{{$item->hours}}" placeholder="Hours" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="copyright">copyright</label>
                    <input class="form-control" name="copyright" id="copyright" type="text" value="{{$item->copyright}}" placeholder="copyright" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_img">Cover image</label>
                    <input type="file" name="cover_img" class="form-control" value="{{$item->cover_img}}"/>
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label class="form-label" for="cover_img">Cover image</label>--}}
{{--                    <input class="form-control" name="cover_img" id="cover_img" type="text" value="{{$item->cover_img}}" placeholder="cover_img" />--}}
{{--                </div>--}}
                <div class="mb-3">
                    <label class="form-label" for="cover_title">Cover title</label>
                    <input class="form-control" name="cover_title" id="cover_title" type="text" value="{{$item->cover_title}}" placeholder="cover_title" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_description">Cover Description</label>
                    <input class="form-control" name="cover_description" id="cover_description" type="text" value="{{$item->cover_description}}" placeholder="cover_description" />
                </div>

                <button class="btn btn-primary mt-3" type="submit">Update</button>
            </form>


        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
