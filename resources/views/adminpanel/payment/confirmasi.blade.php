@extends('layouts.master')

@section('content')

<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Dashboard <small>Data Confirmasi Pembayaran </small>
                </h3>
            </div>
 
            <div class="title_right">
            {{ Form::open(['method'=>'GET','url'=>'searchpro','role'=>'search']) }}
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search for name...">
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon glyphicon-search" type="button"></button>
                        </span>
                    </div>
                </div>
            {{ Form::close() }}
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="greentea">List Data</h2>
                        <ul class="nav navbar-right panel_toolbox">
                           
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                            <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Nama </th>
                            <th class="column-title">E-mail </th>
                            <th class="column-title">alamat </th>
                            <th class="column-title">telp </th>
                            <th class="column-title">status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                            @foreach($data as $key)
                          <tr class="even pointer">
                            <td class=" ">{{ $no++ }}</td>
                            <td class=" ">{{ $key->name}}</td>
                            <td class=" ">{{ $key->email}}</td>
                            <td class=" ">{{ $key->alamat }}</td>
                            <td class=" ">{{ $key->telp }}</td>
                            <td class=" ">{{ $key->status==1 ? "Lunas" : "Belum" }}</td>
                            <td class=" last">
                                <a class="btn btn-info fa fa-pencil-square-o" href="{{ route('payment.show', $key->id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Ubah Status">  </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                        <!-- content ends here -->
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @if (flashMe()->ok())
        {!!  flashMe_flash() !!}
    @endif
@endsection