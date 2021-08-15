@extends('layout.app') 
<link href="../css/app3.css" rel="stylesheet">
@section('content')
<div class="container" style="margin-top:10px ;">
    <h1  style="padding-bottom:10px;" class="font-weight-bold">EDIT POST</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id],'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{ Form::text('title', $post->title, ['class' => 'form-control','placeholder' => 'Title']) }}
        </div>    
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {!! Form::textarea('body', $post->body , ['class' => 'form-control','placeholder' => 'Body']) !!}
        </div>  
        {{Form::hidden('_method','PUT')}}

        <div class="form-group">
            <p>Enter a video for the course:
            {{{Form::file('video_file')}}}
            </p>
        </div>
        <div class="form-group">
            <p>Enter a cover image for the course:
            {{{Form::file('cover_image')}}}
            </p>
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}
</div>
@endsection