@extends('backend.layouts.master')
@section('title', 'Create Sub Category Page')
@section('page_title', 'Sub Category')
@section('page_sub_title', 'Create')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">Create Sub Category</h1>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['method' => 'post', 'route' => 'sub-category.store']) !!}
                        @include('backend.modules.sub_category.form')
                        {!! Form::button('Create Sub Category', ['type' => 'submit', 'class' => 'btn btn-outline-success mt-3' ]) !!}
                    {!! Form::close() !!}
                    <a href="{{ route('sub-category.index') }}">
                        <button class="btn btn-info mt-3">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $('#name').on('input', function() {
                const name = $(this).val();
                const slug = name.replaceAll(' ', '-');
                $('#slug').val(slug.toLowerCase());
            })
        </script>
    @endpush
@endsection
