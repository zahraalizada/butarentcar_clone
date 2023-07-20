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
        <div class="card-header d-flex flex-between-center">
            <h3>Settings</h3>
            <a href="{{route('admin.settings.create')}}" class="btn btn-primary btn-sm ">Add new </a>
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
                            <th class="sort" data-sort="name">Logo image</th>
                            <th class="sort" data-sort="name">Phone</th>
                            <th class="sort" data-sort="name">Phone wp</th>
                            <th class="sort" data-sort="name">Email</th>
                            <th class="sort" data-sort="name">Address</th>
                            <th class="sort" data-sort="name">Address map</th>
                            <th class="sort" data-sort="name">Hours</th>
                            <th class="sort" data-sort="name">Copyright</th>
                            <th class="sort" data-sort="name">Cover image</th>
                            <th class="sort" data-sort="name">Cover title</th>
                            <th class="sort" data-sort="name">Cover description</th>
                            <th class="text-end" scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->logo_img}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->phone_wp}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->address_map}}</td>
                                <td>{{$item->hours}}</td>
                                <td>{{$item->copyright}}</td>
                                <td>{{$item->cover_img}}</td>
                                <td>{{$item->cover_title}}</td>
                                <td>{{$item->cover_description}}</td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="{{route('admin.settings.show',$item->id)}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Show">
                                            <span class="text-500 fas fa-eye"></span>
                                        </a>
                                        <a href="{{route('admin.settings.edit',$item->id)}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit">
                                            <span class="text-500 fas fa-edit"></span>
                                        </a>
                                        <form action="{{route('admin.settings.destroy',$item->id)}}" method="post" type="button" class="btn p-0" onsubmit="return confirm('Delete product?')">
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

