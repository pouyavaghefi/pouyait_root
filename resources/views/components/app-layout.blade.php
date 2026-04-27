<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pouya IT - Maatwerk Software & Groei voor MKB</title>
    
    <!-- Fonts: Premium & Modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vite: Tailwind CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- GSAP for Webflow-style animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-blue-100 selection:text-blue-700">
    
    <!-- Header -->
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <!-- Footer Part (Planned for later) -->
    
    <script>
        // Basic GSAP Init
        gsap.registerPlugin(ScrollTrigger);
    </script>
</body>
</html>
