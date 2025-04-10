<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Direct link to compiled CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Direct link to compiled JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
