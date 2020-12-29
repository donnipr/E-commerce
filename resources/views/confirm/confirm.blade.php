
<!DOCTYPE html>
<html>
	<head>
		<title>Dirty ASH.</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{asset('cart/assets/css/bootstrap.min.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('cart/assets/css/custom.css')}}"/>		
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Konfirmasi Pembayaran</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
					<div>{{ Auth::user()->name }}</div>
				</div>
			</div>
		</nav>
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li>
                                    <a href="{{ url('/customer/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/customer/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>Dirty ASH.</h1>
				<p>
					This is a free and <b><a href="http://tutorialzine.com/2014/04/responsive-shopping-cart-layout-twitter-bootstrap-3/" title="Read the article!">responsive shopping cart layout, made by Tutorialzine</a></b>. It looks nice on both desktop and mobile browsers. Try it by resizing your window (or opening it on your smartphone and pc).
				</p>
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				{{ Form::open(['route' => 'userconf.store','enctype' => 'multipart/form-data','files' => 'true']) }}
                            <div class="box-body">
                            <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                                {{ Form::label('name','Name') }}
                                {{ Form::text('name','',['class' => 'form-control']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>                           
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                                {{ Form::label('email','E-mail') }}
                                {{ Form::email('email','',['class' => 'form-control']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                                {{ Form::label('alamat','Alamat') }}
                                {{ Form::text('alamat','',['class' => 'form-control']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                                {{ Form::label('telp','Telp') }}
                                {{ Form::text('telp','',['class' => 'form-control']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>
                            <div class="{{ $errors->has('featured_image') ? ' has-error' : '' }}">
                                {{ Form::label('featured_image', 'Bukti Transfer Pembayaran') }}
                                {{ Form::file('featured_image', [  'placeholder'=>'']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>
                            <div class="form-group hide">
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
			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="{{asset('cart/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('cart/assets/js/customjs.js')}}"></script>
		@if (flashMe()->ok())
        {!!  flashMe_flash() !!}
    @endif

	</body>
</html>
