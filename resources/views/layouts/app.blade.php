<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ERP Dashboard')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
</head>
<body>

    <div class="main-container">
        {{-- Sidebar --}}
        @include('partials.sidebar')
        {{-- Main Content --}}
        <main class="main-content">
            <div style="display: flex; flex-direction: column; gap: 24px;">
                {{-- header --}}
                @include('partials.header')

                @yield('content')
            </div>
        </main>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
