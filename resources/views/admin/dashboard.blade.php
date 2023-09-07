<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-screen overflow-scroll">
        <div class=" mx-auto sm:px-6  lg:px-6">
            <div class="bg-white dark:bg-slate-900 md:overflow-scroll   no-scroll  sm:rounded-lg">
                <div class="h-full bg-gray-100 dark:bg-slate-900 font-sans">

                    <!-- Header -->



                    <div class=" overflow-auto">




                        <!-- Main Content -->
                        <div class="flex-grow  md:p-6">
                            <!-- Statistics -->
                            <div class="grid grid-cols-1 md:grid-cols-4  gap-y-3 gap-x-6 mb-8">
                                <div class=" bg-blue-500 text-white p-4 rounded shadow max-w-screen  md:text-center">
                                    <h2 class="text-2xl font-bold">Total Bookings</h2>
                                    <p class="text-2xl">{{ $bookings->count() }}</p>
                                </div>
                                <div class="bg-yellow-300 text-gray-100 p-4 rounded shadow max-w-screen  md:text-center">
                                    <h2 class="text-2xl font-bold">Pending Bookings</h2>
                                    <p class="text-2xl">{{ $bookings->where('status', 'pending')->count() }}</p>
                                </div>
                                <div class="bg-slate-600 text-white p-4 rounded shadow max-w-screen  md:text-center">
                                    <h2 class="text-2xl font-bold">Total Feedback</h2>
                                    <p class="text-2xl">{{$feedback->count()}}</p>
                                </div>
                                <div class="bg-green-500 text-white p-4 rounded shadow max-w-screen  md:text-center">
                                    <h2 class="text-2xl font-bold">Total Revenue</h2>
                                    <p class="text-2xl">250</p>
                                </div>
                                <!-- ... Add other statistic blocks similarly ... -->
                            </div>

                            <!-- Quick Actions -->
                            <div class="mb-8">
                                <button class="bg-blue-500 text-white rounded p-4 mr-4 hover:bg-blue-600"> <a href="/admin/blog">Add New
                                   Blog Post</a></button>
                                <button class="bg-green-500 text-white rounded p-4 mr-4 hover:bg-green-600"><a href="/admin/settings">Settings</a></button>
                            </div>

                            <!-- Latest Bookings -->
                            <div class="dark:bg-slate-900 bg-white h-fit no-scroll overflow-auto dark:text-white p-4 rounded shadow mb-8">
                                <h2 class="text-xl font-bold ">Latest Bookings</h2>
                                @livewire('booking-table')
                            </div>
                          <div class='grid grid-cols-1 gap-4'>
                             <div class="dark:bg-slate-900 bg-white h-fit w-full overflow-auto no-scroll dark:text-white p-4 rounded shadow mb-8">
                                <h2 class="text-xl font-bold ">Latest Feedback</h2>


                                @livewire('feedback-table')
                            </div>

                            <div class="dark:bg-slate-900 bg-white h-fit no-scroll dark:text-white p-4 rounded shadow mb-8">
                                <h2 class="text-xl font-bold my-3">Upcoming Events</h2>
                               <livewire:accepted-enquires-calendar/>
                            </div>
                          </div>
                              <div class="dark:bg-slate-900 bg-white md:w-2/3 h-fit no-scroll dark:text-white p-4 rounded shadow mb-8">
                                <h2 class="text-xl font-bold ">Monthly Bookings</h2>
                                @livewire('bookings-chart')
                            </div>




                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>
</x-app-layout>
