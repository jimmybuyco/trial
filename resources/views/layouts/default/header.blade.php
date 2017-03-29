<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vue2.js"></script>
    <script src="js/vue-resource.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top jimmy-navbar navbar-xs">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Jimmy Theme</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bill</a></li>
            <li><a href="#">Biller</a></li>
            <li><a href="#">Category</a></li>
        </ul>
    </div>
</nav>
