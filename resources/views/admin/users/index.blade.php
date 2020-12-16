@extends('layouts.app')

@section('content')
<div class="container w-100">
    <div class="d-flex">
        
        <h1 class="mx-auto">Users List</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <ul class="nav nav-tabs">
                <li class="nav-item" >
                    <a href="#admin" data-toggle="tab" role="tab" class="nav-link active">Admin</a>
                </li>
                <li class="nav-item">
                  <a href="#author" data-toggle="tab" role="tab" class="nav-link">Author</a>
              </li>
              <li class="nav-item">
                  <a href="#guest" data-toggle="tab" role="tab" class="nav-link">User</a>
              </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="admin">
                    <div class="card">
                        <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Name</th>
                                     <th scope="col">Email</th>
                                     <th scope="col">Roles</th>
                                     <th scope="col">Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($users as $user)
                                
                                 @php
                                    $role=implode(',' , $user->roles()->get()->pluck('name')->toArray()); 
                                 @endphp
                                 @if($role=='admin')   
                                 <tr>
                                     
                                         <th scope="row">{{ $user->id}}</th>
                                         
                                         <td>{{ $user->name}}</td>
                                         <td>{{ $user->email}}</td>
                                         <td>{{ implode(',' , $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                         <td>
                                             @can('edit-users')
                                             <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary mr-2">Edit</button></a>
                                             @endcan
                                             @can('delete-users')
                                              <form action="{{ route('admin.users.destroy', $user)}}" method="POST" class="form-inline d-inline">
                                                 @csrf
                                                 {{ method_field('DELETE')}}
                                                 <td><button type="Submit" class="btn btn-warning">Delete</button></td>
                                             </form>
                                             @endcan
                                         </td>
                                         
                                     </tr>
                                     @endif
                                 @endforeach
                             </tbody>
                        </table>
                       </div>  
                </div>
                <div role="tabpanel" class="tab-pane" id="author">
                    <div class="card">
                        <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Name</th>
                                     <th scope="col">Email</th>
                                     <th scope="col">Roles</th>
                                     <th scope="col">Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($users as $user)
                                
                                 @php
                                    $role=implode(',' , $user->roles()->get()->pluck('name')->toArray()); 
                                 @endphp
                                 @if($role=='author')   
                                 <tr>
                                     
                                         <th scope="row">{{ $user->id}}</th>
                                         
                                         <td>{{ $user->name}}</td>
                                         <td>{{ $user->email}}</td>
                                         <td>{{ implode(',' , $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                         <td>
                                             @can('edit-users')
                                             <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary mr-2">Edit</button></a>
                                             @endcan
                                             @can('delete-users')
                                              <form action="{{ route('admin.users.destroy', $user)}}" method="POST" class="form-inline d-inline">
                                                 @csrf
                                                 {{ method_field('DELETE')}}
                                                 <td><button type="Submit" class="btn btn-warning">Delete</button></td>
                                             </form>
                                             @endcan
                                         </td>
                                         
                                     </tr>
                                     @endif
                                 @endforeach
                             </tbody>
                        </table>
                       </div>  
                </div>
                <div role="tabpanel" class="tab-pane" id="guest">
                    <div class="card">
                        <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Name</th>
                                     <th scope="col">Email</th>
                                     <th scope="col">Roles</th>
                                     <th scope="col">Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($users as $user)
                                
                                 @php
                                    $role=implode(',' , $user->roles()->get()->pluck('name')->toArray()); 
                                 @endphp
                                 @if($role=='user')   
                                 <tr>
                                     
                                         <th scope="row">{{ $user->id}}</th>
                                         
                                         <td>{{ $user->name}}</td>
                                         <td>{{ $user->email}}</td>
                                         <td>{{ implode(',' , $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                         <td>
                                             @can('edit-users')
                                             <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary mr-2">Edit</button></a>
                                             @endcan
                                             @can('delete-users')
                                              <form action="{{ route('admin.users.destroy', $user)}}" method="POST" class="form-inline d-inline">
                                                 @csrf
                                                 {{ method_field('DELETE')}}
                                                 <td><button type="Submit" class="btn btn-warning">Delete</button></td>
                                             </form>
                                             @endcan
                                         </td>
                                         
                                     </tr>
                                     @endif
                                 @endforeach
                             </tbody>
                        </table>
                       </div>  
                </div>
            </div>
           
    </div>
</div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection