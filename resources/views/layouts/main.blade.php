<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script>
        window.Laravel = {
            'csrfToken': "{{csrf_token()}}"
        }
    </script>
    <title>Kevin Coyle - Freelance Development Consultant</title>
</head>
<body>
@yield('content')
<script src="/js/app.js"></script>
</body>
</html>