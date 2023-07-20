@extends('back.layouts.master')
@section('title', 'Cars')
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
            <h3> Show Cars</h3>
        </div>
        <div class="card-body">
            <form>

                <div class="mb-3">
                    <label class="form-label" for="car_name">Car Name</label>
                    <input class="form-control" name="car_name" id="car_name" type="text" placeholder="car_name" value="{{$item->car_name}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="car_logo">Car logo</label>
                    <input class="form-control" name="car_logo" id="car_logo" type="text" placeholder="Car logo" value="{{$item->car_logo}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" name="price" id="price" type="text" placeholder="Price" value="{{$item->price}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="user_fullname">User fullname</label>
                    <input class="form-control" name="user_fullname" id="user_fullname" type="text" placeholder="User fullname" value="{{$item->user_fullname}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="user_email">User email</label>
                    <input class="form-control" name="user_email" id="user_email" type="text" placeholder="User email" value="{{$item->user_email}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="user_phone">User phone</label>
                    <input class="form-control" name="user_phone" id="user_phone" type="text" placeholder="User phone" value="{{$item->user_phone}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Place reception</label>
                    <input class="form-control" name="place_reception" id="place_reception" type="text" placeholder="Place reception" value="{{$item->place_reception}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="date_of_addmision">Date of addmision</label>
                    <input class="form-control" name="date_of_addmision" id="date_of_addmision" type="text" placeholder="Date of addmision" value="{{$item->date_of_addmision}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="date_of_return">Date of return</label>
                    <input class="form-control" name="date_of_return" id="date_of_return" type="text" placeholder="Date of return" value="{{$item->date_of_return}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="driver_status_id">Driver status id</label>
                    <input class="form-control" name="driver_status_id" id="driver_status_id" type="text" placeholder="Driver status id" value="{{$item->driver_status_id}}" readonly />
                </div>


                <a href="{{route('admin.cars.index')}}" class="btn btn-primary" type="submit">Back</a>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
