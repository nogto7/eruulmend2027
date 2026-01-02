<html lang="mn">
<head>
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="nogto">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <title>Нүүр | Эрүүл мэндийг дэмжих жил 2027</title>
    <link href="/images/favicon.png" rel="shortcut icon" type="image/png" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
</head>
<body>
    <nav>
        <div class="nav_content">
            <div class="header_content">
                <div class="logo_container">
                    <a href="/" class="em_logo"><span></span><div class="slogan">Эрүүл мэнд <strong>2027</strong></div></a>
                </div>
                <ul>
                    <li><a href="/">Нүүр хуудас</a></li>
                    <li><a href="/about">Бидний тухай</a></li>
                    <li><a href="/news">Мэдээ</a></li>
                </ul>
            </div>
            <div class="header_right">
                <a class="em_button btn_primary" href="#feedback" class="page-scroll">Санал өгөх</a>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="footer_wrap">
        <div class="section_container">
            <p>© 2025 | Эрүүл Монгол Хүний төлөө. Эрүүл мэндийг дэмжих жил 2027 санаачилга</p>
        </div>
    </footer>
    @include('components.toast')

    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
