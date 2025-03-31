<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <title>TUGAS 1</title>
</head>
<body>
    @if (session('notif'))
    <div class="bg-blue-700 text-white p-3 rounded mb-4 text-center">
        {{ session('notif') }}
    </div>
@endif
<script>
    setTimeout(() => {
        document.querySelector('.bg-blue-700')?.remove();
    }, 3000);
</script>

    @yield('content')
</body>
</html>