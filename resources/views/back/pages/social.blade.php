@extends('back.layouts.master')
@section('title', 'Social icons')
@section('content')
    @php
        use Illuminate\Support\Str;
    @endphp


    <div class="card">
        <div class="card-header d-flex flex-between-center">
            <h3>Social icons</h3>

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
                            <th class="sort" data-sort="name">Name</th>
                            <th class="sort" data-sort="name">Link</th>
                            <th class="sort" data-sort="name">Icon</th>
                            <th class="text-end" scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($items as $item)
                            <tr>
                                <td>{{Str::limit($item->name, 100)}}</td>
                                <td>{{Str::limit($item->link, 100)}}</td>
                                <td>{{Str::limit($item->icon, 100)}}</td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="{{route('admin.social.edit',$item->id)}}" class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip"
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

