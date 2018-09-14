<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZAG</title>
    <link rel="stylesheet" href="{{asset('css/ini.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/import.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <script src="{{asset('js/jquery.min.js')}}"></script>
</head>
<body>
<nav class="navbar is-transparent navbar-app">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{url('/')}}">
      <img src="{{asset('img/logo.png')}}" alt="">
    </a>
    <div class="navbar-burger burger" data-target="#menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="menu" class="navbar-menu">
    <div class="navbar-end">
        <a class="navbar-item" href="#bio">
            Biodata
        </a>
        <a class="navbar-item" href="#bio">
            Visi - Misi
        </a>
        <a class="navbar-item" href="#bio">
            Galery
        </a>
    </div>
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="button is-primary btn-app" href="https://github.com/jgthms/bulma/releases/download/0.7.1/bulma-0.7.1.zip">
              <span class="font-14">Daftar</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>
    @yield('content')
    <script src="{{asset('js/ini.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
</script>
</body>
</html>