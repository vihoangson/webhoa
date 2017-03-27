@extends('public.didong.layouts.no_sidebar')
@section('content')
    <h1>Payment</h1>
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
                            <input type="text" class="form-control" id="inputZipCode" placeholder="">
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
                    <div class="form-group">
                        <label for="inputFname" class="col-sm-3 control-label">Họ tên :</label>
                        <div class="col-sm-9">
                            <input type="text" required="required" name="name" class="form-control" id="inputFname" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="email" required="required" name="email" class="form-control" id="inputEmail" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress1" class="col-sm-3 control-label">Điện thoại :</label>
                        <div class="col-sm-9">
                            <input type="tel" required="required" name="tel" class="form-control" id="inputAddress1" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress1" class="col-sm-3 control-label">Địa chỉ :</label>
                        <div class="col-sm-9">
                            <input type="text" required="required" name="address" class="form-control" id="Address" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputCity" class="col-sm-3 control-label">Thành phố :</label>
                        <div class="col-sm-9">
                            <input type="text" required="required" name="city" class="form-control" id="inputCity" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-main">
                                Hoàn tất
                            </button>
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