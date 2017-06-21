@extends('layouts.admin')

@section('section')
    <h1 class="text-primary">Media</h1>
    @if($photo)
     <table class="table table-striped">
         <thead>
           <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Created</th>
           </tr>
         </thead>
         <tbody>
         @foreach($photo as $photos)
           <tr>
             <td>{{$photos->id}}</td>
             <td><img height="90" src="{{asset($photos->file)}}"></td>
             <td>{{$photos->created_at}}</td>
               <td>
                   {!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy', $photos->id]]) !!}
                   {!! Form::submit('Delete Picture',['class'=>'btn btn-danger pull-right']) !!}
                   {!! Form::close() !!}



               </td>
           </tr>
             @endforeach
         @endif
         </tbody>
       </table>
@endsection



