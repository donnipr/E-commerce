@extends('layouts.master')
@section('content')

<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                     Dashboard <small>Categorys Product </small>
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
                        <h2 class="greentea">Update Data</h2>
                        <ul class="nav navbar-right panel_toolbox">
                           <a href="{{ route('categorys.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                        {{ Form::model($data, ['route'=>['categorys.update', $data->id], 'method'=>'PATCH']) }}
                        <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Category Name') }}
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{ Form::label('status', 'Status') }}
                                <select name="status" class="form-control">
                                    @if($data->status == 'Draft')
                                        <option value="Draft">Draft</option>
                                        <option value="Publish">Publish</option>
                                    @else
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                    @endif
                                </select>
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div><br/>
                        <div class="form-group">
                            {{ Form::submit('Update', ['class'=>'btn btn-success']) }}
                        </div>
                        {{ Form::close() }}  
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>

@endsection