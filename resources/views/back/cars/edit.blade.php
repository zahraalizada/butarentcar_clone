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
            <h3> Update Cars</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.cars.update',['car'=>$item->id,'locale'=>app()->getLocale()])}}" method="post">
                @csrf
                @method('PUT')

                <h5>Main Details</h5>
                <div class="mb-3">
                    <label class="form-label" for="brand">Car Brand</label>
                    <input class="form-control" name="brand" id="brand" type="text" placeholder="Car brand"  value="{{$item->brand}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Car Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Car name" value="{{$item->name}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" name="price" id="price" type="text" placeholder="Price" value="{{$item->price}}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="driver_status_id">Driver status </label>
                    <select class="form-select">
                        @foreach($driverstatus as $status)
                            <option value="{{$status->id}}" @if ($status->id == $item->driver_status_id) selected @endif>{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <h5>Extra Details</h5>
                <div class="mb-3">
                    <label class="form-label" for="year">Year</label>
                    <input class="form-control" name="year" id="year" type="text"
                           placeholder="Year" value="year" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="gearbox">Gearbox</label>
                    <input class="form-control" name="gearbox" id="gearbox" type="text"
                           placeholder="Gearbox" value="gear"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="engine">Engine</label>
                    <input class="form-control" name="engine" id="engine" type="text"
                           placeholder="Engine" value="engine"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="freezer">Freezer</label>
                    <input class="form-control" name="freezer" id="freezer" type="text"
                           placeholder="Freezer" value="freezer"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="door">Door</label>
                    <input class="form-control" name="door" id="door" type="text"
                           placeholder="Door" value="door"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="person">Person</label>
                    <input class="form-control" name="person" id="person" type="text"
                           placeholder="Person" value="person"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="seat">Seat</label>
                    <input class="form-control" name="seat" id="seat" type="text"
                           placeholder="Seat"  value="seat"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="baggage">Baggage</label>
                    <input class="form-control" name="baggage" id="baggage" type="text"
                           placeholder="Baggage"  value="baggage"/>
                </div>

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
