<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>DAGG PROJECT</title>
    <script src="https://kit.fontawesome.com/625947fae4.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar /> 

    {{ $slot }}
    
    
</body>
</html>