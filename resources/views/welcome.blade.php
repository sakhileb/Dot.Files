<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dot.Files</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
</head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                    <ul class="navbar-nav">
                        @if (Route::has('login'))

                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                </li>
                                
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link"><b>Login</b></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link"><b>Register</b></a>
                                    </li>
                                @endif
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="">
                <div class="page-header-image" data-parallax="true" style="background-image: url('img/header1.jpg');">
                </div>
                <div class="container">
                    <div class="content-center brand">
                        <img class="n-logo img-responsive" src="img/logo.png" alt="logo" style="width: 300px;">
                        <!-- <h1 class="h1-seo hidden">Dot.Files</h1> -->
                        <h2></h2>
                        <h3 class="h3-seo" style="color: #f1c62d;">
                            Mini Storage Management
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <!-- <li>
                            <a href="http://www.skdigital.blupininc.co.za">
                                SK Digital
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="http://www.blog.skdigital.co.za" disabled="true">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#" disabled="true">
                                Terms &amp; Conditions
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <div class="copyright">
                    Dot.Files Is A Product Of InfoDot.
                </div>
            </div>
        </footer>
    </body>
</html>

