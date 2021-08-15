@extends('layout.app')

@section('content')

<div style="margin-left:0px; padding:0px;width:100%; background-image: url('../images/bg.jpg');background-size: cover;
    background-repeat : no-repeat;"  >
 
<div class="row" style="margin-top:20px; padding-left:10% "  >   
  <div class="col-sm-10" >
    <h3 class="font-weight-bold" style="margin-left: 20px;padding-top:70px"> ABOUT US</h3>
    <div class="container" style="padding:50px 50px 50px">
     <p style="color:#ffffff;">This website was created to provide an online platform to facilitate gaining knowledge and building skills from the comfort of ones home during this Covid-19 crisis.This web page uses a dbms to maintain and display data and has login functionality . Users are encouraged to provide their valuable feedback by logging in. The creators of this website are smart students and Mithun Mathai of SFIT. This website was created from scratch please believe us. The creators are also lazy hence this sad, about us page. </p>
    </div>
  </div>
  <div class="col-sm-4" >    
    {{-- <img style="height:100% ;width:60% ;border-radius:50% " src="../images/bg.jpg" alt="background"> --}}
  </div>
</div>
</div>
<div class="container">
  

{{-- <div class="row" style="margin-top:20px; "  >   
  <div class="col-sm-8" >
    <h3 class="font-weight-bold" style="margin-left: 20px;padding-top:70px"> ABOUT US</h3>
    <div class="container" style="padding:50px 50px 50px">
     <p>This website was created to provide an online platform to facilitate gaining knowledge and building skills from the comfort of ones home during this Covid-19 crisis.This web page uses a dbms to maintain and display data and has login functionality . Users are encouraged to provide their valuable feedback by logging in. The creators of this website are smart students and Mithun Mathai of SFIT. This website was created from scratch please believe us. The creators are also lazy hence this sad, about us page. </p>
    </div>
  </div>
  <div class="col-sm-4" >    
    {{-- <img style="height:100% ;width:60% ;border-radius:50% " src="../images/bg.jpg" alt="background"> --}}
  {{-- </div>
</div> --}} 


<h3 class="font-weight-bold" style="margin-left: 20px;margin-top:20px">OUR TEACHERS</h3>
<div class="container">
<div class="row justify-content-between" >
  <div class="col-sm-4" >
    <div class="thumbnail">
    <img src="../images/teacher-1.jpg" style="width:350px;height:390px" alt="teacher-1">
    <h3>Teacher</h3>
    <p>DR. CHUCK NORRIS</p>
  </div>  
  </div>
  <div class="col-sm-4" >
    <div class="thumbnail">
    <img src="../images/teacher-2.jpg" style="width:350px;height:390px" alt="teacher-2">
    <h3>Teacher</h3>
    <p>DR. MITHUN MATHAI</p>
  </div>
  </div>
  <div class="col-sm-4" >
    <div class="thumbnail">
    <img src="../images/teacher-3.jpg" style="width:350px;height:390px" alt="teacher-3">
    <h3>Teacher</h3>
    <p>MR. AADON MELATH</p>
</div>
</div>
</div>
</div>
@endsection
