@if (session('isLogged') == "true" && session('user') == "customer")
    <!DOCTYPE html>
    <html lang="en">
    <head>
        @yield('header')
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        @yield('body')
    </body>
    </html>
@else
   <script> location.href='login'; </script>
@endif
