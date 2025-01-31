<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('images/logo.png')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="//unpkg.com/alpinejs" defer></script>

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>
            FilmBatch
        </title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                <img width="150px" height="200px" src="{{asset('images/logo3.png')}}" alt="" class="logo">
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                    
                    <li>
                        <span class="font-bold uppercase">
                            Welcome {{auth()->user()->name}}
                        </span>
                    </li>
                    <li>
                        <a href="/movies/manage" class="hover:text-purple-500"><i class="fa-solid fa-gear"></i>
                            Manage Films
                        </a>
                    </li>

                    <li>
                        <form method="POST" class="inline" action="/logout">
                            @csrf

                            <button type="submit">
                                <i class="fa-solid fa-door-closed">
                                    Logout
                                </i>
                            </button>
                        </form>
                    </li>
                    
                @else
                    <li>
                        <a href="/register" class="hover:text-purple-500"><i class="fa-solid fa-user-plus"></i> 
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="/login" class="hover:text-purple-500">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> 
                            Login
                        </a>
                    </li>

                @endauth
            </ul>
        </nav>

        <main>
            
            @yield('content')
        
        </main>

        <x-flash-message />
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-purple-500 text-white h-24 mt-24 opacity-90 md:justify-center">
        
            <p class="ml-2">
                Copyright; 2023, All Rights reserved
            </p>

            <a href="/movies/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">
                Post Film Info
            </a>

        </footer>
    </body>
</html>