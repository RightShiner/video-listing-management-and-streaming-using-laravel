@extends('layouts.adminLayout2')
@section('content')
<div class="right" style="background:#FFF; padding: 10px; margin-top:20px;">
<h2 class="text-center"> Home Page Ads</h2>
<form id="upload" method="post" action="{{url('/ads/create')}}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
  {{ csrf_field() }} 
          
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" >Scripts <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <textarea class="form-control" name="script">
                          
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" >Description<span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="title" name="description" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    
                                        
                    
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" > Advert Row <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                         <select class="form-control" name="row">
                          <option selected="selected">Select One</option>
                       <option value="1">First Row</option>
                       <option value="2">Second Row</option>
                       <option value="3">Third Row</option>
                       <option value="4">Fourth Row</option>
                       
                       
                       </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Banner Size <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                       <select class="form-control" name="size">
                       <option selected="selected">Select One</option>
                       <option>728 x 90</option>
                       <option>300 x 250</option>
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

                  </form>

</div>
                  @endsection
