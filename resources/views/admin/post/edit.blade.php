@extends('layouts.admin')

@section('section')


    <h1 class="text-primary">Edit Post</h1>

    <div class="row">
        <div class="col sm-3">

            <img height="300" width="300" src="{{asset($post->photo ? $post->photo->file : 'images/2.jpg')}}" alt="" class="img-responsive img-rounded">


        </div>
        {{--<form method="post" action="/post">--}}
        {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostController@update', $post->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title','Title :') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id','Category :') !!}
            {!! Form::select('category_id', $category, null, ['class'=>'form-control']) !!}
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
        <div class="col-xs-2">
            {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-xs-2 pull-right">
            {!! Form::open(['method'=>'DELETE','action'=>['AdminPostController@destroy', $post->id],]) !!}
            {!! Form::submit('Delete Post',['class'=>'btn btn-danger pull-right']) !!}
            {!! Form::close() !!}
        </div>
    <div class="row">
        @include('include.error_form')
    </div>

@endsection