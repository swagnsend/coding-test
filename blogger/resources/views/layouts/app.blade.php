<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Header/Navbar -->
    <header class="bg-white shadow mb-8">
        <div class="container mx-auto flex justify-between items-center px-6 py-5">
            <a href="{{ url('/') }}" class="text-3xl font-extrabold text-indigo-700 tracking-tight">Blog</a>
            <nav class="space-x-6">
                <a href="{{ url('/') }}" class="hover:text-indigo-700 transition font-medium">Dashboard</a>
                {{--  <a href="{{ url('/blogs') }}" class="hover:text-indigo-700 transition font-medium">Blogs</a>  --}}
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 mt-10">
        <div class="container mx-auto text-center text-gray-400 font-medium">
            © {{ date('Y') }} Power By SwagnSend.
        </div>
    </footer>
</body>
</html>
