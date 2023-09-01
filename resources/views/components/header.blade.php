<header class="bg-white shadow-sm p-2">

    <div class="container mx-auto flex items-center  p-2 ">
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
</header>
