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
        
            <form action="{{route('register')}}" method="POST" class="zoom-in flex flex-col rounded-3xl bg-white p-8 w-full sm:w-[420px]">
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
                    <input type="name" name="name" id="name" value="{{old('name')}}" class="peer h-12 w-full px-2 border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('name') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="name" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('name') peer-focus:text-red-400 @enderror">Nome</label>
                
                    @error('name')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative flex flex-col mb-6">
                    <input type="email" name="email" id="email" value="{{old('email')}}" class="peer h-12 w-full px-2 border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('email') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="email" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('email') peer-focus:text-red-400 @enderror">Email</label>
                
                    @error('email')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative flex flex-col mb-6">
                    <input type="password" name="password" id="password" class="peer h-12 w-full px-2 border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('password') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="password" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('password') peer-focus:text-red-400 @enderror">Password</label>
                
                    @error('password')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative flex flex-col mb-6">
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="peer h-12 w-full px-2 border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('password_confirmation') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                    <label for="password_confirmation" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('password_confirmation') peer-focus:text-red-400 @enderror">Conferma Password</label>
                
                    @error('password_confirmation')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="text-center mb-6">
                    <button type="submit" class="bg-emerald-400 py-2 px-20 rounded-full hover:bg-emerald-200 transition-all">Registrati</button>
                </div>

                <div class="flex justify-center items-center mb-6">
                        <hr class="border border-emerald-300 w-2/6">

                        <span class="w-2/6 text-center">o accedi con</span>

                        <hr class="border border-emerald-300 w-2/6">
                </div>

                <div class="text-center mb-6">
                    <a href="{{route('social.login', ['provider' => 'google'])}}" class="border border-emerald-500 hover:bg-emerald-200 font-medium rounded-full text-sm px-20 py-2 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill="#4285F4" fill-rule="evenodd" d="M21.6 12.227c0-.709-.064-1.39-.182-2.045H12v3.868h5.382a4.6 4.6 0 0 1-1.996 3.018l3.232 2.51c1.891-1.742 2.982-4.305 2.982-7.35Z" clip-rule="evenodd"></path><path fill="#34A853" fill-rule="evenodd" d="M12 22c2.7 0 4.964-.895 6.618-2.423l-3.232-2.509c-.895.6-2.04.955-3.386.955-2.605 0-4.81-1.76-5.595-4.123l-3.341 2.59A9.996 9.996 0 0 0 12 22Z" clip-rule="evenodd"></path><path fill="#FBBC05" fill-rule="evenodd" d="M6.405 13.9c-.2-.6-.314-1.24-.314-1.9 0-.66.114-1.3.314-1.9L3.064 7.51A9.996 9.996 0 0 0 2 12c0 1.614.386 3.14 1.064 4.49l3.34-2.59Z" clip-rule="evenodd"></path><path fill="#EA4335" fill-rule="evenodd" d="M12 5.977c1.468 0 2.786.505 3.823 1.496l2.868-2.868C16.959 2.99 14.696 2 12 2 8.09 2 4.71 4.24 3.064 7.51l3.34 2.59C7.192 7.736 9.396 5.977 12 5.977Z" clip-rule="evenodd"></path></svg>
                         Google
                    </a>

                    <a href="{{route('social.login', ['provider' => 'facebook'])}}" class="border border-emerald-500 hover:bg-emerald-200 font-medium rounded-full text-sm px-10 py-2 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        <svg fill="#0084ff" height="24" width="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310 310" xml:space="preserve" stroke="#0084ff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_834_"> <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064 c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996 V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545 C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703 c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"></path> </g> </g></svg>
                         Facebook
                         
                    </a>
                </div>

                <div class="text-center">
                    <h2>Hai già un account? <a href="{{route('login')}}" class="text-emerald-500">Accedi</a></h2>
                </div>
            </form>

        </div>

    </body>
</html>