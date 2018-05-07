<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')
    <title>Salon @yield('title')</title>
  </head>
  <body>
    @include('partials._navbar')

    <div class="container">
      
      @yield('content')
      
    </div>
    
    @include('partials._scripts')
    @yield('scripts')
  </body>
</html>