@extends('layouts.admin')
@section('section')
    <h1>User</h1>
     <table class="table table-striped">
         <thead>
           <tr>
               <th>ID</th>
               <th>Profile Photo</th>
               <th>Name</th>
               <th>Email</th>
               <th>Role</th>
               <th>Status</th>
               <th>Created</th>
               <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($users)

             @foreach($users as $user)
           <tr>
               <td>{{$user->id}}</td>
               <td><img height="70" src="{{asset($user->photo ? $user->photo->file : 'images/1.png')}}"/></td>
               <td><a href="{{route('admin.edit', $user->id)}}">{{$user->name}}</a></td>
               <td>{{$user->email}}</td>
               <td>{{$user->role->name}}</td>
               <td>{{$user->is_active == 1 ? 'Active': 'Not Active'}}</td>
               <td>{{$user->created_at->diffForHumans()}}</td>
               <td>{{$user->updated_at->diffForHumans()}}</td>
           </tr>
           @endforeach
             @endif
         </tbody>
       </table>
@endsection