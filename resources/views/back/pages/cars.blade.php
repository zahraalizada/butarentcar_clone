@extends('back.layouts.master')
@section('title', 'Cars')
@section('content')

    <div class="card">
        <div class="card-header d-flex flex-between-center">
            <h3>Cars</h3>
            <a href="{{route('admin.cars.create')}}" class="btn btn-primary btn-sm ">Add new </a>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif

        <div class="card-body">
            <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                        <tr>
                            <th class="sort" data-sort="name">Car name</th>
                            <th class="sort" data-sort="name">Car logo</th>
                            <th class="sort" data-sort="name">Price</th>
                            <th class="sort" data-sort="name">User fullname</th>
                            <th class="sort" data-sort="name">User email</th>
                            <th class="sort" data-sort="name">User phone</th>
                            <th class="sort" data-sort="name">Place Reception</th>
                            <th class="sort" data-sort="name">Date of addmision</th>
                            <th class="sort" data-sort="name">Date of return</th>
                            <th class="sort" data-sort="name">Driver status id</th>
                            <th class="sort" data-sort="name">Created at</th>
                            <th class="sort" data-sort="name">Updated at</th>
                            <th class="text-end" scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->car_name}}</td>
                                <td>{{$item->car_logo}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->user_fullname}}</td>
                                <td>{{$item->user_email}}</td>
                                <td>{{$item->user_phone}}</td>
                                <td>{{$item->place_reception}}</td>
                                <td>{{$item->date_of_addmision}}</td>
                                <td>{{$item->date_of_return}}</td>
                                <td>{{$item->driver_status_id}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="{{route('admin.cars.show',$item->id)}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Show">
                                            <span class="text-500 fas fa-eye"></span>
                                        </a>
                                        <a href="{{route('admin.cars.edit',$item->id)}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit">
                                            <span class="text-500 fas fa-edit"></span>
                                        </a>
                                        <form action="{{route('admin.cars.destroy',$item->id)}}" method="post" type="button" class="btn p-0" onsubmit="return confirm('Delete product?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn p-0 ms-2" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete">
                                                <span class="text-500 fas fa-trash-alt"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                            data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                            data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                </div>
            </div>
        </div>
    </div>
@endsection

