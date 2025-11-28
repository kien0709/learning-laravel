<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .planet {
            background-color: white;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .planet-name {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .planet-description {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <h1>Planets in Our Solar System</h1>
    
    @foreach($planets as $planet)
        <div class="planet">
            <div class="planet-name">{{ $planet['name'] }}</div>
            <div class="planet-description">{{ $planet['description'] }}</div>
        </div>
    @endforeach
</body>
</html>
