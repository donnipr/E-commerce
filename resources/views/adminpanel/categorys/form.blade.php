@extends('layouts.master')
@section('content')

<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Dashboard <small>Category product </small>
                </h3>
            </div>
 
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <br/><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="greentea">Create Data</h2>
                        <ul class="nav navbar-right panel_toolbox">
                           <a href="{{ route('categorys.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                          {{ Form::open(['route' => 'categorys.store']) }}
                            <div class="box-body">
                            <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                                {{ Form::label('name','Category Name') }}
                                {{ Form::text('name','',['class' => 'form-control']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                {{ Form::label('status', 'Status') }}
                                <select name="status" class="form-control">
                                    <option value="Draft">Draft</option>
                                    <option value="Publish">Publish</option>
                                </select>
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div><br/>
                                {{ Form::submit('Submit',['class' => 'btn btn-success']) }}
                            </div>
                        {{ Form::close() }}  
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection