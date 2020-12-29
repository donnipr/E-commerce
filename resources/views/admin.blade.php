@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    
                    <span class="pull-right">
                        <a href="" class="btn bg-teal waves-effect btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to list">
                            <i class="material-icons">backspace</i>
                        </a>
                    </span>
                </h2>
            </div>

            <div class="panel-body">
                
                <div class="col-md-12">                        
                    <div class="block">
                        <form id="jvalidate" method="POST" role="form" class="form-horizontal form-valid" action="">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="">
                        <div class="panel-body">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="name">Categopry Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="" name="category" value="" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row clearfix hide">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="name">Parent</label>
                            </div>
                        </div> 

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="name">Status</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="category_status">
                                            <option value="1" >Yes</option>
                                            <option value="0" >No</option>
                                            <option value="1" >true</option>
                                            <option value="0" >false</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                                           
                        
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </div>
                        </div>                                                                                                                          
                        </div>                                               
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>  

@endsection