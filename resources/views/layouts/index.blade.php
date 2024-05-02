<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <title>Document</title>

</head>

<body >
    <div class="flex  ">
        <div class="flex lg:flex-col sm:flex-row bg-slate-200 w-[15vw] h-[100vh] fixed">
            <h1 class="p-6 text-2xl ">MY TO DO LIST</h1>
            <ul class="h-[25%] flex lg:flex-col sm:flex-row  p-6 justify-between text-xl ">
                <li > <i class="fa-solid fa-house"></i> <a class="no-underline text-black px-2" href="{{ route('home.index') }}">Home</a></li>
                <li><i class="fa-solid fa-calendar"></i><a class="no-underline text-black px-3" href="{{ route('calendar') }}">Calendar</a></li>
                <li><i class="fa-solid fa-user"></i><a class="no-underline text-black px-3" href="{{ route('profile') }}">Profile</a></li>
            </ul>
            <p class="flex flex-col h-[60%] justify-end text-center text-sm px-10">Copyright &copy; <?php echo date('Y'); ?>
                IMANE NEJMAOUI</p>
        </div>

    </div>


    @yield('content')
</body>

</html>
