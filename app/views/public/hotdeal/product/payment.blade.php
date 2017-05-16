@extends('public.'.$template_name.'.layouts.inside')
@section('breadcrumb')
    {!! Breadcrumbs::render('product_detail','Thanh toán') !!}
@endsection
@section('content')
    <h1>@lang('common.Payment')</h1>
    {!! Form::open(['url'=>'/product/payment','method'=>'post','class'=>'form-horizontal']) !!}
    <!-- Shipping & Shipment Block Starts -->
    <div class="col-sm-12">
        <!-- Taxes Block Starts -->
        <div class="panel panel-smart hidden">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Shipping &amp; Taxes
                </h3>
            </div>

        </div>
        <!-- Taxes Block Ends -->
        <!-- Shipment Information Block Starts -->
        <div class="panel panel-smart">
            <div class="panel-heading">
                <h3 class="panel-title">
                    @lang('common.Shipment Information')
                </h3>
            </div>
            <div class="panel-body">
                <!-- Form Starts -->
                    <div class="form-group">
                        <label for="inputFname" class="col-sm-4 control-label">Họ tên :</label>
                        <div class="col-sm-8">
                            <input type="text" required="required" name="name" class="form-control" id="inputFname" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-4 control-label">Email :</label>
                        <div class="col-sm-8">
                            <input type="email" required="required" name="email" class="form-control" id="inputEmail" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress1" class="col-sm-4 control-label">Điện thoại :</label>
                        <div class="col-sm-8">
                            <input type="tel" required="required" name="tel" class="form-control" id="inputAddress1" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress1" class="col-sm-4 control-label">Địa chỉ :</label>
                        <div class="col-sm-8">
                            <input type="text" required="required" name="address" class="form-control" id="Address" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputCity" class="col-sm-4 control-label">Thành phố :</label>
                        <div class="col-sm-8">
                            <input type="text" required="required" name="city" class="form-control" id="inputCity" placeholder="">
                        </div>
                    </div>
                    <div class="form-group payment_method">
                        <label for="inputCity" class="col-sm-4 control-label">Phương thức thanh toán :</label>
                        <div class="col-sm-8">
                            <div><input type="radio" required="required" name="payment_method" value="cod" class="" id="cod" placeholder="" checked> <label for="cod">COD (Giao hàng & nhận tiền tại nhà)</label></div>
                            <div>
                                <input type="radio" required="required" name="payment_method" value="chuyenkhoanw" class="" id="chuyenkhoan" placeholder="" > <label for="chuyenkhoan">Chuyển khoản ngân hàng</label>
                                <div id="tttk" class="well" style="display:none;">
                                    <h2>THÔNG TIN TÀI KHOẢN</h2>
                                    {!! get_setting('account_info') !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <a href="/product/checkout" type="submit" class="btn btn-default">
                                Trở lại giỏ hàng
                            </a>
                            <button type="submit" class="btn btn-primary">Hoàn tất</button>
                            @if(App::environment('local'))
                                <button type="button" class="btn btn-danger auto-fill">Auto fill</button>
                            @endif
                        </div>
                    </div>
                <!-- Form Ends -->
            </div>
        </div>
        <!-- Shipment Information Block Ends -->
    </div>
    <!-- Shipping & Shipment Block Ends -->
    {!! Form::close() !!}
@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection