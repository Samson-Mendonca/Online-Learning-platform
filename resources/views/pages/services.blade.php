@extends('layout.app')
<link href="../css/app3.css" rel="stylesheet">
@section('content')
    
        <h1 class="text-center">Feedback</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light form-box ">
                <form action="feedback" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">1.What was your first impression when you entered the website?</label>
                                <textarea type="text" class="form-control" name="impression"></textarea>    
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">2. How did you first hear about us?</label>
                                <textarea type="text" class="form-control" name="hear"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">3. Is there anything missing on this page?</label>
                                <textarea type="text" class="form-control" name="missing"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">4. How likely are you to recommend us to a friend or colleague?</label>
                                <textarea type="text" class="form-control" name="recommend"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">5. What is the most useful feature of our website?</label>
                                <textarea type="text" class="form-control" name="useful"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">6. How easy was it to use our website? Did you have any problems?</label>
                                <textarea type="text" class="form-control" name="problems"></textarea>
                            </div>
                        </div>
                        @csrf
                        <div class="col-12 text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

 
@endsection
