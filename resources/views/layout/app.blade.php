<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Sound Of Kinnaur </title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
 
  </head>
  <body>
  @include('layout.header')

  @yield('content')

  @include('layout.footer')

<!-- JS for Toggle menu -->
<script>
  var MenuItems = document.getElementById("MenuItems");

  MenuItems.style.maxHeight = "0px";

  function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
      MenuItems.style.maxHeight = "200px";
    } else {
      MenuItems.style.maxHeight = "0px";
    }
  }
</script>
<!-- 
js for toggle form -->
<script>
  var LoginForm = document.getElementById("LoginForm");
  var RegForm = document.getElementById("RegForm");
  var indicator = document.getElementById("indicator");

  function register() {
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
  }

  function login() {
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    indicator.style.transform = "translateX(0px)";
  }
</script>
</body>
</html>