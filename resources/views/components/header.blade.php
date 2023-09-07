<header class="bg-white shadow-sm ">

   
    <!-- Include Alpine.js for the toggle functionality -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" ></script>

<div x-data="{ open: false }" class="md:bg-white bg-gray-700 p-4 relative">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Brand Name/Logo -->
       <div class="w-1/4 md:hidden">
            <a href="{{ route('home') }}" class="text-lg font-bold text-blue-500 hover:text-blue-700 transition">
                <img src="{{ Storage::url($image_paths['logo']['file_path']) }}"
                 onerror="this.onerror=null; this.src='{{asset('logo.png')}}';"
                     alt="logo" class="h-8">
            </a>
        </div>

        <!-- Mobile navigation button -->
        <button @click="open = !open" class="lg:hidden px-2 py-1 text-white">
          <img src="{{asset('svg/bars.svg')}}" class="h-8 w-8" alt="">
        </button>

        <!-- Desktop Navigation -->
        <div class="hidden container mx-auto md:flex items-center  p-2 lg:block">
             <div class=" md:flex items-center">
        <!-- Logo on the left -->
        <div class="w-1/4 ">
            <a href="{{ route('home') }}" class="text-lg font-bold text-blue-500 hover:text-blue-700 transition">
                <img src="{{ Storage::url($image_paths['logo']['file_path']) }}"
                 onerror="this.onerror=null; this.src='{{asset('logo.png')}}';"
                     alt="logo" class="h-8">
            </a>
        </div>

        <div class="w-2/4">
            <nav>
                <ul class="flex space-x-4 text-xl font-semibold  justify-evenly">
                    <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>

                    <li><a href="{{ route('blog') }}" class="hover:underline">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">Contact us</a></li>
                    <li><a href="{{ route('packages') }}" class="hover:underline"> Packages & Pricing</a></li>


                </ul>
            </nav>
        </div>
        <!-- Navigation (Example: Adjust as needed) -->

    </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="open" class="absolute top-full mx-auto  z-50 left-0 w-full  space-y-2 bg-slate-400 lg:hidden">
            <ul class="px-4">
                <li><a  href="{{ route('home') }}" class="block text-white p-2 ">Home</a></li>
               <li><a href="{{ route('about') }}" class="block text-white p-2">About</a></li>

                    <li><a href="{{ route('blog') }}" class="block text-white p-2">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="block text-white p-2">Contact us</a></li>
                    <li><a href="{{ route('packages') }}" class="block text-white p-2"> Packages & Pricing</a></li>
            </ul>
        </div>
    </div>
</div>

</header>
