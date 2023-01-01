@extends('backend.auth.layouts.master')
@section('title', 'Reset Password')
@section('content')
    {!! Form::open(['method' => 'post', 'route' => 'password.email']) !!}
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => $errors->has('email') ? 'is-invalid form-control form-control-sm' : 'form-control form-control-sm']) !!}
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="d-grid">
        {!! Form::button('Forgot Password', ['type' => 'submit', 'class' => 'btn btn-info btn-sm mt-2']) !!}
    </div>
    {!! Form::close() !!}
    <div class="mt-2">
        <p>Already Registered? <a href="{{ route('login')  }}">Login Here</a></p>
        <p>Not Registered? <a href="{{ route('register')  }}">Register Here</a></p>
    </div>
@endsection