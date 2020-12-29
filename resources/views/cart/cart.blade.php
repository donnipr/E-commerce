
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
        <a class="navbar-brand" href="#"></a>
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
         Your shopping cart
        </p>
      </div>
      
      <div class="col-md-7 col-sm-12 text-left">
        
        <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Name Product </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title">Price </th>
                            <th class="column-title"></th>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                            @foreach($data as $key)
                          <tr class="even pointer">
                           <td class=" ">{{ $no++ }}</td>
                            <td class=" ">{{ $key->name }}</td>
                            <td>
                            {!! Form::open(['route'=>['shopcart.update',$key->rowId], 'method' => 'PUT']) !!}
                              <input type="text" name="qty" value="{{ $key->qty }}"> 
                              <input type="submit" class="btn btn-xs btn-dark" value="ok">
                            {!! Form::close() !!}
                            </td>
                            <td class=" ">Rp {{ $key->price }}</td>
                            <td>
                              {!! Form::open(['route'=>['shopcart.destroy',$key->rowId], 'method' => 'post']) !!}
                              <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                              {{ method_field('DELETE') }}
                              <input class="btn btn-xs btn-round btn-dark" type="submit" value="X">
                              {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                          <tr class="greentea">
                            <td></td>
                            <td></td>
                            <td><strong>Item : {{ Cart::count() }}</strong></td>
                            <td><strong>Total : Rp {{ Cart::subtotal() }}</strong></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                      <a class="btn btn-success" href="{!! url('') !!}" data-toggle="tooltip" data-placement="left" title="" data-original-title="">Go Shoping </a>
                      <a class="btn btn-dark" href="{{ route('invoice') }}" data-toggle="tooltip" data-placement="left" title="" data-original-title=""> Checkout </a>
                      </div>
                        <!-- content ends here -->
                    </div>

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

  </body>
</html>