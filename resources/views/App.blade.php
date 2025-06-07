<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>{{ $pageTitle ?? 'Gestion d’État Civil - Antehiroka' }}</title>
<link rel="icon" href="{{ asset("Assets/Images/Logo Antehiroka final.ico") }}" type="image/png" />
@yield("style")
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen font-sans">
@yield("body")

</body>
</html>
