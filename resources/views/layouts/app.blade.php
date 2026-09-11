<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'DALOY — tigil. hinga. kalma.')</title>
<meta name="description" content="@yield('description', 'A quiet current in the middle of Lumban — coffee poured slow, for the moments you let yourself stop.')">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@yield('content')

</body>
</html>
