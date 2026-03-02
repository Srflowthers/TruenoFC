<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trueno FC - Team Manager</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,600,700|inter:400,500,600,700,800,900" rel="stylesheet" />

    <!-- Estilos de Tailwind CSS vía CDN para asegurar que el diseño funcione independientemente del build local -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        title: ['Oswald', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            black: '#0a0a0a',
                            red: '#CF142B',
                            darkred: '#991B1B'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body
    class="bg-brand-black text-white min-h-screen flex flex-col relative overflow-x-hidden selection:bg-brand-red selection:text-white">
    <!-- Elementos Decorativos de Fondo -->
    <div class="fixed inset-0 z-0 pointer-events-none opacity-80">
        <!-- Luz Superior Roja -->
        <div class="absolute top-[-20%] right-[-10%] w-[60%] h-[60%] bg-brand-red/20 blur-[120px] rounded-full"></div>
        <!-- Luz Inferior Roja Oscura -->
        <div class="absolute bottom-[-20%] left-[-10%] w-[50%] h-[50%] bg-brand-darkred/20 blur-[100px] rounded-full">
        </div>

        <!-- Recorte Diagonal Deportivo -->
        <div
            class="absolute top-0 right-0 w-1/3 h-full bg-[#111] transform skew-x-[-15deg] origin-top-right border-l-[10px] border-brand-red/30">
        </div>
    </div>

    <!-- Encabezado / Navegación -->
    <header class="w-full flex justify-between items-center p-6 md:p-10 z-10 relative">
        <div class="flex items-center">
            <!-- Escudo TFC (Placeholder) -->
            <div
                class="flex items-center justify-center bg-brand-red w-12 h-12 skew-x-[-10deg] shadow-[4px_4px_0_rgba(255,255,255,0.1)]">
                <span class="font-title font-bold italic text-xl skew-x-[10deg] tracking-tighter">TFC</span>
            </div>
            <!-- Si tienes el logo, usa: <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-auto"> -->
        </div>

        @if (Route::has('login'))
            <nav class="flex gap-4 items-center">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="uppercase tracking-widest text-xs md:text-sm font-bold border border-brand-red/50 hover:border-brand-red hover:bg-brand-red hover:text-white transition px-4 py-2 md:px-6 md:py-3 skew-x-[-10deg]">
                        <span class="inline-block skew-x-[10deg]">Dashboard</span>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="uppercase tracking-widest text-xs md:text-sm font-bold border border-brand-red/50 hover:border-brand-red hover:bg-brand-red hover:text-white transition px-4 py-2 md:px-6 md:py-3 skew-x-[-10deg]">
                        <span class="inline-block skew-x-[10deg]">Ingresar</span>
                    </a>
                @endauth
            </nav>
        @endif
    </header>

    <!-- Contenido Principal -->
    <main class="flex-grow z-10 flex flex-col justify-center px-6 md:px-16 lg:px-32 xl:-mt-10 relative">
        <div class="max-w-5xl relative">
            <h4
                class="text-brand-red uppercase tracking-[0.3em] text-sm md:text-base font-semibold mb-4 border-l-4 border-brand-red pl-3 animate-pulse">
                Sistema de Gestión · Fútbol
            </h4>

            <h1
                class="font-title text-[4.5rem] leading-[1] md:text-8xl lg:text-[9rem] font-bold italic uppercase mb-2 text-white drop-shadow-[4px_4px_0_#991B1B]">
                TRUENO FC
            </h1>

            <h2
                class="text-3xl md:text-5xl font-extrabold uppercase tracking-tight text-gray-200 mb-8 mt-2 bg-gradient-to-r from-brand-red/30 to-transparent py-2 pl-4 border-l-8 border-brand-red">
                TEAM MANAGER
            </h2>

            <div
                class="inline-block bg-[#111] border border-brand-darkred/50 py-3 px-6 shadow-2xl relative overflow-hidden group">
                <div class="absolute inset-0 bg-brand-red opacity-0 group-hover:opacity-10 transition duration-500">
                </div>
                <p class="text-gray-300 uppercase tracking-widest text-xs md:text-sm font-bold">
                    <span class="text-brand-red">Etapa 1</span> <span class="mx-2 text-gray-600">·</span> Partidos &
                    Entrenamientos
                </p>
            </div>

            <div class="mt-14 flex items-center gap-6">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="bg-brand-red text-white font-black text-lg py-4 px-10 uppercase tracking-widest transition-all hover:bg-red-500 shadow-[0_0_20px_rgba(207,20,43,0.3)] hover:shadow-[0_0_30px_rgba(207,20,43,0.5)] skew-x-[-10deg] inline-block group">
                        <span class="inline-block skew-x-[10deg] group-hover:scale-105 transition-transform">Ir al
                            Tablero</span>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="bg-brand-red text-white font-black text-lg py-4 px-10 uppercase tracking-widest transition-all hover:bg-red-500 shadow-[0_0_20px_rgba(207,20,43,0.3)] hover:shadow-[0_0_30px_rgba(207,20,43,0.5)] skew-x-[-10deg] inline-block group">
                        <span class="inline-block skew-x-[10deg] group-hover:scale-105 transition-transform">Acceder al
                            Sistema</span>
                    </a>
                @endauth
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <div
        class="mt-auto z-10 flex border-t border-brand-darkred/30 bg-[#050505] p-6 text-[10px] md:text-xs text-gray-500 uppercase tracking-widest text-center justify-center md:justify-between items-center opacity-70">
        <div>Trueno FC Management System &copy; {{ date('Y') }}</div>
        <div class="hidden md:block font-bold mt-2 md:mt-0 text-gray-400">Forza Trueno</div>
    </div>
</body>

</html>