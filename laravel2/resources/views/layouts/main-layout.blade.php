<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Layout</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>

    <div class="container">

      @include ('components.header')

      <main>
       @yield('content')
      </main>

      @include ('components.footer')  

    </div>

  </body>
</html>
