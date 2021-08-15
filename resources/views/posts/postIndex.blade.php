@extends('layout.app') 
{{-- <link href="../css/app3.css" rel="stylesheet"> --}}

@section('content')
    {{-- <div class="container"> --}}
    <div class="container" style="margin-top:10px ; padding-bottom:10px; ">
    <h1 style="padding-bottom:10px;" class="font-weight-bold">Our Classes</h1>
    
    @if(count($post) > 0)
        @foreach($post as $p)
            <div class="card" style="margin-bottom:5px; background-color:lightgrey; padding-bottom:0px">
              {{-- <div class="card" > --}}
                <div class="card-body" >
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%; height:90%" src="/storage/cover_images/{{$p->cover_image}}">
                        </div>
                            
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$p->id}}">{{$p->title}}</h3></a>
                            <p>Written on {{$p->created_at}} by {{$p->user->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$post->links()}}
    @else
        <p>No classes found</p>
    @endif

    </div>
@endsection