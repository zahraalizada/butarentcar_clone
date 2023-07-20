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
                    <label class="form-label" for="logo_img">Logo image</label>
                    <input class="form-control" name="logo_img" id="logo_img" type="text" value="{{$item->logo_img}}" readonly placeholder="Logo image" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" name="phone" id="phone" type="text" value="{{$item->phone}}" readonly placeholder="Phone" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone wp</label>
                    <input class="form-control" name="phone_wp" id="phone_wp" type="text" value="{{$item->phone_wp}}" readonly placeholder="Phone wp" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">email</label>
                    <input class="form-control" name="email" id="email" type="text" value="{{$item->email}}" readonly placeholder="email" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control" name="address" id="address" type="text" value="{{$item->address}}" readonly placeholder="address" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address_map">Address_map</label>
                    <input class="form-control" name="address_map" id="address_map" type="text" value="{{$item->address_map}}" readonly placeholder="address_map" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="hours">Hours</label>
                    <input class="form-control" name="hours" id="hours" type="text" value="{{$item->hours}}" readonly placeholder="Hours" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="copyright">copyright</label>
                    <input class="form-control" name="copyright" id="copyright" type="text" value="{{$item->copyright}}" readonly placeholder="copyright" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_img">cover_img</label>
                    <input class="form-control" name="cover_img" id="cover_img" type="text" value="{{$item->cover_img}}" readonly placeholder="cover_img" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_title">Cover title</label>
                    <input class="form-control" name="cover_title" id="cover_title" type="text" value="{{$item->cover_title}}" readonly placeholder="cover_title" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_description">Cover Description</label>
                    <input class="form-control" name="cover_description" id="cover_description" type="text" value="{{$item->cover_description}}" readonly placeholder="cover_description" />
                </div>

                <a href="{{route('admin.settings.index')}}" class="btn btn-primary" type="submit">Back</a>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
