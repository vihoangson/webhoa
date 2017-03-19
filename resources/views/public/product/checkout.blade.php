    @extends('public.layouts.no_sidebar')
@section('content')
    <div id="main-container" class="container">
        <!-- Main Heading Starts -->
        <h2 class="main-heading text-center">
            Shopping Cart
        </h2>
        <!-- Main Heading Ends -->
        <!-- Shopping Cart Table Starts -->
        <div class="table-responsive shopping-cart-table">
            {!! Form::open(['url'=>'/product/update_cart','method'=>'post']) !!}
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Image
                    </td>
                    <td class="text-center">
                        Product Details
                    </td>
                    <td class="text-center">
                        Quantity
                    </td>
                    <td class="text-center">
                        Price
                    </td>
                    <td class="text-center">
                        Total
                    </td>
                    <td class="text-center">
                        Action
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $row)
                    <tr>
                        <td class="text-center">
                            <a href="/product/{{$row->id}}">
                                <img src="{{($row->options->has('img_url') ? "/".$row->options->img_url : 'http://placehold.it/100x100')}}" alt="Product Name" title="Product Name" class="img-thumbnail" style="height:100px;">
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="product-full.html">{{$row->name}}</a>
                        </td>
                        <td class="text-center">
                            <div class="input-group btn-block">
                                <input type="text" name="ql[{{$row->rowId}}]" value="{{$row->qty}}" size="1" class="form-control">
                            </div>
                        </td>
                        <td class="text-center">
                            {{number_format($row->price)}}
                        </td>
                        <td class="text-center">
                            {{number_format($row->total)}}
                        </td>
                        <td class="text-center">
                            <button type="submit" title="" class="btn btn-default tool-tip" data-original-title="Update">
                                <i class="fa fa-refresh"></i>
                            </button>
                            <button type="button" title="" class="btn btn-default tool-tip" data-original-title="Remove">
                                <i class="fa fa-times-circle"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4" class="text-right">
                        <strong>Total :</strong>
                    </td>
                    <td colspan="2" class="text-left">
                        {{Cart::total()}}
                    </td>
                </tr>
                </tfoot>
            </table>
            {!! Form::close() !!}
        </div>
        <!-- Shopping Cart Table Ends -->
        <!-- Shipping Section Starts -->
        <section class="registration-area">
            <div class="row">
                <!-- Shipping & Shipment Block Starts -->
                <div class="col-sm-6">
                    <!-- Taxes Block Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Shipping &amp; Taxes
                            </h3>
                        </div>
                        <div class="panel-body">
                            <!-- Form Starts -->
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-3 control-label">Country :</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="inputCountry">
                                            <option>- All Countries -</option>
                                            <option>India</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputRegion" class="col-sm-3 control-label">Region :</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="inputRegion">
                                            <option>- All Regions -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputZipCode" class="col-sm-3 control-label">Zip Code :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputZipCode" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-default">
                                            Get Info
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form Ends -->
                        </div>
                    </div>
                    <!-- Taxes Block Ends -->
                    <!-- Shipment Information Block Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Shipment Information
                            </h3>
                        </div>
                        <div class="panel-body">
                            <!-- Form Starts -->
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputFname" class="col-sm-3 control-label">First Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputFname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress1" class="col-sm-3 control-label">Address/1 :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputAddress1" placeholder="Address/1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-sm-3 control-label">Address/2 :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Address/2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCity" class="col-sm-3 control-label">City :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPostCode" placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-3 control-label">Country :</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="inputCountry1">
                                            <option>- All Countries -</option>
                                            <option>India</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputRegion" class="col-sm-3 control-label">Region :</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="inputRegion1">
                                            <option>- All Regions -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-main">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form Ends -->
                        </div>
                    </div>
                    <!-- Shipment Information Block Ends -->
                </div>
                <!-- Shipping & Shipment Block Ends -->
                <!-- Discount & Conditions Blocks Starts -->
                <div class="col-sm-6">
                    <!-- Discount Coupon Block Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Discount Coupon Code
                            </h3>
                        </div>
                        <div class="panel-body">
                            <!-- Form Starts -->
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputCouponCode" class="col-sm-3 control-label">Coupon Code :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputCouponCode" placeholder="Coupon Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-default">
                                            Apply Coupon
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form Ends -->
                        </div>
                    </div>
                    <!-- Discount Coupon Block Ends -->
                    <!-- Conditions Panel Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Terms &amp; Conditions
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula.
                            </p>
                            <p>
                                Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi.
                            </p>
                            <p>
                                Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat.
                            </p>
                        </div>
                    </div>
                    <!-- Conditions Panel Ends -->
                    <!-- Total Panel Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Total
                            </h3>
                        </div>
                        <div class="panel-body">
                            <dl class="dl-horizontal">
                                <dt>Coupon Discount :</dt>
                                <dd>$-25.00</dd>
                                <dt>Subtotal :</dt>
                                <dd>$300.00</dd>
                                <dt>Payment Fee :</dt>
                                <dd>$10.00</dd>
                                <dt>Shipment Fee :</dt>
                                <dd>$15.00</dd>
                                <dt>Tax Total :</dt>
                                <dd>$315.00</dd>
                            </dl>
                            <hr>
                            <dl class="dl-horizontal total">
                                <dt>Total :</dt>
                                <dd>$325.00</dd>
                            </dl>
                            <hr>
                            <div class="text-uppercase clearfix">
                                <a href="#" class="btn btn-default pull-left">
                                    <span class="hidden-xs">Continue Shopping</span>
                                    <span class="visible-xs">Continue</span>
                                </a>
                                <a href="#" class="btn btn-default pull-right">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Total Panel Ends -->
                </div>
                <!-- Discount & Conditions Blocks Ends -->
            </div>
        </section>
        <!-- Shipping Section Ends -->
    </div>
@endsection

@section('custom_header111')
    <h1>Checkout</h1>
    {!! Form::open(['url'=>'/product/update_cart','method'=>'post']) !!}
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>QL</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cart as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td><input class="form-control" style="width:45px;text-align: center;" name="ql[{{$row->rowId}}]" value="{{$row->qty}}"></td>
                <td>{{number_format($row->price)}}</td>
                <td>{{number_format($row->total)}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td>{{Cart::total()}}</td>
        </tr>
        </tfoot>
    </table>
    <button class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
    <a href="/product/payment" class="btn btn-primary">Checkout</a>
    {!! Form::close() !!}
@endsection

@section('custom_footer')

@endsection