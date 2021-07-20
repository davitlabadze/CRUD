<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @include('layouts.partials.styles')
  </head>
  <body>
    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
          @yield('content')
        </div>
      </div>
    </main>
  </body>
</html>