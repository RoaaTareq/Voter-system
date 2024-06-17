<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        @yield('content')
    </div>
    <!-- <footer>
        @yield('footer')
</footer> -->
</body>
</html>