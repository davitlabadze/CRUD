<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
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

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>{{ config('my.footer_text_1') }}</p>
        <p>{{ config('my.footer_text_2') }}</a></p>
      </div>
    </footer>

   @include('layouts.partials.scripts')
  </body>
</html>