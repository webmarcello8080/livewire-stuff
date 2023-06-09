<!DOCTYPE html>
    <html lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        @livewireStyles

        <title>{{ config('app.name') }} - @yield('title')</title>
    </head>
    <body>
        <main>
            @yield('content')
        </main>

        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>