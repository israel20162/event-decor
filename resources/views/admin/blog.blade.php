<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <main x-data="{ tab: 'create' }" class="flex flex-col gap-">
        <div class=" py-4 w-full">
            <div class="max-w-full w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-md">
                    <nav class="-mb-px flex space-x-8">
                        <!-- Create Blog Tab -->
                        <button
                            class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 "
                            :class="{ '!border-gray-500 ': tab === 'create' }" @click="tab = 'create'">
                            Create Blog
                        </button>

                        <!-- View Blog Posts Tab -->
                        <button
                            class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 "
                            :class="{ '!border-gray-500 ': tab === 'view' }" @click="tab = 'view'">
                            View Blog
                        </button>


                        <!-- Manage Comments Tab -->
                        <button
                            class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 "
                            :class="{ '!border-gray-500 ': tab === 'comments' }" @click="tab = 'comments'">
                            Manage Comments
                        </button>

                    </nav>
                </div>
            </div>
        </div>

        <div x-show="tab === 'comments'">
  @livewire('manage-comments')
        </div>
        <div x-show="tab === 'view'">
          @livewire('manage-blog-posts')

        </div>


        <div x-show="tab === 'create'">
            @livewire('create-blog-post')
        </div>



    </main>


    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/dompurify@3.0.5/dist/purify.min.js"></script>
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
            document.addEventListener('contentChanged', function(e) {
                tinymce.init({
                    selector: 'textarea#editor', // Replace this CSS selector to match the placeholder element for TinyMCE
                    plugins: 'code table lists image link media wordcount preview',


                    setup: function(editor) {
                        editor.on('change', function(e) {
                            document.getElementById('markdown-preview').value = DOMPurify.sanitize(
                                tinymce
                                .activeEditor.getContent());
                            document.getElementById('markdown-preview').innerHTML =
                                DOMPurify.sanitize(tinymce
                                    .activeEditor.getContent());

                        });
                        editor.on('input', function(e) {
                            document.getElementById('markdown-preview').value = DOMPurify.sanitize(
                                tinymce
                                .activeEditor.getContent());
                            document.getElementById('markdown-preview').innerHTML =
                                DOMPurify.sanitize(tinymce
                                    .activeEditor.getContent());

                        });

                    },
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table |preview'
                })

            })
            document.addEventListener('livewire:load', function() {

                tinymce.init({
                    selector: 'textarea#editor', // Replace this CSS selector to match the placeholder element for TinyMCE
                    plugins: 'code table lists image link media wordcount preview',


                    setup: function(editor) {
                        editor.on('change', function(e) {
                            dispatchEvent(new InputEvent('body'))
                            document.getElementById('markdown-preview').innerHTML = DOMPurify
                                .sanitize(tinymce
                                    .activeEditor.getContent());
                            document.getElementById('markdown-preview').value = DOMPurify.sanitize(
                                tinymce
                                .activeEditor.getContent());
                        });
                        editor.on('input', function(e) {
                            document.getElementById('markdown-preview').value = DOMPurify.sanitize(
                                tinymce
                                .activeEditor.getContent());
                            document.getElementById('markdown-preview').innerHTML =
                                DOMPurify.sanitize(tinymce
                                    .activeEditor.getContent());

                        });
                    },
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | preview'
                })


            });
        </script>
    @endpush
</x-app-layout>
