<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 8 Testing</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <header style="width: 100%; color: white; background:gray; padding:20px; text-align:center;">
            Header
        </header>
        <div class="flex p-4">
            <aside class="w-1/4">
                sidebar
            </aside>
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('custom-js')
</html>
