<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('dashboard/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashboard/responsive_styles.css')}}" type="text/css">
</head>
<body>
    
    <div class="container">

        @yield('navigation')

        <div class="main">

            @include('layouts.dashboard-layout-topbar')

            <!-- Cards -->
            @include('layouts.dashboard-layout-cards')

            <!-- Data list -->
            @include('layouts.dashboard-layout-datalist')

        </div>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('dashboard/func.js')}}"></script>

</body>
</html>