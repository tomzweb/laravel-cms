<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Laravel CMS</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12">
                @include('partials.navigation')
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8 ">
                @yield('content')
            </div>
            <div class="col-m-4">
                @include('partials.sidebar')
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
