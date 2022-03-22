@extends('layouts.adminLayout2')


@section('content')


<div class="eq" style=" padding-left: 15px; padding-right: 15px;">

  <h3 class="text-center text-highlight sr-item" style="margin-top: 20px;">Upload a Video</h3>
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
<form action="{{url('/video/upload')}}" method="post" enctype="multipart/form-data" class="upload-form" style=" ">
  {{ csrf_field() }} 
               <div class="row">
                  <div class="col-lg-12">
                     <div class="osahan-form">
                        <div class="row">

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Video Title</label>
                                 <input type="text" name="title" placeholder="" id="e1" class="form-control" value="{{$edit->title}}">
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e2">Description</label>
                                 <textarea rows="3" id="e2" name="description" class="form-control" style="padding: 5px;">
                                  {{$edit->description}}
                                 </textarea>
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Keywords</label>
                                 <input type="text" placeholder="Keywords" name="keywords" data-role="tagsinputs" id="e1" class="form-control" value="{{$edit->keywords}}">
                              </div>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="e3">Category</label>
                                 <select id="e3" name="category" class="custom-select form-control">
                                    <option selected="selected">Select</option>
                                    @foreach($cat as $list)
                                    <option value="{{$list->catId}}" @if($list->catId == $edit->category) selected @endif>{{$list->category_name}}</option>
                                    @endforeach
                                    
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="e4">Privacy Settings</label>
                                 <select id="e4" name="privacy" class="custom-select form-control">
                                    <option selected="selected">Select</option>
                                    <option value="1" @if($edit->status ==1) selected @endif>Publish</option>
                                    <option value="0" @if($edit->status ==0) selected @endif>Private</option>
                                    
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="e5">Language in Video (Optional)</label>
                                 <input type="text" id="e1" name="language" class="form-control" value="{{$edit->video_language}}">
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
	$('.eq').sameHeight();

$(window).resize(function(){
    // Do it when the window resizes too
    $('.eq').sameHeight();
});

});
</script>

@endsection

