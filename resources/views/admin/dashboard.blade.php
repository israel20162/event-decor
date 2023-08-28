<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class=" mx-auto sm:px-6 lg:px-6">
            <div class="bg-white overflow-hidden  sm:rounded-lg">
<div class="h-screen bg-gray-100 font-sans">

    <!-- Header -->


    <!-- Sidebar and Main Content -->
    <div class="flex">

        <!-- Sidebar -->


        <!-- Main Content -->
        <div class="flex-grow p-6">
            <!-- Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-whit bg-blue-500 text-white p-4 rounded shadow text-center">
                    <h2 class="text-2xl font-bold">Total Bookings</h2>
                    <p class="text-2xl">250</p>
                </div>
                  <div class="bg-yellow-300 text-gray-100 p-4 rounded shadow text-center">
                    <h2 class="text-2xl font-bold">Pending Bookings</h2>
                    <p class="text-2xl">250</p>
                </div>
                  <div class="bg-slate-600 text-white p-4 rounded shadow text-center">
                    <h2 class="text-2xl font-bold">Total Feedback</h2>
                    <p class="text-2xl">250</p>
                </div>
                  <div class="bg-green-500 text-white p-4 rounded shadow text-center">
                    <h2 class="text-2xl font-bold">Total Revenue</h2>
                    <p class="text-2xl">250</p>
                </div>
                <!-- ... Add other statistic blocks similarly ... -->
            </div>

            <!-- Quick Actions -->
            <div class="mb-8">
                <button class="bg-blue-500 text-white rounded p-4 mr-4 hover:bg-blue-600">Add New Event</button>
                <button class="bg-green-500 text-white rounded p-4 mr-4 hover:bg-green-600">Manage Inventory</button>
            </div>

            <!-- Latest Bookings -->
            <div class="bg-white p-4 rounded shadow mb-8">
                <h2 class="text-xl font-bold mb-4">Latest Bookings</h2>
                <table class="w-full">
                    <!-- Table Header -->
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Customer Name</th>
                            <th class="border px-4 py-2">Contact</th>

                            <th class="border px-4 py-2">Event Date</th>
                            <th class="border px-4 py-2">Venue</th>
                            <th class="border px-4 py-2">Status</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <!-- Sample Row -->
                        <tr>
                            <td class="border px-4 py-2">John Doe</td>
                             <td class="border px-4 py-2">08057880646</td>
                            <td class="border px-4 py-2">2023-09-15</td>
                            <td class="border px-4 py-2">City Hall</td>
                            <td class="border px-4 py-2">Pending</td>
                            <td class="border px-4 py-2">
                                <button class="text-blue-500 hover:underline">View</button>
                            </td>
                        </tr>
                        <!-- ... More rows as needed ... -->
                    </tbody>
                </table>
            </div>

            <!-- Any other sections you need -->

        </div>
    </div>



</div>

            </div>
        </div>
    </div>
</x-app-layout>
