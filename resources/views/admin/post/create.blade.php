@extends('layouts.admin')

@section('section')

    <h1 class="text-primary">Create Post</h1>

    <div class="row">
        {{--<form method="post" action="/post">--}}
         {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>true]) !!}

            <div class="form-group">
                        {!! Form::label('title','Title :') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Category :') !!}
                {!! Form::select('category_id', [''=>'Choose Category'] + $category, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                        {!! Form::label('body','Body Content :') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Upload Photo') !!}
                {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
            </div>
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            {{--<input type="text" name="title" placeholder="enter your title">--}}
            {{--<input type="submit" name="submit">--}}
        <div class="form-group">
          {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('include.error_form')
    </div>

    @endsection