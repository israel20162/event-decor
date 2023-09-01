<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <main class="flex flex-col gap-16">

        <div class="container mx-auto mt-12 p-4 bg-white rounded shadow-lg">
            <h1 class="text-2xl mb-6 border-b pb-2">Site Settings</h1>

            <form action="" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-x-8">
                    <!-- Site Name -->
                    <div class="mb-6">
                        <label for="site_name" class="block text-sm font-medium text-gray-700">Site Name</label>
                        <input type="text" name="site_name" id="site_name"
                            value="{{ old('site_name', $settings->site_name ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <!-- Company Name -->
                    <div class="mb-6">
                        <label for="site_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                        <input type="text" name="company_name" id="company_name"
                            value="{{ old('company_name', $settings->company_name ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <!-- City  -->
                    <div class="mb-6">
                        <label for="company_city" class="block text-sm font-medium text-gray-700">company city</label>
                        <input type="text" name="company_city" id="company_city"
                            value="{{ old('company_city', $settings->company_city ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <!-- Year -->
                    <div class="mb-6">
                        <label for="company_established_year" class="block text-sm font-medium text-gray-700">Establish Year</label>
                        <input type="text" name="company_established_year" id="company_established_year"
                            value="{{ old('company_established_year', $settings->company_established_year ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <!-- Email -->
                    <div class="mb-6">
                        <label for="contact_email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" name="contact_email" id="contact_email"
                            value="{{ old('contact_email', $settings->contact_email ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <!-- Phone -->
                    <div class="mb-6">
                        <label for="contact_phone_number" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="contact_phone_number" id="contact_phone_number"
                            value="{{ old('contact_phone_number', $settings->contact_phone_number ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                     <!-- adress -->
                    <div class="mb-6">
                        <label for="contact_adress" class="block text-sm font-medium text-gray-700">Adress</label>
                        <input type="text" name="contact_adress" id="contact_adress"
                            value="{{ old('contact_adress', $settings->contact_adress ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                     <!-- work hours -->
                    <div class="mb-6">
                        <label for="working_hours" class="block text-sm font-medium text-gray-700">Work Hours (displays to customers how many hours you are opne for)</label>
                        <input type="text" name="working_hours" id="working_hours"
                        placeholder="eg: 9:00am - 5:00pm or 9:00am to 5:00pm"
                            value="{{ old('working_hours', $settings->working_hours ?? '') }}"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                </div>


                <!-- Site Logo -->
                <div class="mb-6">
                    <label for="site_logo" class="block text-sm font-medium text-gray-700">Site Logo</label>
                    <input type="file" name="site_logo" id="site_logo" class="mt-1 p-2 border rounded-md">
                </div>

                <!-- Maintenance Mode -->
                <div class="mb-6">
                    <label for="maintenance_mode" class="block text-sm font-medium text-gray-700">Maintenance
                        Mode</label>
                    <select name="maintenance_mode" id="maintenance_mode" class="mt-1 p-2 w-full border rounded-md">
                        <option value="0"
                            {{ old('maintenance_mode', $settings->maintenance_mode ?? 0) == 0 ? 'selected' : '' }}>
                            Disabled</option>
                        <option value="1"
                            {{ old('maintenance_mode', $settings->maintenance_mode ?? 0) == 1 ? 'selected' : '' }}>
                            Enabled</option>
                    </select>
                </div>

                <!-- Save Button -->
                <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Save
                        Settings</button>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
