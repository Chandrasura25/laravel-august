<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    {{-- <nav class="nav bg-dark nav-fill">
        <li class="nav-item">
            <a href="#" class="nav-link active">Item 1</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link active disabled" tabindex="-1" aria-disabled="true">Item 2</a>
        </li>
    </nav> --}}
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <div class="container-fluid">
                <div class="mx-auto">
                    <h4 class="text-center fw-bold display-5 text-light">TODO APP</h4>            
                </div>
            </div>
        </nav>
    @yield('content')
    <script src="/js/bootstrap.js"></script>
</body>
</html>