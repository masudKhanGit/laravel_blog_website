@extends('backend.layouts.master')
@section('title', 'Category Details')
@section('page_title', 'Category')
@section('page_sub_title', 'Details')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">Category Details</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ $category->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $category->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $category->status == 1 ? 'Active' : 'InActive' }}</td>
                            </tr>
                            <tr>
                                <th>Order By</th>
                                <td>{{ $category->order_by }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $category->created_at->toDayDateTimeString() }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $category->created_at != $category->updated_at ? $category->updated_at->toDayDateTimeString() : 'Not Update'}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('category.index') }}">
                        <button class="btn btn-info mt-2">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
