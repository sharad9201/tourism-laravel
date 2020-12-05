@extends('layouts.app')

@section('content')
    
    
    <a href="/welcome" class="btn btn-default">Go Back</a>

    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small> Written on {{$post->created_at}}</small>
    <hr>
    @if (Auth::check())
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    @else
    
    @endif
    
    @endsection