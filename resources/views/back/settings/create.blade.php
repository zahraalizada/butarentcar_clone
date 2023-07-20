@extends('back.layouts.master')
@section('title', 'Settings')
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
            <h3> New Settings</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.settings.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="logo_img">Logo image</label>
                    <input class="form-control" name="logo_img" id="logo_img" type="text" placeholder="Logo image" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" name="phone" id="phone" type="text" placeholder="Phone" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone wp</label>
                    <input class="form-control" name="phone_wp" id="phone_wp" type="text" placeholder="Phone wp" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">email</label>
                    <input class="form-control" name="email" id="email" type="text" placeholder="email" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control" name="address" id="address" type="text" placeholder="address" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address_map">Address_map</label>
                    <input class="form-control" name="address_map" id="address_map" type="text" placeholder="address_map" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="hours">Hours</label>
                    <input class="form-control" name="hours" id="hours" type="text" placeholder="Hours" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="copyright">copyright</label>
                    <input class="form-control" name="copyright" id="copyright" type="text" placeholder="copyright" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_img">cover_img</label>
                    <input class="form-control" name="cover_img" id="cover_img" type="text" placeholder="cover_img" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_title">Cover title</label>
                    <input class="form-control" name="cover_title" id="cover_title" type="text" placeholder="cover_title" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover_description">Cover Description</label>
                    <input class="form-control" name="cover_description" id="cover_description" type="text" placeholder="cover_description" />
                </div>

                <button class="btn btn-primary mt-3" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
