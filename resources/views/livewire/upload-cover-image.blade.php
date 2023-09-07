<div>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
        file</label>



    <div class="flex gap-2">
        <label
            class="w-80 flex justify-evenly items-center px-4 py-4 bg-white text-blue rounded-lg  tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue e">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
            </svg>
            <span class="mt-2 text-base leading-normal">upload cover image</span>
            <input wire:model.live.debounce.300ms='image' class="hidden" aria-describedby="file_input_help"
                id="file_input" type="file" accept=".png,.jpg,.gif,.jpeg,.svg">
        </label>
        <div wire:loading.delay class='text-green-500 '>
            <img src="{{ asset('svg/spinner.svg') }}" class="h-16 w-16" alt="" srcset="">
        </div>
    </div>


    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
        1200x720px).</p>
    @error('image')
        <span class="text-red-600">{{ $message }}</span>
    @enderror

   @if ($image)
   Image Preview:


   <img src="{{$image->temporaryUrl()}}" class="h-64 w-1/2 object-cover" alt="">

       
   @endif

</div>
