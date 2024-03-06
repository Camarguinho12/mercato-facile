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
        
        <div class="min-h-screen w-full flex flex-col items-center justify-center bg-gradient-to-tr from-emerald-500 to-emerald-200">
        
            <form action="{{route('register')}}" method="POST" class="flex flex-col rounded-3xl bg-white p-8 w-full sm:w-[420px]">
                @csrf

                <div class="mb-2">
                    <a href="{{route('homepage')}}"><i class="fa-solid fa-house text-2xl"></i></a>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <img class="w-28" src="/images/form-register.png" alt="">

                    <h1 class="text-center text-2xl w-60 mb-2">Comprare e vendere su Mercato Facile</h1>

                    <p class="text-center opacity-60 w-80">
                        Ottenete i prezzi migliori e guadagnate con ciò che non utilizzate.
                    </p>
                </div>

                <div class="relative flex flex-col my-6">
                    <input type="name" name="name" id="name" value="{{old('name')}}" class="peer h-16 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('name') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="name" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('name') peer-focus:text-red-400 @enderror">Nome</label>
                
                    @error('name')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative flex flex-col mb-6">
                    <input type="email" name="email" id="email" value="{{old('email')}}" class="peer h-16 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('email') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="email" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('email') peer-focus:text-red-400 @enderror">Email</label>
                
                    @error('email')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative flex flex-col mb-6">
                    <input type="password" name="password" id="password" class="peer h-16 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('password') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="password" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('password') peer-focus:text-red-400 @enderror">Password</label>
                
                    @error('password')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative flex flex-col mb-6">
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="peer h-16 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('password_confirmation') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="password_confirmation" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('password_confirmation') peer-focus:text-red-400 @enderror">Conferma Password</label>
                
                    @error('password_confirmation')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="text-center mb-6">
                    <button type="submit" class="bg-emerald-400 py-4 px-20 rounded-full">Registrati</button>
                </div>

                <div class="text-center">
                    <h2>Hai già un account? <a href="{{route('login')}}" class="text-emerald-500">Accedi</a></h2>
                </div>
            </form>

        </div>

    </body>
</html>