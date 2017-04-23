<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <script>
        window.Laravel = {
            'csrfToken': "{{csrf_token()}}"
        }
    </script>
</head>
<body>
@yield('content')
<script src="/js/app.js"></script>
</body>
</html>