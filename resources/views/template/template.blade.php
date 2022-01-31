<html>
    <head>
        <title>@yield('Titulo')</title>
        <meta charset="utf-8">
        <style>
            *{
                outline: 0;
                margin: 0;
                padding: 0;
            }
          body{
              background: #acacac;
              font-family: Lelawadee UI;
          }
          nav{
            display: flex;
            justify-content: space-around;
            height: 60px;
            width: 100%;
            background: #fff;
            padding: 5px;
          }
          #btn-success {
              height:33px;
              text-align:center;
              padding:-3px 0px 2px 0px;
          }
           </style>
          <link rel="stylesheet" src="">
          <link rel="stylesheet" type="text/css" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
       
    </head>

    <body>
        <nav>
            <h3>Crud with Laravel</h3>
            <p><strong>Laravel-sass-Bootstrap-responsive-mysql-jquery</strong> <a href="{{ route('app-index') }}"  class="btn btn-success" id="btn-success"> back </a></p>
        </nav>
         @yield('content')

    </body>
</html>