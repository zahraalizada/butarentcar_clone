@extends('back.layouts.master')
@section('title', 'Settings')
@section('content')

    <div class="card">
        <div class="card-header d-flex flex-between-center">
            <h3>Settings</h3>

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
                            <th class="sort" data-sort="name">Phone</th>
                            <th class="sort" data-sort="name">Email</th>
                            <th class="sort" data-sort="name">Address</th>
                            <th class="sort" data-sort="name">Hours</th>
                            <th class="sort" data-sort="name">Copyright</th>
                            <th class="sort" data-sort="name">Cover title</th>
                            <th class="sort" data-sort="name">Cover description</th>
                            <th class="text-end" scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->hours}}</td>
                                <td>{{$item->copyright}}</td>
                                <td>{{$item->cover_title}}</td>
                                <td>{{$item->cover_description}}</td>
                                <td class="text-end">
                                        <a href="{{route('admin.settings.edit',['setting'=>$item->id,'locale'=>app()->getLocale()])}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit">
                                            <span class="text-500 fas fa-edit"></span>
                                        </a>
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

