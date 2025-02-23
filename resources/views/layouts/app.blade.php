<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Task List App</title>
    @yield('style')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <h1>@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>


</body>

</html>
