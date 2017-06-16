@extends('layouts.admin')

@section('section')

    <h1>Create User</h1>
        {{--<form method="post" action="/post">--}}
         {!! Form::open(['method'=>'POST','action'=>'AdminController@store','files'=>true]) !!}

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
                        {!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                        {!! Form::label('is_active','Status :') !!}
                        {!! Form::select('is_active', array(1=>'Active',0=>'Not Active'), 0, ['class'=>'form-control']) !!}
            </div>
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            {{--<input type="text" name="title" placeholder="enter your title">--}}
            {{--<input type="submit" name="submit">--}}
            <div class="form-group">
            {!! Form::label('photo_id','Upload Your Picture') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            </div>




        {!! Form::close() !!}

   @include('include.error_form')

    @endsection