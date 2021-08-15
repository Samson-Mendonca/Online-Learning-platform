@extends('layout.app') 

@section('content')
<div class="container" style="margin-top:10px ;">
    {{-- <a href="/posts" class="btn btn-primary float:right"><< Back</a>  --}}
    <h1 class="font-weight-bold">{{$post->title}}</h1>
    <div>
    <video controls style="margin:2% 10% 2%;width:850px;height:480px"> 
        <source  src="/storage/video_files/{{$post->video_file}}" Type="video/mp4">
    </div>
    <div class="jumbotron">
    <p>Notes:</p>
  
        {!!$post->body!!}
    </div>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!auth::guest())
        @if(auth::user()->id == $post->user->id)    
           <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'POST','class'=>'float-right']) !!}
                
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                
            {!! Form::close() !!}
        @endif
    @endif
</div>
@endsection