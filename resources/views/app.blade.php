<!doctype html>
<html>
<head>
<link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmS8OY0x-yUU00WFnnmXxdxEqdbgQNyqA
&callback=intializeMap"
  type="text/javascript"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gas Agency</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{url('consumers')}}">Consumers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('users')}}">Users</a>
            </li>
          </ul>

          <ul class="navbar-nav">

              <li class="nav-item">
                  <a href="{{url('logout')}}" class="nav-link">Logout</a>
              </li>
          </ul>


        </div>
      </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('partials.messages')
                @yield('content')
            </div>
        </div>

    </div>
</body>
</html>
