@extends('back.layouts.master')
@section('title', 'New Car')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3> New Car</h3>

        </div>
        <div class="card-body">
            <form action="{{route('admin.cars.store',['locale'=>app()->getLocale()])}}" method="post" enctype="multipart/form-data">
                @csrf
                <h5>Main Details</h5>
                <div class="mb-3">
                    <label class="form-label" for="brand">Car Brand</label>
                    <input class="form-control" name="brand" id="brand" type="text" placeholder="Car brand"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Car Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Car name"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" name="price" id="price" type="text" placeholder="Price"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="driver_status_id">Driver status </label>
                    <select class="form-select" id="driver_status_id" name="driver_status_id">
                        @foreach($driverstatus as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <h5>Extra Details</h5>
                <div>
                    <div class="mb-3">
                        <label class="form-label" for="img">Car image</label>
                        <input type="file" name="img" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="year">Year</label>
                        <input class="form-control" name="year" id="year" type="text"
                               placeholder="Year"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="gearbox">Gearbox</label>
                        <input class="form-control" name="gearbox" id="gearbox" type="text"
                               placeholder="Gearbox"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="engine">Engine</label>
                        <input class="form-control" name="engine" id="engine" type="text"
                               placeholder="Engine"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="freezer">Freezer</label>
                        <input class="form-control" name="freezer" id="freezer" type="text"
                               placeholder="Freezer"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="door">Door</label>
                        <input class="form-control" name="door" id="door" type="text"
                               placeholder="Door"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="person">Person</label>
                        <input class="form-control" name="person" id="person" type="text"
                               placeholder="Person"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="seat">Seat</label>
                        <input class="form-control" name="seat" id="seat" type="text"
                               placeholder="Seat"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="baggage">Baggage</label>
                        <input class="form-control" name="baggage" id="baggage" type="text"
                               placeholder="Baggage"/>
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
