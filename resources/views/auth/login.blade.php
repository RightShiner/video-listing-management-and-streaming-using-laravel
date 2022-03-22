@extends('layouts._loginLayout')



@section('content')



      <div class="agile_info">
         <div class="snipetube-form">
            <div class="left_grid_info">
               <h1>Welcome to Snipetube</h1>
               <p>Upload and share personal and exciting videos with family and friends around the world</p>
               <img src="images/image.jpg" alt="" />
            </div>
         </div>

         <div class="wrapper">
         <!---728x90--->

            <h2>Login to your Account</h2>
            <p>Enter your details to login.</p>
            <form action="{{ url('/login') }}" method="post">
               {{ csrf_field() }} 
               <label>Email Address</label>
               <div class="input-group">
                  <span class="fa fa-envelope" aria-hidden="true"></span>
                  <input type="email" name="email" class="login-control" placeholder="Enter Your Email" required=""> 
               </div>
               <label>Password</label>
               <div class="input-group">
                  <span class="fa fa-lock" aria-hidden="true"></span>
                  <input type="Password" name="password" class="login-control"  placeholder="Enter Password" required="">
               </div> 
               <div class="login-check">
                   <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Remember me</label>
               </div>                  
                  <button class="btn btn-danger btn-block" type="submit">Login</button >                
            </form>
            <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
            <p class="account1">Dont have an account? <a href="{{url('/users/register')}}">Register here</a></p>
         </div>
      </div>


@endsection