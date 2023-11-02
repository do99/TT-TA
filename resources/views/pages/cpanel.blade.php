
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/assets/img/tt2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tempat Transit | CPanel</title>

    {{-- ===== Styles CSS ===== --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ '/assets/css/style.css' }}">
    <link rel="stylesheet" href="{{ '/assets/css/tailwind.css' }}">


</head>
{{-- <body> --}}
    {{-- ============= Navigation ============== --}}
    
    @include('layouts/sidebar')
        {{-- ==== Main ==== --}}
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>
            
                <div class="search">
                    <label for="">
                        <input type="tex" placeholder="Search Here">
                        <ion-icon name="search"></ion-icon>
                    </label>
                </div>
            
                <div class="user">
                    <img src="/assets/img/finn.jpg" alt="">
                </div>
            </div>
                @yield('content')
                {{-- @include('pages/client') --}}
        </div>

    {{-- ==== Script ==== --}}
    <script src="{{'/assets/js/jquery.js'}}"></script>
    <script src="{{'/assets/js/jquery-datatables.js'}}"></script>
    {{-- <script src="{{'/assets/js/datables.js'}}"></script> --}}
    {{-- <script src="{{'/assets/js/tailwindcss.js'}}"></script> --}}


    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="/assets/js/main.js"></script>
        <script>
            new DataTable('#example');
        </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
{{-- </body> --}}
</html>