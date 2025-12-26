<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reece Farms</title>

    
    <link rel="stylesheet" href="{{ asset('dashboard/Sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/Topbar.css') }}">

    @stack('styles')
</head>
<body>

    
    @include('components/sidebar')

    
    @include('components/topbar')

    
    <main class="content">
        @yield('content')
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')

</body>
</html>
