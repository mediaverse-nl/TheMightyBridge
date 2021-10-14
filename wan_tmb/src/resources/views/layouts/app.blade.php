<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" data-turbolinks-eval="false" data-turbo-eval="false">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" data-turbolinks-eval="false" data-turbo-eval="false">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" data-turbolinks-eval="false" data-turbo-eval="false">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" data-turbolinks-eval="false" data-turbo-eval="false">
        @livewireStyles
        @stack('css')
        <title>TMB dashboard</title>
    </head>
    <body>

        <div class="container-fluid bg-dark">
            <div class="container py-1">
                <div class="row">
                    <div class="col-md-12">
                        {{dd(auth()->user()->getVendors())}}
                        <div class="form-inline float-left">
                            <select class="form-control form-control-sm rounded-0">
                                @foreach(auth()->user()->businessUsers as $item)
                                    <option value="">{{ ($item->business->name)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <span class="text-white float-right">
                            Je bent ingelogd als <b>{{auth()->user()->email}}</b>
                            <a class="btn btn-light btn-sm rounded-0 ml-3" href="{{ route('auth.logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Uitloggen
                            </a>
                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" data-turbolinks-eval="false" data-turbo-eval="false" defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" data-turbolinks-eval="false" data-turbo-eval="false"></script>
{{--        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        @stack('js')
    </body>
</html>


{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">--}}
{{--    <!-- Google Fonts -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">--}}
{{--    <!-- Bootstrap core CSS -->--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <!-- Material Design Bootstrap -->--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">--}}

{{--    <title>dashboard</title>--}}
{{--    @stack('css')--}}

{{--    @livewireStyles--}}
{{--</head>--}}
{{--<body>--}}
{{--@yield('content')--}}

{{--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" data-turbolinks-eval="false" data-turbo-eval="false" defer></script>--}}

{{--<!-- JQuery -->--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}
{{--<!-- Bootstrap tooltips -->--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}
{{--<!-- Bootstrap core JavaScript -->--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}
{{--<!-- MDB core JavaScript -->--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}

{{--@livewireScripts--}}
{{--<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}

{{--@stack('js')--}}
{{--</body>--}}
{{--</html>--}}
