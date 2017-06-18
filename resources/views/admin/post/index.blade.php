@extends('layouts.admin')
@section('section')

    @if(Session::has('status'))

        <p class="bg-danger">{{session('status')}}</p>

    @endif
        <h1 class="text-primary">Admin Post</h1>
         <table class="table table-striped">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Username</th>
                 <th>Category</th>
                 <th>Post Title</th>
                 <th>Post Content</th>
                 <th>Photo</th>
                 <th>Created</th>
                 <th>Updated</th>
               </tr>
             </thead>
             <tbody>
             @if($post)
                     @foreach($post as $posts)
               <tr>
                 <td>{{$posts->id}}</td>
                 <td><a href="{{route('post.edit', $posts->id)}}">{{$posts->user->name}}</a></td>
                 <td>{{$posts->category ? $posts->category->name : "not have category"}}</td>
                 <td>{{$posts->title}}</td>
                 <td>{{str_limit($posts->body, 5)}}</td>
                 <td><img height="70" src="{{asset($posts->photo ? $posts->photo->file : 'images/2.jpg')}}"></td>
                 <td>{{$posts->created_at->diffForHumans()}}</td>
                 <td>{{$posts->updated_at->diffForHumans()}}</td>
               </tr>
                     @endforeach
             @endif
             </tbody>
           </table>
    @endsection

