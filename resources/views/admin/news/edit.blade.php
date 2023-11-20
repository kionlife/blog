<x-admin-app-layout>
    <div class="mb-2">
        <a href="{{ route('admin.news') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Back
        </a>
    </div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <form action="{{ isset($post) ? route('admin.news.update', $post->id) : route('admin.news.store') }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @isset($post)
                    @method('PUT')
                @endisset
                <div class="mb-4">
                    <label class="text-gray-900 dark:text-gray-100" for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror"
                           value="{{ isset($post) ? $post->title : old('title') }}">
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-gray-900 dark:text-gray-100" for="text">Text</label>
                    <textarea name="text" id="text" cols="30" rows="4" placeholder="Text"
                              class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('text') border-red-500 @enderror">{{ isset($post) ? $post->text : old('text') }}</textarea>
                    @error('text')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @isset($post)
                    <div class="mb-4">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="object-cover h-48 w-96 rounded">
                    </div>
                @endisset
                @isset($post)
                    <div class="mb-4">
                        <input type="checkbox" name="create_new_image" id="create_new_image" class="mr-2" checked/>
                        <label class="text-gray-900 dark:text-gray-100" for="create_new_image">Generate new
                            image</label>
                    </div>
                @endisset
                <div>
                    <button type="submit"
                            class="text-white font-bold py-2 px-4 rounded bg-green-500 hover:bg-green-700">
                        {{ isset($post) ? 'Update' : 'Create' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>
