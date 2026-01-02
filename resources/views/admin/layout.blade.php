<html lang="mn">
<head>
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="nogto">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <title>Adminpanel | Эрүүл мэндийг дэмжих жил 2027</title>
    <link href="/images/favicon.png" rel="shortcut icon" type="image/png" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
</head>
<body class="adminpanel">
    <div class="admin_header">
        <div class="section_container">
            <div class="dcsb">
                <ul>
                    <li><a href="/admin/users">Admin</a></li>
                    <li><a href="/admin/feedback">Feedback</a></li>
                    <li><a href="/admin/news/list">News</a></li>
                </ul>
                <div class="admin_hr">
                    <ul>
                        <li><a href="/">Сайт харах</a></li>
                        <li><a href="{{ route('logout') }}">Гарах</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>
