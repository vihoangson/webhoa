@extends('public.'.$template_name.'.layouts.inside')
@section('breadcrumb')
    {!! Breadcrumbs::render('product_detail','Thanh toán') !!}
@endsection
@section('content')
    {{--<h1>@lang('common.Payment')</h1>--}}

    <!-- Shipping & Shipment Block Starts -->
    <div class="">
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
        @if(Auth::check() == 1)
            <div class="panel panel-smart">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Thông tin khách hàng
                    </h3>
                </div>
                <div class="panel-body">
                    <div><b>Username:</b> {{Auth::user()->username}} </div>
                    <div><b>Email:</b> {{Auth::user()->email}} </div>
                    <div><b>Address:</b> {{Auth::user()->user_info()->first()->address}} </div>
                    <div><b>Phone:</b> {{Auth::user()->user_info()->first()->phone}} </div>
                    {!! Form::open(['route' => 'product.payment', 'method' => 'post','class'=>'form-horizontal']) !!}
                    <div class="form-group payment_method">
                        <label for="inputCity" class="col-sm-4 control-label">Phương thức thanh toán :</label>
                        <div class="col-sm-8">
                            <div>
                                <input type="radio" required="required" name="payment_method" value="cod" class="" id="cod" placeholder="" checked>
                                <label for="cod">COD (Giao hàng & nhận tiền tại nhà)</label></div>
                            <div>
                                <input type="radio" required="required" name="payment_method" value="chuyenkhoanw" class="" id="chuyenkhoan" placeholder="">
                                <label for="chuyenkhoan">Chuyển khoản ngân hàng</label>
                                <div id="tttk" class="well" style="display:none;">
                                    <h2>THÔNG TIN TÀI KHOẢN</h2>
                                    {!! get_setting('account_info') !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Hoàn tất mua hàng</button>
                    {!! Form::close() !!}
                    <div><a href="{{url('/logout')}}">Logout</a></div>
                </div>
            </div>


        @else
            <div class="row">
                <div class="col-md-6">
                    <h2>Đăng nhập tài khoản</h2>
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">

                                {{--@lang('common.Shipment Information')--}}
                            </h3>
                        </div>
                        <div class="panel-body">

                            {!! Form::open(['url' => '/login', 'method' => 'post','class'=>'form-horizontal']) !!}
                            <div class="form-group">
                                {{--<label for="inputFname" class="col-sm-3 control-label">Username</label>--}}
                                <div class="col-sm-12">
                                    <input type="text" required="required" name="email" class="form-control" id="inputFname" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                {{--<label for="inputFname" class="col-sm-3 control-label">Password</label>--}}
                                <div class="col-sm-12">
                                    <input type="password" required="required" name="password" class="form-control" id="inputFname" placeholder="Password">
                                </div>
                            </div>
                            {!! Form::submit('Đăng nhập', ['class' => 'btn btn-primary']) !!}
                            <div><a href="{{route('user.register')}}">Quên mật khẩu</a></div>
                            <div><a href="{{route('user.register')}}">Tôi chưa có tài khoản</a></div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    {!! Form::open(['url'=>'/product/payment','method'=>'post','class'=>'form-horizontal']) !!}
                    <h2>Mua hàng không cần đăng ký</h2>
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
                                    <div>
                                        <input type="radio" required="required" name="payment_method" value="cod" class="" id="cod" placeholder="" checked>
                                        <label for="cod">COD (Giao hàng & nhận tiền tại nhà)</label></div>
                                    <div>
                                        <input type="radio" required="required" name="payment_method" value="chuyenkhoanw" class="" id="chuyenkhoan" placeholder="">
                                        <label for="chuyenkhoan">Chuyển khoản ngân hàng</label>
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
                    {!! Form::close() !!}
                </div>
            </div>
    @endif


    <!-- Shipment Information Block Ends -->
    </div>
    <!-- Shipping & Shipment Block Ends -->

@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection