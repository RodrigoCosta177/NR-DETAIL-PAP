<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR DETAIL</title>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- VIDEO DE FUNDO -->
    <video autoplay muted loop class="fixed top-0 left-0 w-full h-full object-cover -z-10">
        <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
    </video>

    <!-- OVERLAY ESCURO (opcional para dar mais contraste) -->
    <div class="fixed top-0 left-0 w-full h-full bg-black/40 -z-10"></div>

    <!-- NAVBAR -->
    <nav class="bg-black/70 backdrop-blur text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">NR DETAIL</h1>

            <ul class="flex gap-6">
                <li><a href="/" class="hover:text-yellow-400">Início</a></li>
                <li><a href="/servicos" class="hover:text-yellow-400">Serviços</a></li>
                <li><a href="/agendamentos" class="hover:text-yellow-400">Agendamentos</a></li>
                <li><a href="/clientes" class="hover:text-yellow-400">Clientes</a></li>
                <li><a href="/stands" class="hover:text-yellow-400">Stands</a></li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</body>

</html>
