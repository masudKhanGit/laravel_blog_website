@extends('backend.layouts.master')
@section('title', 'Tag Details')
@section('page_title', 'Tag')
@section('page_sub_title', 'Details')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">Tag Details</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ $tag->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $tag->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $tag->slug }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $tag->status == 1 ? 'Active' : 'InActive' }}</td>
                            </tr>
                            <tr>
                                <th>Order By</th>
                                <td>{{ $tag->order_by }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $tag->created_at->toDayDateTimeString() }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $tag->created_at != $tag->updated_at ? $tag->updated_at->toDayDateTimeString() : 'Not Update'}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('tag.index') }}">
                        <button class="btn btn-info mt-2">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
