<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BasicWebsite</title>
  <link rel="stylesheet" href="/css/app.css">
  <linl rel="js" href="/css/app.js">
</head>
<body>
  @include('inc.navbar')
<br>
<div class="container-fluid">
  @if(\Request::is('home'))
     @include('inc.showcase')
     @endif
  <div class="row">
  <div class="col-md-8 col-lg-8" >
    @include('inc.messages')
    @yield('content')
  </div>
  <div class="col-md-4 col-lg-4">
    @include('inc.sidebar')
  </div>
</div>
</div>
<footer id="footer" class="text-center">
<p>Copyright 2019 &copy; BasicWebsite</p>
</footer>

</body>
</html>
