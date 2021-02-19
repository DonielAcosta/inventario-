<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inventario- @yield("title")</title>
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}

    <link href="/css/bootstrap.min.css" rel="stylesheet">


<link href="/css/modulovertical.css" rel="stylesheet">
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/fondos.css"rel="stylesheet" >
<link href="/css/all.css" rel="stylesheet"> <!--load all styles -->

 <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
    }
</style>
</head>
<body>
    @include('Templade.navbar')
    @auth
        @include('Templade.sidebar')
    @else
        @yield("body")
    @endauth
    <script src="/js/popper.min.js"></script> 
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/dashboard.js"></script>
</body>
</html>
