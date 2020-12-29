@extends('layouts.master')
@section('content')

<head>
<title></title>
<script type="text/javascript" src="{{ asset('tiny\assets\js\tinymce\tinymce.min.js') }}"></script>

<script type="text/javascript">
    tinymce.init({
        selector : "textarea",
        invalid_elements : "span"
    });
</script>

</head>
<body>
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Dashboard <small>Data Product </small>
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
                           <a href="{{ route('product.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                        {{ Form::model($data, ['route'=>['product.update', $data->id], 'method'=>'PATCH','enctype' => 'multipart/form-data','files' => 'true']) }}
                        <div class="box-body">
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('title', 'Title Product') }}
                            {{ Form::text('title', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                            <div class="form-group{{ $errors->has('kategori_id') ? ' has-error' : '' }}">
                            {{ Form::label('categorys_id', 'Kategori') }}
                            {{ Form::select('categorys_id', $categorys, null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>

                        <img width="150" height="90" src="{{asset('image/'.$data->image)}}">
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {{ Form::label('featured_image', '') }}
                            {{ Form::file('featured_image', null, ['class'=>'form-control', 'placeholder'=>'']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div><br/>                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('desc', 'Deskripsi') }}
                            {{ Form::textarea('desc', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('price', 'Price') }}
                            {{ Form::text('price', null, ['class'=>'form-control']) }}
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
                            </div>
                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('kode', 'Kode') }}
                            {{ Form::text('kode', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div><br/>
                                {{ Form::submit('Update',['class' => 'btn btn-success']) }}
                            </div>
                        {{ Form::close() }}  
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</body>
@endsection