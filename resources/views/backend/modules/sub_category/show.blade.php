@extends('backend.layouts.master')
@section('title', 'Sub Category Details')
@section('page_title', 'Sub Category')
@section('page_sub_title', 'Details')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">Sub Category Details</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ $subCategory->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $subCategory->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $subCategory->slug }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $subCategory->category?->name }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $subCategory->status == 1 ? 'Active' : 'InActive' }}</td>
                            </tr>
                            <tr>
                                <th>Order By</th>
                                <td>{{ $subCategory->order_by }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $subCategory->created_at->toDayDateTimeString() }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $subCategory->created_at != $subCategory->updated_at ? $subCategory->updated_at->toDayDateTimeString() : 'Not Update'}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('sub-category.index') }}">
                        <button class="btn btn-info mt-2">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
