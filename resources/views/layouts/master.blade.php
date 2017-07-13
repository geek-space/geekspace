<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HEAD TAGS -->
    @include('partials.head')
</head>
<body>
    <!-- NAVBAR -->
    @include('partials.navbar')

    <!-- PAGE CONTENT -->
    @yield('content')
    
    <!-- JS SCRIPTS -->  
    @include('partials.common_js')
</body>
</html>