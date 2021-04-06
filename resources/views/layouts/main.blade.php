<!doctype html>
<html>
   <head>
     <meta charet="UTF-8" />
     <link rel="stylesheet" type="text/css"
           href="{{ asset('css/style.css') }}"/>
     <title>@yield('title')</title>
   </head>

   <body>
     <header>
        <h1>@yield('title')</h1>
     </header>
     <main>
        @yield('content')
     </main> 
     <footer>
        <br />
        &#xA9; Copyright Week-06, 2020 Tanaporn's Controller.
     </footer>
    </body>
    
</html>