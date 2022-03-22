@extends('layouts.adminLayout2')


@section('content')

<div class="eq col-md-12" >

  <h3 class="text-highlight sr-item">Create Channel</h3>
<!-- video upload form -->
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
<form action="{{url('/channel/create')}}" method="post" enctype="multipart/form-data" class="upload-form" style=" ">
  {{ csrf_field() }} 
               <div class="row">
                  <div class="col-lg-12">
                     <div class="osahan-form">
                        <div class="row">

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Channel Name</label>
                                 <input type="text" name="channel" placeholder="" id="e1" class="form-control">
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e2">Description</label>
                                 <textarea rows="3" id="e2" name="description" class="form-control">Description</textarea>
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Choose Logo</label>
                                 <input type="file" name="photo">
                              </div>
                           </div>

                        </div>
                        
                        
                     <div class="osahan-area text-center mt-3">
                        <button type="submit" class="btn btn-outline-primary">Save Changes</button>
                     </div>
                     <hr>
                     
                  </div>
               </div>
           </div>
</form>
</div>
</div>

<!-- end video upload form -->
</div>
@endsection

@section('styles')
 <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="{{ asset('assets/js/bootstrap-tagsinput.js') }}"></script>
<script type="text/javascript">
	(function( $ ) {
    // the sameHeight functions makes all the selected elements of the same height
    $.fn.sameHeight = function() {
        var selector = this;
        var heights = [];

        // Save the heights of every element into an array
        selector.each(function(){
            var height = $(this).height();
            heights.push(height);
        });

        // Get the biggest height
        var maxHeight = Math.max.apply(null, heights);
        // Show in the console to verify
        console.log(heights,maxHeight);

        // Set the maxHeight to every selected element
        selector.each(function(){
            $(this).height(maxHeight);
        }); 
    };
 
}( jQuery ));

	$(document).ready(function(){
	$('.eq .column').sameHeight();

$(window).resize(function(){
    // Do it when the window resizes too
    $('.eq .column').sameHeight();
});

});
</script>

@endsection

