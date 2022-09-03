
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- head -->
    @include('backend.includes.head')

    <!-- vendor css -->
    @include('backend.includes.css')
  
  </head>

  <body>

    <!-- sidebar -->
    @include('backend.includes.sidebar')

  <!-- topbar -->
  @include('backend.includes.topbar')
 <!-- rightbar -->
 @include('backend.includes.rightbar')

   <!-- main -->
@yield('content')
   <!-- js script file -->
   @include('backend.includes.js')
  </body>
</html>
