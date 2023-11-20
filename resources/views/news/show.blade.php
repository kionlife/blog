<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-gray-100">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- image -->
                    <div class="mb-4 w-full">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="object-cover h-72 w-full rounded">
                    </div>
                    <h3 class="text-lg font-bold mb-2">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">
                        {{ $post->text }}
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        {{ $post->created_at->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
