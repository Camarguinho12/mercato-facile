<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>{{ $title ?? 'Mercato facile' }}</title>
    </head>
    <body>
        
        <div class="min-h-screen w-full flex flex-col items-center justify-center bg-gradient-to-tr from-emerald-500 to-emerald-100">
        
            <div class="flex flex-col rounded bg-white p-4 w-[320px]">
                <a href="#" class=""><-</a>

                <h1 class="text-center">Ti diamo il benvenuto!</h1>
            </div>

        </div>

    </body>
</html>