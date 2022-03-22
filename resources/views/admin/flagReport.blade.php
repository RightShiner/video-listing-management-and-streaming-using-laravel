@extends('layouts.adminLayout2')


@section('content')


<div class=" eq" style="padding-left: 15px; padding-right: 15px; margin-top:20px;">

  <h3 class="text-center text-highlight sr-item">List of Subcribers</h3>
<!-- video upload form -->
<div class="column">
<div class="" style="background:#FFF; padding: 15px; margin-top:20px;">
  <table class="table table-striped table-vcenter table-condensed">
  <thead>
    <tr>
   <th>SN</th>
   <th>Video Title</th>
   <th>Channel</th>
   <th>Date Uploaded</th>
   <th>Reported By</th>
   <th>Report</th>
   <th>Block</th>
   </tr>
  </thead>

  <tbody>
    @php
    $sn = 1;
    @endphp
    @foreach($flag as $list)
    <tr>
      <td>{{$sn++}}</td>
      <td>{{$list->title}}</td>
      <td>{{$list->channel_name}}</td>
      <td>{{$list->date_uploaded}}</td>
      <td>{{$list->name}} {{$list->last_name}}</td>
      <td><a href="#" id="{{$list->vid}}" class="btn btn-success view">View</a></td>
      <td><a href="javascript:void()" id="{{$list->vid}}" class="btn btn-danger band">Block</a></td>
    </tr>
    @endforeach
  </tbody>
    
  </table>
</div>
<div class="pagination">{{$flag->links()}}</div>
</div>

<!-- end video upload form -->
</div>



<!-- Modal -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             
                <h4 class="modal-title">Report</h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <p id="message"></p>
            </div>
            <div class="modal-body">
            

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary adv" id="adv">Save changes</button>
            </div>
        </div>
    </div>
</div>



@endsection

@section('styles')
 <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet">
 <style type="text/css">
     .table
     {
        font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
     }
     .table tbody tr td
     {
        padding: 10px;
     }
    
 </style>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-tagsinput.js') }}"></script>
<script>

  $(document).ready(function(){
$('table tr td .view').click(function()
{

$("#myModal").modal('show');
});

  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
 
    $(".table tr td .view").click(function(){
      var vid = $(this).attr('id');
      
$.ajax({
  url: murl +'/get/report',
  type: "post",
  data: {'id': vid, _token:'{{csrf_token()}}'},
  success: function(data){
     
    console.log(data);
    $('.modal-body').html(data);
        
  }
});  //end of first ajax call for profile
}); //click events end


$(".table tr td .band").click(function(){
var vid = $(this).attr('id');    
$.ajax({
  url: murl +'/block/video',
  type: "post",
  data: {'id': vid, _token:'{{csrf_token()}}'},
  success: function(data){
     
    console.log(data);
   alert(data);
        
  }
});  //end of first ajax call for profile
}); //click events end


}); //document ready
       
</script>


@endsection

