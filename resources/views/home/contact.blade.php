@extends('layouts.mainLayout2')

@section('styles')
<style type="text/css">
	.col-md-12
	{
		font-size: 15px;
		line-height: 35px;
		text-align:justify;
		margin-top: 16px;
		margin-bottom: 20px;
		text-transform: uppercase;
	}
</style>
@endsection

@section('content')

<div class="col-md-8 col-md-offset-2">

<h4>Contact Us</h4>

<div class="column">
   @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <strong>Error!</strong> 
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
          </div>
          @endif
          @if(session('msg'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> 
            {{ session('msg') }}
          </div>                        
          @endif
          @if(session('err'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong> 
            {{ session('err') }}
          </div>                        
          @endif
<div class="" style="background:#FFF; padding: 15px; margin-top:20px;">
<form action="{{url('/contact')}}" method="post" enctype="multipart/form-data" class="upload-form" style=" ">
  {{ csrf_field() }} 
               <div class="row">
                  <div class="col-lg-12">
                     <div class="osahan-form">
                        <div class="row">

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Name</label>
                                 <input type="text" name="name" placeholder="Full Name" id="e1" class="form-control">
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">email</label>
                                 <input type="text" name="email" placeholder="" id="e1" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Subject</label>
                                 <input type="text" name="subject" placeholder="" id="e1" class="form-control">
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e2">Message</label>
                                 <textarea rows="3" id="e2" name="message" class="form-control">Description</textarea>
                              </div>
                           </div>

                           
                        </div>
                        
                        
                     <div class="osahan-area text-center mt-3">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                     </div>
                     <hr>
                     
                  </div>
               </div>
           </div>
</form>
</div>
</div>


</div>

@endsection