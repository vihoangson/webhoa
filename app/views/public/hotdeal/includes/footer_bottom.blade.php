<footer class="main" id="main-footer">
    <div class="footer-top-area">
        <div class="container">
            <div class="row row-wrap">
                <div class="col-md-3">
                    <a href="/assets/themes/remtsoy/index.html">
                        <img src="/assets/themes/remtsoy/img/logo.png" alt="logo" title="logo" class="logo">
                    </a>
                    <ul class="list list-social">
                        <li>
                            <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                        </li>
                        <li>
                            <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                        </li>
                        <li>
                            <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                        </li>
                        <li>
                            <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                        </li>
                    </ul>
                    <p>{{get_setting('footer_content','string')}}</p>
                </div>
                <div class="col-md-3">
                    <h4>Đăng ký nhận email</h4>
                    <div class="box">

                        {!! Form::open(['url' => '/register_email', 'method' => 'POST','class'=>'form-horizontal', 'files' => false]) !!}
                            <div class="form-group mb10">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name = 'email' />
                            </div>
                            <p class="mb10">*Chúng tôi không bao giờ spam</p>
                            <input type="submit" class="btn btn-primary" value="Đăng ký" />
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Couponia on Twitter</h4>
                    <!-- START TWITTER -->
                    <div class="twitter-ticker" id="twitter-ticker"></div>
                    <!-- END TWITTER -->
                </div>
                <div class="col-md-3">
                    <img src="/assets/images/dathongbao.png">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright © 2014, Your Store, All Rights Reserved</p>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <div class="pull-right">
                        <ul class="list-inline list-payment">
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/american-express-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/cirrus-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/discover-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/ebay-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/maestro-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/mastercard-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="/assets/themes/remtsoy/img/payment/visa-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>