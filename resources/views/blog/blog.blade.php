@extends('template')

@section('title')
    Blog Laravel
@stop

@section('content')
    <h1>Blog Laravel</h1><br><br>

    @foreach($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">{{ $post['title'] }}</div>
            <div class="panel-body">{{ $post['content'] }}</div>
            <div class="panel-footer">Postado em {{ $post['postedAt'] }}</div>
        </div>        
    @endforeach
    
@stop