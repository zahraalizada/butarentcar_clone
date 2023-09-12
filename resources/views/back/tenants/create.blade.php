@extends('back.layouts.master')
@section('title', 'Tenants')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3> New Tenants</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.tenants.store',['locale'=>app()->getLocale()])}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="car_name">Full Name</label>
                    <input class="form-control" name="fullname" id="fullname" type="text" placeholder="Fullname" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" name="email" id="email" type="text" placeholder="Email" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" name="phone" id="phone" type="text" placeholder="Phone" />
                </div>


                <div class="mb-3">
                    <label class="form-label" for="reception_place">Reception place</label>
                    <select class="form-select" aria-label="Default select example" name="reception_place">
                        <option value="Icare menteqesi ">Icare menteqesi </option>
                        <option value="Heyder Aliyev Beynelxalq Airportu">Heyder Aliyev Beynelxalq Airportu</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="reserve_date">Reserve date</label>
                    <input class="form-control" name="reserve_date" id="reserve_date" type="text" placeholder="Reserve date" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="return_date">Return date</label>
                    <input class="form-control" name="return_date" id="return_date" type="text" placeholder="Return date" />
                </div>

                <button class="btn btn-primary mt-3" type="submit">Add</button>
            </form>
        </div>
    </div>



@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
