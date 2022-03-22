@extends('layouts.adminLayout2')


@section('content')
<div class="container-fluid">

<div class="eq" >
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
<form action="{{url('/file-upload')}}" method="post" enctype="multipart/form-data" class="upload-form" style=" ">
  {{ csrf_field() }} 
               <div class="row">
                   
                    
                  <div class="form-group">
                     
                      <div class="col-md-8 col-sm-8 col-xs-12">
                      <div class="box">
          <input type="file" name="file" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
          
        </div>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-1">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <input type="submit" id="btn" name="submit" class="btn btn-success" value="Submit">
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
 
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/component.css') }}" rel="stylesheet">

<style type="text/css">
 
</style>

@endsection


@section('scripts')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-file-input.js') }}"></script>



@endsection

