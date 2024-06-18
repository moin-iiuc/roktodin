<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{$title}}</title>
</head>
<body>
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://static.vecteezy.com/system/resources/previews/019/152/949/original/hand-holding-a-drop-of-blood-world-blood-donor-day-blood-donation-illustration-donor-symbol-blood-donation-symbol-free-png.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="{{request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Homepage</a>
              <a href="/contact" class="{{ request()->is('contact') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Contact</a>
              <a href="/about" class="{{ request()->is('about') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">About</a>
              @guest
              <a href="/login" class="{{ request()->is('login') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Login</a>
              <a href="/signup" class="{{ request()->is('signup') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Sign Up</a>
              @endguest
              @auth
              <a href="/profile" class="{{ request()->is('profile') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">User Profile</a>
              <a href="/logout" class="{{ request()->is('logout') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Logout</a>
              <form action="/search" method="post">
@csrf
<input type="text" name="search" placeholder="A+" >
<button type="submit"  class="mx-2bg-blue-900 hover:bg-blue-500 text-white p-2 rounded" >Search</button>
</form>
              @endauth
            </div>
          </div>
        </div>
       

            <!-- Profile dropdown -->
           

              <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
             
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="{{request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Homepage</a>
              <a href="/contact" class="{{ request()->is('contact') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Contact</a>
              <a href="/about" class="{{ request()->is('about') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">About</a>
              <a href="/login" class="{{ request()->is('login') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Login</a>
              <a href="/signup" class="{{ request()->is('signup') ? "bg-gray-900 text-white": 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Sign Up</a>
      </div>
      
    </div>
  </nav>


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      {{$slot}}
    </div>
  </main>
</div>

@include("Components.footer")




