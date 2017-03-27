<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/vue2.js"></script>
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