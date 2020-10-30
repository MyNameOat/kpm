<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | E-commerce</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

@yield('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-content" style="text-align: center;">
                    <img src="/img/menu/shop.png" style="width: 15%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="/img/menu/listproduct.png" style="width: 15%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('shop.add-product') }}">
                    <img src="/img/menu/addproduct.png" style="width: 15%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a>
                    <img src="/img/menu/basket.png" style="width: 15%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('shop.add-product') }}">
                    <img src="/img/menu/setting.png" style="width: 15%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>

</body>

</html>
