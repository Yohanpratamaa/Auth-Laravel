<!DOCTYPE html>
<html>
<head>
    <title>App Name</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    @yield('content')
    <script>
        @if(session('error'))
            Swal.fire('Error', '{{ session('error') }}', 'error');
        @endif
    </script>
</body>
</html>
