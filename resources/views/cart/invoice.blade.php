
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
        <a class="navbar-brand" href="#">Invoice</a>
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
        
        <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Invoice</h2>
                    <ul class="nav navbar-right panel_toolbox">
          
                      <li class="dropdown">
                        
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          
                                          
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong>DIRTY ASH.</strong>
                                          <br>D.I.Yogyakarta
                                          <br>Sleman
                                          <br>Phone: 1 (804) 123-9876
                                          <br>Email: admin@dirtyash.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong>{{ Auth::user()->name }}</strong>
                                          <br>{{ Auth::user()->email }}
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          
                          <br>
                          <br>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                              <th>Invoice</th>
                                <th>Name Product </th>
                                <th>Quantity </th>
                                <th>Price </th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key)
                              <tr>
                                <td>#{{ $key->id }}</td>
                                <td>{{ $key->name }}</td>
                                <td>{{ $key->qty }}</td>
                                <td>Rp {{ $key->price }}</td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
                          
                          <img src="{{asset('backend/production/images/pmandiri.png')}}" alt="Visa">
                           <strong> 010101001110</strong><br><br>
                          <img src="{{asset('backend/production/images/pbni.png')}}" alt="Mastercard">
                           <strong> 919191928822</strong><br><br>
                          <img src="{{asset('backend/production/images/pbca.png')}}" alt="American Express">
                           <strong> 882901011000</strong><br><br>
                          
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>                              
                                <tr>
                                  <th>Item</th>
                                  <td>{{ Cart::count() }}</td>
                                </tr>
                                <tr>
                                  <th>Total</th>
                                  <td>Rp {{ Cart::subtotal() }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    <br><br><br>
                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <a class="btn btn-success" href="{{ route('userconf.index') }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="">Konfirmasi Pembayaran</a>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
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