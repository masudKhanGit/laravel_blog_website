@extends('backend.auth.layouts.master')
@section('title', 'Reset Password')
@section('content')
    {!! Form::open(['method' => 'post', 'route' => 'password.update']) !!}
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', $request->email, ['class' => $errors->has('email') ? 'is-invalid form-control form-control-sm' : 'form-control form-control-sm']) !!}
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    {!! Form::hidden('token', $request->route('token')) !!}
    {!! Form::label('password', 'Password', ['class' => 'mt-2']) !!}
    {!! Form::password('password', ['class' => $errors->has('password') ? 'is-invalid form-control form-control-sm' : 'form-control form-control-sm']) !!}
    @error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'mt-2']) !!}
    {!! Form::password('password_confirmation', ['class' => $errors->has('password_confirmation') ? 'is-invalid form-control form-control-sm' : 'form-control form-control-sm']) !!}
    @error('password_confirmation')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="d-grid">
        {!! Form::button('Update Password', ['type' => 'submit', 'class' => 'btn btn-info btn-sm mt-2']) !!}
    </div>
    {!! Form::close() !!}
    <div class="mt-2">
        <p>Already Registered? <a href="{{ route('login')  }}">Login Here</a></p>
        <p>Not Registered? <a href="{{ route('register')  }}">Register Here</a></p>
    </div>
@endsection