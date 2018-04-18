<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._navbar')
    
    @yield('navbar')

    <div class="container">
      <div class="row">
        <h1>Dobrodošli na web stranicu frizerskog salona</h1>
      </div>
    </div>
    
    @include('partials._scripts')
    @yield('scripts')
  </body>
</html>