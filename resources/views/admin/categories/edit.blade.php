@extends('layouts.admin')

@section('section')

    <h1 class="text-primary">All Categories</h1>
    <div class="col-sm-6">
        <h1><i class="fa fa-pencil-square-o"></i>Edit category post</h1>
        {{--<form method="post" action="/post">--}}
        {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoryController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name','Name :') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{--<input type="text" name="title" placeholder="enter your title">--}}
        {{--<input type="submit" name="submit">--}}
        <div class="row">
        <div class="col-xs-2">
            {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    <div class="col-xs-2 pull-right">
        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoryController@destroy', $category->id],]) !!}
        {!! Form::submit('Delete Category',['class'=>'btn btn-danger pull-right']) !!}
        {!! Form::close() !!}
    </div>
    </div>
    </div>


@endsection