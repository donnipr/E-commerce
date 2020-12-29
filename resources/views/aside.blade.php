@extends('layouts.master')

@section('content')

<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Dashboard <small>Data Product </small>
                </h3>
            </div>
 
           
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="greentea">List Data</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                            <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Status</th>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                            @foreach($data as $bajuku)
                          <tr class="even pointer">
                            <td class=" ">{{ $no++ }}</td>
                            <td class=" ">{!! substr($bajuku->name,0,2) !!}</td>
                            <td class=" ">{{ $bajuku->name}}</td>
                            
                          
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                        <!-- content ends here -->
                    
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