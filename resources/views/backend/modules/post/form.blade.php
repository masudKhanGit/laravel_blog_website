{!! Form::label('title', 'Title') !!}
{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Post Title']) !!}
{!! Form::label('slug', 'Slug', ['class' => 'mt-2']) !!}
{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter Post Slug']) !!}
{!! Form::label('status', 'Post Status', ['class' => 'mt-3']) !!}
{!! Form::select('status', [ 1 => 'Active', 0 => 'InActive'], null, ['class' => 'form-select', 'placeholder' => 'Select Category Status']) !!}