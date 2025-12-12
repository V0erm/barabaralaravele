<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fashion Magazine</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="p-4 bg-white shadow">
        <a href="/" class="font-bold">Home</a>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</body>
</html>
