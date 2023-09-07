<section class="py-20 bg-gray-50" id="pricing">
    <div class="container mx-auto px-4 md:px-0">

        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Pricing & Packages</h2>
            <p class="text-xl text-gray-600">Choose the best package that suits your event needs.</p>
        </div>

        <!-- Packages Grid -->
        <div class="grid md:grid-cols-3 gap-12">

            @forelse ($packages as $package)
                 <div class="bg-white flex flex-col md:max-h-fit justify-evenly rounded-lg shadow-md p-8">
                <h3 class="text-2xl font-bold mb-6">{{$package->name}}</h3>
                <p class="text-xl font-semibold mb-8">&#x20A6;{{$package->price}}</p>
                <ul class="mb-8 space-y-2 cursor-pointer text-gray-600">
                     @foreach(json_decode($package->services) as $item)
                                <li>- {{ $item }}</li>
                            @endforeach
                    
                </ul>
                <a href="{{route('packages')}}" class="block w-full bg-blue-500 text-white text-center py-3 rounded-md hover:bg-blue-600 transition-colors">Get Started</a>
            </div>
            @empty
               <div></div> 
            @endforelse

            <!-- Basic Package -->
           

           

        </div>
    </div>
</section>