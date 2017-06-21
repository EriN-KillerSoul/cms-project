@extends('layouts.admin')

@section('section')

    <h1 class="text-primary">Upload Media</h1>
        {{--<form method="post" action="/post">--}}
        {!! Form::open(['method'=>'POST','action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}
        {!! Form::close() !!}
    @endsection





