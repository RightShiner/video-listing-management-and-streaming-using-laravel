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
<form action="{{url('/blog-post/update')}}" method="post" enctype="multipart/form-data" class="upload-form" style=" ">
  {{ csrf_field() }} 
               <div class="row">
                                    
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Script <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="title" name="script" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    
                    
                    
    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Banner Size <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <table width="200">
                          <tr>
                            <td><label>
                              <input type="radio" name="size" value="728x90" id="b728">
                              728x90</label></td>
                          </tr>
                          <tr>
                            <td><label>
                              <input type="radio" name="size" value="300x250" id="b300">
                              300x250</label></td>
                          </tr>
                        </table>
    </div>
                    </div>
                    
                  <div class="form-group" id="position">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Banner Position <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                       <select class="form-control" name="position">
                       <option>Top</option>
                       <option>Down</option>
                       </select>
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


@section('scripts')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>

<script type="text/javascript">
tinymce.init({
   width: "100%",
    plugins: "media"
});        

tinymce.init({
    selector: "#tinymce_full",

    // Theme options
    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    theme_advanced_resizing : true,
   
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools","media"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});



</script>


@endsection

