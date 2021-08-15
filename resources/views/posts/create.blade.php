@extends('layout.app') 

@section('content')
<div class="container" style="margin-top:10px;">
    <h1 class="font-weight-bold">CREATE </h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{ Form::text('title', '', ['class' => 'form-control','placeholder' => 'Class title']) }}
        </div>    
        <div class="form-group">
            {{Form::label('body', 'Notes')}}
            {!!  Form::textarea('body', '', ['class' => 'form-control','placeholder' => 'Class content']) !!}
        </div>
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