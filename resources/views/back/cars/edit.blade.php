@extends('back.layouts.master')
@section('title', 'Cars')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> Update Cars</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.cars.update',['car'=>$item->id,'locale'=>app()->getLocale()])}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')

                <h5>Main Details</h5>
                <div class="mb-3">
                    <label class="form-label" for="brand">Car Brand</label>
                    <select class="form-select" id="brand" name="brand">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" {{ $item->brand == $brand->id ? 'selected' : '' }}>{{$brand->name}}</option>
                        @endforeach
                    </select>


                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Car Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Car name"
                           value="{{$item->name}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" name="price" id="price" type="text" placeholder="Price"
                           value="{{$item->price}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="driver_status_id">Driver status </label>
                    <select class="form-select">
                        @foreach($driverstatus as $status)
                            <option value="{{$status->id}}"
                                    @if ($status->id == $item->driver_status_id) selected @endif>{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <h5>Extra Details</h5>
                <div class="mb-3">
                    <label class="form-label" for="img">Car image</label> <br>
                    <div class="car-image-box">
                        <img src="{{$item->carDetail->img}}" >
                    </div>
                    <input type="file" name="img" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="year">Year</label>
                    <input class="form-control" name="year" id="year" type="text"
                           placeholder="Year" value="{{$item->carDetail->year}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="gearbox">Gearbox</label>
                    <input class="form-control" name="gearbox" id="gearbox" type="text"
                           placeholder="Gearbox" value="{{$item->carDetail->gearbox}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="engine">Engine</label>
                    <input class="form-control" name="engine" id="engine" type="text"
                           placeholder="Engine" value="{{$item->carDetail->engine}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="freezer">Freezer</label>
                    <input class="form-control" name="freezer" id="freezer" type="text"
                           placeholder="Freezer" value="{{$item->carDetail->freezer}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="door">Door</label>
                    <input class="form-control" name="door" id="door" type="text"
                           placeholder="Door" value="{{$item->carDetail->door}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="person">Person</label>
                    <input class="form-control" name="person" id="person" type="text"
                           placeholder="Person" value="{{$item->carDetail->person}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="seat">Seat</label>
                    <input class="form-control" name="seat" id="seat" type="text"
                           placeholder="Seat" value="{{$item->carDetail->seat}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="baggage">Baggage</label>
                    <input class="form-control" name="baggage" id="baggage" type="text"
                           placeholder="Baggage" value="{{$item->carDetail->baggage}}"/>
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
