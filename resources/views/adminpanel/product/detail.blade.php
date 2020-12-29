@extends('layouts.master')
@section('content')

<div class="right_col" role="main">

          
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="greentea">Detail Product</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('product.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="{{asset('image/'.$products->image)}}" alt="..." />
                      </div>
                      <div class="product_gallery">
                        
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title price"><b>{{ $products->title }}</b></h3>

                      <p>{!! substr($products->desc,0,855) !!}</p>
                       <hr>

                      <div class="">
                      <h4 class="price"><strong>Category Product</strong></h4>
                        <ul class="list-inline ">
                          <li>
                            <p class="redhat">{{ $products->categorys->name }}</p>
                          </li>
                        </ul>
                      </div>
                      <hr>
                      <div class="">
                        <h4 class="price"><strong>Status</strong></h4>
                        <ul class="list-inline">
                          <li>
                            <p class="redhat">{{ $products->status }}</p>
                          </li>
                        </ul>
                      </div>
                      <br />
                      <div class="">
                        <div class="product_price">
                          <h1 class="price">Rp {{ $products->price }}</h1>
                          <span class="price-tax redhat">{{ $products->kode }}</span>
                          <br>
                        </div>
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