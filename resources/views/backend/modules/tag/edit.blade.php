@extends('backend.layouts.master')
@section('title', 'Update Tag Page')
@section('page_title', 'Tag')
@section('page_sub_title', 'Edit')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">Edit Tag</h1>
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
                    {!! Form::model($tag, ['method' => 'put', 'route' => ['tag.update', $tag->id] ]) !!}
                        @include('backend.modules.tag.form')
                    {!! Form::button('Update Tag', ['type' => 'submit', 'class' => 'btn btn-outline-success mt-3' ]) !!}
                    {!! Form::close() !!}
                    <a href="{{ route('tag.index') }}">
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
