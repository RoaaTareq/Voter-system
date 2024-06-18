<!DOCTYPE html>
<html lang="en" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link rel='stylesheet' href="{{ asset('/css/question.css') }}"/>
<title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">صوّت</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> الصفحة الرئسية</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        قائمة الأحزاب
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">مساواة الأردني</a>
          <a class="dropdown-item" href="#">الشعب الديمقراطي الاردني (حشد)</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">النهج الجديد</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>
          <a class="dropdown-item" href="#">القدوة الأردني</a>

          
      </li>
     
    </ul>
    
  </div>
</nav>
    <img src="{{ asset('asset/layout.svg') }}" alt='banner' class='banner' width='100%'/>


    <div class="content">
        @extends('Question.Question')
    </div>
    <!-- <footer>
        @yield('footer')
</footer> -->
</body>
</html>