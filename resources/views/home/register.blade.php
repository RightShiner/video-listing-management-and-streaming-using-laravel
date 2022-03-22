@extends('layouts._loginLayout')



@section('content')



      <div class="agile_info">
         <div class="snipetube-form">
            <div class="left_grid_info">
               <h1>Welcome to Snipetube</h1>
               <p>Donec dictum nisl nec mi lacinia, sed maximus tellus eleifend. Proin molestie cursus sapien ac eleifend.</p>
               <img src="images/image.jpg" alt="" />
            </div>
         </div>

         <div class="wrapper">
         <!---728x90--->

            <h2>Create your Account</h2>
            <p>Enter your details to login.</p>
            <form action="{{url('/user/registration')}}" method="post" id="register">
               {{ csrf_field() }} 
               <label>First Name <span>*</span></label>
               <div class="input-group">
                  <span class="fa fa-user-o" aria-hidden="true"></span>
                  <input type="text" name="firstName" class="register-control" placeholder="Enter Your First Name" required=""> 
               </div>
               <label>Last name <span>*</span></label>
               <div class="input-group">
                  <span class="fa fa-user" aria-hidden="true"></span>
                  <input type="text" name="lastName" class="register-control" placeholder="Enter Last Name" required="">
               </div> 
               <label>Email Address <span>*</span></label>
               <div class="input-group">
                  <span class="fa fa-envelope" aria-hidden="true"></span>
                  <input type="email" name="email" class="register-control" placeholder="Enter Your Email" required=""> 
               </div>
               <label>Country</label>
               <div class="input-group">
                  <span class="fa fa-home" aria-hidden="true"></span>
                  <input type="text" name="country" class="register-control" placeholder="Enter Your Country" required="">
               </div> 
               <label>Province</label>
               <div class="input-group">
                  <span class="fa fa-home" aria-hidden="true"></span>
                  <input type="text" name="province" class="register-control" placeholder="Enter Your Province" required=""> 
               </div>
               <label>Phone</label>
               <div class="input-group">
                  <span class="fa fa-phone" aria-hidden="true"></span>
                  <input type="text" name="phone" class="register-control" placeholder="Enter Phone" required="">
               </div> 
               <div class="login-check">
                   <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Remember me</label>
               </div>                  
                  <button class="btn btn-danger btn-block" type="submit">Register</button >                
            </form>
            <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
            <p class="account1">Already have an account? <a href="{{url('/users/login')}}">Login here</a></p>
         </div>
      </div>


@endsection