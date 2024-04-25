<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{$title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Template Main CSS File -->
  <link href="{{ ASSETS }}/css/style.css" rel="stylesheet">
  <link href="{{ ASSETS }}/css/custom.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
</head>

<body>

  <header>
    <!-- Navigation -->
    <nav>
      <ul>
        <li><a href="{{url('home')}}">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="{{url('registeration/add')}}">Register</a></li>
      </ul>
      <div class="menu-icon" onclick="toggleMenu()"></div>
    </nav>
  </header>

  @yield('content')
  <script>
    function toggleMenu() {
      var navUl = document.querySelector('nav ul');
      navUl.classList.toggle('show');
    }
  </script>

  <!-- Your other scripts here -->

</body>

</html>
