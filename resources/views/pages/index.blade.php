@extends('layout.app')

@section('content')
    <div class="jumbotron banner" id="myDiv">
        <div class="container" id="myContainer">
            <h1 style="color:#ffffff ;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Your Course to Success</h1>
            <p class="wFont">Build skills with experts from courses online </p>
            @if(!auth::guest())
              <button id="bigButton" type="button" class="btn " ><a href="/posts" style="text-decoration: none;">Explore classes</a></button>
            @else
              <button id="bigButton" type="button" class="btn"><a href="/login" style="text-decoration: none;">Join For Free</a></button>
            @endif
    </div>
    </div>
    <div class="jumbotron jumbotron-fuild" >
        <h2>Achieve your goals with The Educators</h2>
        <div class="container">
            <div class="row" >
              <div class="col-md-3" ><i class="fab fa-leanpub fa-3x" ></i>
                <p class="heading">Learn the latest skills</p>

              </div>

              <div class="col-md-3"><i class="fas fa-chalkboard-teacher fa-3x"></i>
                <p class="heading">Get ready for a career</p>
              </div>

              <div class="col-md-3"><i class="fas fa-graduation-cap fa-3x"></i>
               <p class="heading">Earn a Degree</p >
              </div>

              <div class="col-md-3"><i class="fas fa-users fa-3x" ></i>
                <p class="heading">Upskill your organization</p>
              </div>
            </div>
        </div>   
    </div>

    
<!-- Footer -->
    {{-- <div class="footer">
        
        <p>Follow us on&nbsp;<a  href="#"><i class="fab fa-facebook"></i>&nbsp;|&nbsp;</i></a>
        <a  href="#"><i class="fab fa-twitter"></i>&nbsp;|&nbsp;</i></a>
        <a  href="#"><i class="fab fa-instagram"></i></a></p>
    </div> --}}

@endsection
