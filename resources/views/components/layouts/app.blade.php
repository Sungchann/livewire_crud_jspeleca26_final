<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>{{ $title ?? 'Page Title' }}</title>
    <style>
        .auth-background {
            background: linear-gradient(to bottom right, #6366f1, #9333ea);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .table-header {
            background: linear-gradient(to bottom right, #6366f1, #9333ea);
            color: white !important; 
            font-weight: bold !important;
        }
    </style>
</head>

<body class="{{ $bodyClass ?? '' }}">
    @if($showNav ?? true)
    <x-nav-component />
    @endif

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>