@extends('public.'.$template_name.'.layouts.inside')

@section('title_page')Liên hệ@endsection

@section('keyword_page'){{$group->keyword or 'Xem ngay mua ngay'}}@endsection

@section('description_page'){{$group->descripton or 'Xem ngay mua ngay'}}@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render('contact') !!}
@endsection
@section('content')
    <!-- Starts -->
    <div class="row">
        <!-- Contact Details Starts -->
        <div class="col-sm-4">
            <div class="panel panel-smart">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('common.Contact Details')</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled contact-details">
                        <li class="clearfix">
                            <i class="fa fa-home pull-left"></i>
                            <span class="pull-left">
									My Company <br />
									1247 LB Nagar Road, Hyderabad, <br />
									Telangana - 500 035
								</span>
                        </li>
                        <li class="clearfix">
                            <i class="fa fa-phone pull-left"></i>
                            <span class="pull-left">
									91 99887 74455 <br />
									001 123 974 9856
								</span>
                        </li>
                        <li class="clearfix">
                            <i class="fa fa-envelope-o pull-left"></i>
                            <span class="pull-left">
									info@demolink.com <br />
									admin@demolink.com <br />
									support@demolink.com
								</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Contact Details Ends -->
        <!-- Contact Form Starts -->
        <div class="col-sm-8">
            <div class="panel panel-smart">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('common.Send us a mail')</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'contact.process', 'method' => 'post','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                                @lang('common.Name')
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="@lang('common.Name')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">
                                Email
                            </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="col-sm-2 control-label">
                                @lang('common.Subject')
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="@lang('common.Subject')">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">
                                @lang('common.Message')
                            </label>
                            <div class="col-sm-10">
                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="@lang('common.Message')"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">

                            </label>
                            <div class="col-sm-10">
                                <div class="g-recaptcha" data-sitekey="6LeMRyEUAAAAAFijB-ZfJndPEXaEA-FHkRCZr2y4"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary text-uppercase">@lang('common.Submit')</button>
                                @if(App::environment('local'))
                                    <button type="button" class="btn btn-danger auto-fill">Auto fill</button>
                                    <div>Lưu ý email gửi bằng mail trap</div>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- Contact Form Ends -->
    </div>
@endsection


@section('custom_footer')

@endsection