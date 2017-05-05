<div class="sidebar-box">

    <h5>Đăng ký nhận tin</h5>
    {!! Form::open(['url' => '/register_email', 'method' => 'POST','class'=>'form-horizontal', 'files' => false]) !!}
        <input type="email" name="email" class="form-control" placeholder="E-mail">
        <small class="help-block">*Chúng tôi không bao giờ spam</small>
        <input type="submit" class="btn btn-primary" value="Đăng ký">
    {!! Form::close() !!}
</div>