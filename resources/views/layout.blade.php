<html>
<head lang="ru">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Юридические услуги'}}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body class="page">
    <div class="page-wrapper">
        @include('layout/header')
        @yield('baner')
        <div class="content">
            @yield('content')
        </div>
        @include('layout/footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
