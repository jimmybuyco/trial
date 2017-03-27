<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<div class="header">
    @include('layouts.default.header')
</div>

<div class="container">
    @yield('content')
</div>

<div class="footer">
    @include('layouts.default.footer')
</div>
</body>
</html>
<style>
    html, body {
        margin: 0;
        padding: 0;
        min-height: 100%;
        width: 100%;
        font-family: Tahoma;
    }
    body {
        background-color: rgb(245, 243, 246);


    }
    .header{
        padding: 10px 10px 10px 50px;
        /*height: 50px;*/
        color: white;
        background-color: rgb(2,185,141);

    }

    .footer {
        padding: 5px 5px 5px 5px;
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: black;
        text-align: center;
        color:white;
    }
</style>