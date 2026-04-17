<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-slate-900 text-white">
<nav id="navbar" class="w-full fixed top-0 left-0 z-50 transition-all duration-300">

    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

        <h1 class="text-sm md:text-lg font-bold">My Portfolio</h1>

        <!-- DESKTOP -->
        <div class="hidden md:flex space-x-6">
            <a href="index.php?url=home" class="hover:text-cyan-400">Home</a>
            <a href="index.php?url=project" class="hover:text-cyan-400">Projects</a>
            <a href="index.php?url=contact" class="hover:text-cyan-400">Contact</a>
        </div>

        <!-- MOBILE -->
        <button id="menu-btn" class="md:hidden text-2xl">
            ☰
        </button>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" 
         class="hidden md:hidden flex flex-col bg-slate-800 px-6 py-4 space-y-3 shadow-lg border-t border-gray-700">
        <a href="index.php?url=home" class="py-2 hover:text-cyan-400">Home</a>
        <a href="index.php?url=project" class="py-2 hover:text-cyan-400">Projects</a>
        <a href="index.php?url=contact" class="py-2 hover:text-cyan-400">Contact</a>
    </div>

</nav>