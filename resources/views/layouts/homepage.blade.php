<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title_page","Home page")</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('custom_header')
</head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Cover</h3>

                    <ul class="nav masthead-nav">
                        <li class="active">
                            <a href="http://bootsnipp.com/iframe/g6GWQ" target=
                            "_blank">View full screen</a>
                        </li>

                        <li>
                            <a href="#">Features</a>
                        </li>

                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="inner cover">
                @yield('content')
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <!-- Validation -->

                    <p><a href=
                          "http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fg6GWQ"
                          target="_blank"><small>HTML</small><sup>5</sup></a></p>


                    <p><a href=
                          "https://github.com/twbs/bootlint"
                          target="_blank"><small>Checked with Bootlint</small></a></p>



                    <p>© 2014 Your Name ~ <a href=
                                             "http://getbootstrap.com/">Bootstrap</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    @yield('custom_footer')
</body>
</html>