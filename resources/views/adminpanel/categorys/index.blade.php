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
            {{ Form::open(['method'=>'GET','url'=>'searchcat','role'=>'search']) }}
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
                           <a href="{{ route('categorys.create') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add Data"><i class="glyphicon glyphicon-plus"></i></a>
                           <a href="{{ route('categorys.index') }}" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Refresh Data"><i class="glyphicon glyphicon-refresh"></i></a>
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
                            <th class="column-title">Category Name </th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                            @foreach($data as $key)
                          <tr class="even pointer">
                            <td class=" ">{{ $no++ }}</td>
                            <td class=" ">{{ $key->name }}</td>
                            <td class=" ">{{ $key->status }}</td>
                            <td class=" last">
                                <a class="btn btn-info fa fa-edit" href="{{ route('categorys.edit', $key->id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit">  </a>
                                <a href="{{ url('delete', $key->id) }}" onclick="return confirm('Are you sure want to delete data selected?')" class="btn btn-danger fa fa-trash" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class=""></i></a>
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