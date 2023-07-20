@extends('back.layouts.master')
@section('title', 'Car Details')
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
            <h3> Show Car Details</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="img">Image</label>
                    <input class="form-control" name="img" id="img" type="text" placeholder="Image" value="{{$item->img}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="production_year">Production_year</label>
                    <input class="form-control" name="production_year" id="production year" type="text" placeholder="Production year" value="{{$item->production_year}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="gearbox">Gearbox</label>
                    <input class="form-control" name="gearbox" id="gearbox" type="text" placeholder="Gearbox" value="{{$item->gearbox}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="engine_power">Engine power</label>
                    <input class="form-control" name="engine_power" id="engine_power" type="text" placeholder="Engine power" value="{{$item->engine_power}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="climate_status">Climate status</label>
                    <input class="form-control" name="climate_status" id="climate_status" type="text" placeholder="Climate status" value="{{$item->climate_status}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="number_of_doors">Number of doors</label>
                    <input class="form-control" name="number_of_doors" id="number_of_doors" type="text" placeholder="Number of doors" value="{{$item->number_of_doors}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="number_of_seats">Number of seats</label>
                    <input class="form-control" name="number_of_seats" id="number_of_seats" type="text" placeholder="Number of seats" value="{{$item->number_of_seats}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="type_of_seats">Type of seats</label>
                    <input class="form-control" name="type_of_seats" id="type_of_seats" type="text" placeholder="Type of seats" value="{{$item->type_of_seats}}" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="baggage">Baggage</label>
                    <input class="form-control" name="baggage" id="baggage" type="text" placeholder="Baggage" value="{{$item->baggage}}" readonly />
                </div>



                <a href="{{route('admin.cardetails.index')}}" class="btn btn-primary" type="submit">Back</a>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
