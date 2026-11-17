<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="min-h-screen flex flex-col items-center justify-center px-4 py-16 text-center antialiased bg-[radial-gradient(ellipse_at_bottom_right,_#f9a8d4_0%,_#fecdd3_30%,_#f1f5f9_75%)]">

    <nav class="fixed top-6 inset-x-0 z-50 flex justify-center px-4">
        <ul
            class="inline-flex items-center gap-1 p-1.5 bg-white/80 backdrop-blur-md rounded-full shadow-sm border border-slate-100">
            <li>
                <a href="/"
                    class="block px-4 py-1.5 text-xs font-semibold text-[#0f172a] rounded-full transition-colors">
                    HomePage
                </a>
            </li>
            <li>
                <a href="/about"
                    class="block px-4 py-1.5 text-xs font-medium text-slate-600 hover:text-[#0f172a] hover:bg-slate-50 rounded-full transition-colors">
                    About
                </a>
            </li>
        </ul>
    </nav>
    <main class="max-w-3xl mx-auto flex flex-col items-center">
        @yield('content')

    </main>


</body>

</html>