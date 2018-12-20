<!doctype html>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title','laravel-test')-{{config('app.name')}}</title>
<link rel="stylesheet" href="{{mix('/site/css/site.css')}}">

</head>
<body>
<header class="navbar navbar-fixed-top navbar-inverse" id="header">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{route('home')}}" id="header_logo">中维世纪</a>
            <nav>
                <ul class="nav navbar-nav nvabar-right">
                    <li> 帮助</li>
                    <li class="dropdown">登录</li>
                </ul>
            </nav>
        </div>
    </div>

</header>


<div class="col-md-12">
    <footer class="footer">
        <small>
            <img class="brand-icon" src="http://www.jovision.com/images/logo.png">

        </small>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">关于</a></li>
            </ul>
        </nav>
    </footer>
</div>


<script src="{{ mix('site/js/site.js') }}"></script>
</body>
</html>
