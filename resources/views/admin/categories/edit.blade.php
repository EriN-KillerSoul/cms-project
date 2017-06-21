@extends('layouts.admin')

@section('section')

    <h1 class="text-primary">All Categories</h1>
    <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i>create post</h1>
        {{--<form method="post" action="/post">--}}
        {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoryController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name','Name :') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{--<input type="text" name="title" placeholder="enter your title">--}}
        {{--<input type="submit" name="submit">--}}
        <div class="form-group">
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="col-sm-6">




    </div>

@endsection