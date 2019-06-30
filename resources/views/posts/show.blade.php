@extends('layouts.app')

@section('content')
    <a href='/posts' class='btn btn-primary'>Back</a>
    <h1> {{$post->title}}</h1>  
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        <!--ene $post data -g text shig haruulna 
         { { $post->body } }
        -->
        <!--Harin ingej ogson oor html iig huvirgana  jishee ni:
        
        <p><strong>Thi is Post 4&nbsp;</strong></p>
        text 
        THis is post 4 gej buduuneer l haragdna
        -->
        {!!$post->body!!}
    </div>
    
    <small>Writen on {{$post->created_at}} by {{$post->user['name']}}</small>
    <hr>
    
            
        @if(Auth::user() == $post->user)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        
        {!!Form::open(['action'=>['PostController@destroy', $post->id],'method'=>'POST','class'=>'float-right'])!!}

        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    
    @endif
@endsection