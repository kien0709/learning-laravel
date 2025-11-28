<!DOCTYPE html>
<html>
<head>
    <title>{{ $planet->name }}</title>
</head>
<body>
    <h1>{{ $planet->name }}</h1>

    <p><strong>Diameter:</strong> {{ $planet->diameter ?? 'Onbekend' }} km</p>
    <p><strong>Afstand tot de zon:</strong> {{ $planet->distance_from_sun ?? 'Onbekend' }} miljoen km</p>

    <p><a href="{{ url('/planets') }}">← Terug naar overzicht</a></p>
</body>
</html>
