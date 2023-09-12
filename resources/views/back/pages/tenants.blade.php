@extends('back.layouts.master')
@section('title', 'Tenantss')
@section('content')

    <div class="card">
        <div class="card-header d-flex flex-between-center">
            <h3>Tenants</h3>
            <a href="{{route('admin.tenants.create',['locale'=>app()->getLocale()])}}" class="btn btn-primary btn-sm ">Add new </a>
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

                            <th class="sort" data-sort="name">Fullname</th>
                            <th class="sort" data-sort="name">Email</th>
                            <th class="sort" data-sort="name">Phone</th>
                            <th class="sort" data-sort="name">Reception place</th>
                            <th class="sort" data-sort="name">Reserve date</th>
                            <th class="sort" data-sort="name">Return date</th>
                            <th class="text-end" scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->fullname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->reception_place}}</td>
                                <td>{{$item->reserve_date}}</td>
                                <td>{{$item->return_date}}</td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="{{route('admin.tenants.edit',['tenant'=>$item->id,'locale'=>app()->getLocale()])}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit">
                                            <span class="text-500 fas fa-edit"></span>
                                        </a>
                                        <form action="{{route('admin.tenants.destroy',['tenant'=>$item->id,'locale'=>app()->getLocale()])}}" method="post" type="button" class="btn p-0" onsubmit="return confirm('Delete product?')">
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

