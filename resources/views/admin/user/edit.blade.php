@extends('layouts.admin')

@section('section')

    <h1>Edit User</h1>

    <div class="row">

    <div class="col sm-3">

        <img height="300" width="300" src="{{asset($user->photo ? $user->photo->file : 'images/1.png')}}" alt="" class="img-responsive img-rounded">


    </div>

    {{--<form method="post" action="/post">--}}

    <div class="col-sm-9">
    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminController@update', $user->id],'files'=>true]) !!}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        {{csrf_field()}}
    <div class="form-group">
        {!! Form::label('name','Name :') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password :') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email :') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id','Role :') !!}
        {!! Form::select('role_id',$roles, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status :') !!}
        {!! Form::select('is_active', array(1=>'Active',0=>'Not Active'), null, ['class'=>'form-control']) !!}
    </div>
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{--<input type="text" name="title" placeholder="enter your title">--}}
    {{--<input type="submit" name="submit">--}}
    <div class="form-group">
        {!! Form::label('photo_id','Upload Your Picture') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control'])!!}
    </div>


    <div class="col-xs-2">
        {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
        {!!Form::close()!!}
    </div>
     <div class="col-xs-2 pull-right">
        {!! Form::open(['method'=>'DELETE','action'=>['AdminController@destroy', $user->id],]) !!}
        {!! Form::submit('Delete User',['class'=>'btn btn-danger pull-right']) !!}
        {!! Form::close() !!}
    </div>

            {{--<form method="post" action="/post">--}}
    </div>
    </div>
    <div class="row">
    @include('include.error_form')
    </div>
@endsection