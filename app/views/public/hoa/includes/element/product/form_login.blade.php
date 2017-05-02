<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
    <input id="password" type="password" class="form-control" name="password">
    <input type="checkbox" name="remember"> Remember Me
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i> Login
    </button>
</form>