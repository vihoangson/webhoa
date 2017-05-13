@extends('public.'.$template_name.'.layouts.inside')

@section('breadcrumb')
    {!! Breadcrumbs::render('checkout') !!}
@endsection

@section('content')
    <div id="main-container" class="">
        <!-- Main Heading Starts -->
        <h2 class="main-heading text-center">
            Giỏ hàng
        </h2>
        <!-- Main Heading Ends -->
        <!-- Shopping Cart Table Starts -->
        <div class="table-responsive shopping-cart-table">
            {!! Form::open(['url'=>'/product/update_cart','method'=>'post']) !!}
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Hình ảnh sản phẩm
                    </td>
                    <td class="text-center">
                        Tên sản phẩm
                    </td>
                    <td class="text-center">
                        Số lượng
                    </td>
                    <td class="text-center">
                        Đơn giá
                    </td>
                    <td class="text-center">
                        Thành tiền
                    </td>
                    <td class="text-center">

                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $row)
                    <tr>
                        <td class="text-center">
                            <a href="/product/{{$row->id}}">
                                <img src="{{($row->options->has('img_url') ? "/".$row->options->img_url : 'http://placehold.it/100x100')}}" alt="Product Name" title="Product Name" class="" style="height:100px;width: auto;">
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="/product/{{$row->id}}">{{$row->name}}</a>
                        </td>
                        <td class="text-center">
                            <div class="input-group btn-block">
                                <input type="text" name="ql[{{$row->rowId}}]" value="{{$row->qty}}" size="1" class="form-control">
                            </div>
                        </td>
                        <td class="text-center">
                            {{number_format($row->price)}} đ
                        </td>
                        <td class="text-center">
                            {{number_format($row->total)}} đ
                        </td>
                        <td class="text-center">
                            <button type="submit" title="" class="btn btn-default tool-tip" data-original-title="Update">
                                <i class="fa fa-refresh"></i>
                            </button>

                            <a href="/product/remove_item_in_cart/{{$row->rowId}}/checkout"  title="" class="btn btn-default tool-tip" data-original-title="Remove">
                                <i class="fa fa-times-circle"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4" class="text-right">
                        <strong>Tổng cộng :</strong>
                    </td>
                    <td colspan="2" class="text-left">
                        {{Cart::total()}} đ
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
                    <!-- Discount Coupon Block Starts -->
                    <div class="panel panel-smart ">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Coupon giảm giá
                            </h3>
                        </div>
                        <div class="panel-body">
                            {!! (Session::has("message_success_get_coupon")?'<div class="alert alert-success">'.Session::get("message_success_get_coupon").'</div>':'') !!}
                            {!! (Session::has("message_error_get_coupon")?'<div class="alert alert-danger">'.Session::get("message_error_get_coupon").'</div>':'') !!}
                            <!-- Form Starts -->
                            {!! Form::open(['route'=>'product.add_coupon','class'=>'form-horizontal','method'=>'post','id'=>'form-coupon']) !!}
                                {!! Form::hidden('backlink','/product/checkout',['class'=>'form-control']) !!}
                                {!! Form::hidden('cart_id',Cart::content()) !!}
                                <div class="form-group">
                                    <label for="inputCouponCode" class="col-sm-4 control-label">Mã coupon :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputCouponCode" placeholder="Coupon Code" name="coupon_code" value="{{(Session::has('coupon_code')?Session::get('coupon_code'):'')}}">
                                        {!! (Session::has('coupon_code')?'<a href="javascript:void(0)" id="remove_coupon_code">Remove code</a>':'') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-default">
                                            Apply Coupon
                                        </button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            <!-- Form Ends -->
                        </div>
                    </div>
                    <!-- Discount Coupon Block Ends -->
                </div>
                <!-- Shipping & Shipment Block Ends -->
                <!-- Discount & Conditions Blocks Starts -->
                <div class="col-sm-6">
                    <!-- Conditions Panel Starts -->
                    <div class="panel panel-smart hidden">
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
                                Tổng đơn hàng
                            </h3>
                        </div>
                        <div class="panel-body">
                            <dl class="dl-horizontal">
                                <dt>Giảm giá Coupon :</dt>
                                <dd>{{ generate_discount(Session::get("coupon_discount"),Cart::total(),"GET_DISCOUNT")}} đ</dd>
                            </dl>
                            <hr>
                            <dl class="dl-horizontal total">
                                <dt>Thành tiền đơn hàng :</dt>
                                <dd>{{ generate_discount(Session::get("coupon_discount"),Cart::total(),"GET_PRICE") }} đ</dd>
                            </dl>
                            <hr>
                            <div class="text-uppercase clearfix">
                                <a href="/" class="btn btn-default pull-left">
                                    <span class="hidden-xs">Tiếp tục mua hàng</span>
                                    <span class="visible-xs">Thanh toán</span>
                                </a>
                                <a href="/product/payment" class="btn btn-primary pull-right">
                                    Thanh toán
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


@section('custom_footer')

@endsection