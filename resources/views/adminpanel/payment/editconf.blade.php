@extends('layouts.master')
@section('content')

<div class="right_col" role="main">

          
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="greentea">Detail Confirmasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('payment.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="{{asset('image/'.$data->image)}}" alt="..." />
                      </div>
                      <div class="product_gallery">
                        
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h5 class="prod_title price">Nama :  <b>{{ $data->name }}</b></h5>
                      <h5 class="prod_title price">E-mail :  <b>{{ $data->email }}</b></h5>
                      <h5 class="prod_title price">Alamat :  <b>{{ $data->alamat }}</b></h5>
                      <h5 class="prod_title price">Telpon :  <b>{{ $data->telp }}</b></h5>
                      <h5 class="prod_title price">Status Pembayaran :  <b>{{ $data->status==1 ? "Lunas" : "Belum" }}</b></h3>
                      <br />
                      <div class="">
                      {{ Form::model($data, ['route'=>['payment.update', $data->id], 'method'=>'PATCH']) }}
                        <div class="box-body">
                        <div class="form-group hide">
                            {{ Form::label('name', 'Category Name') }}
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group hide">
                            {{ Form::label('email', 'Category Name') }}
                            {{ Form::text('email', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group hide">
                            {{ Form::label('alamat', 'Category Name') }}
                            {{ Form::text('alamat', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group hide">
                            {{ Form::label('telp', 'Category Name') }}
                            {{ Form::text('telp', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{ Form::label('status', 'Ubah Status Pembayaran') }}
                                <select name="status" class="form-control">
                                    @if($data->status == '0')
                                        <option value="0">Belum</option>
                                        <option value="1">Lunas</option>
                                    @else
                                        <option value="1">Lunas</option>
                                        <option value="0">Belum</option>
                                    @endif
                                </select>
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div><br/>
                        <div class="form-group">
                            {{ Form::submit('Update', ['class'=>'btn btn-success']) }}
                        </div>
                        {{ Form::close() }}
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection