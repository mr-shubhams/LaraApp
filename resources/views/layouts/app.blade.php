<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LaraApp Web App</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
<nav class="bg-indigo-600 flex items-center justify-between flex-wrap p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
  </div>
  <div class="block lg:hidden al">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 mr-4 font-bold">
        Docs
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 mr-4 font-bold">
        Examples
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 font-bold">
        Blog
      </a>
    </div>
  </div>

  <div class="">
    <div class="text-sm lg:flex-grow">
      @auth

      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 mr-4 font-bold">{{Auth::user()->username}}</a>

      <a href="{{route('logout')}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 mr-4 font-bold">Logout</a>
      @endauth

      @guest
        <a href="{{route('login')}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 mr-4 font-bold">Login</a>
        <a href="{{route('register')}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-600 mr-4 font-bold">Register</a>
      @endguest
      </a>
    </div>
  </div>
</nav>
    @yield('content')
</body>
</html>