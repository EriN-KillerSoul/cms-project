@extends('layouts.admin')

@section('section')

        <h1 class="text-primary">All Categories</h1>
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i>create post</h1>
            {{--<form method="post" action="/post">--}}
             {!! Form::open(['method'=>'POST','action'=>'AdminCategoryController@store','files'=>true]) !!}

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

            @if($category)
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $categories)
                        <tr>
                            <td>{{$categories->id}}</td>
                            <td>{{$categories->name}}</td>
                            <td>{{$categories->created_at->diffForHumans()}}</td>
                            <td>{{$categories->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif


        </div>
    @endsection