@extends('backend.layouts.master')
@section('title', 'Category Page')
@section('page_title', 'Category')
@section('page_sub_title', 'List')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h1 class="mb-0">Category List</h1>
                        <a href="{{ route('category.create') }}">
                            <button class="btn btn-success btn-sm">Add Category</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
{{--                    @if(session()->has('msg'))--}}
{{--                        <div class="alert alert-success">--}}
{{--                            {{ session()->get('message') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Order By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $sl = 1 @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="{{ $category->status == 1 ? 'text-success' : 'text-danger' }}">{{ $category->status == 1 ? 'Active' : 'InActive' }}</td>
                                <td>{{ $category->order_by }}</td>
                                <td>{{ $category->created_at->toDayDateTimeString() }}</td>
                                <td>{{ $category->created_at != $category->updated_at ? $category->updated_at->toDayDateTimeString() : 'Not Update'}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('category.show', $category->id) }}">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('category.edit', $category->id) }}">
                                            <button class="btn btn-warning btn-sm mx-1">
                                                <i class="fa-solid fa-edit"></i>
                                            </button>
                                        </a>
                                        {!! Form::open(['method' => 'delete', 'id' => 'form_'.$category->id, 'route' => ['category.destroy', $category->id] ]) !!}
                                            {!! Form::button('<i class="fa-solid fa-trash"></i>', ['type' => 'button', 'data-id' => $category->id, 'class' => 'btn btn-danger btn-sm delete']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('msg'))
        @push('js')
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: '{{ session('cls') }}',
                    'toast': true,
                    title: '{{ session('msg') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        @endpush
    @endif
    @push('js')
        <script>
            $('.delete').on('click', function () {
                const id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are you sure to delete this category?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(`#form_${id}`).submit();
                    }
                })
            });
        </script>
    @endpush
@endsection
