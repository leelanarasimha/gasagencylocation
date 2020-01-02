<!doctype html>
<html>
<head>
<link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
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
