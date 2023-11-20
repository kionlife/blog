<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- List of last news -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($news as $post)
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <!-- image -->
                                    <div class="mb-4 w-100">
                                        <a href="{{ route('news.show', $post->id) }}">
                                            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="object-cover h-48 w-96 rounded">
                                        </a>
                                    </div>
                                    <h3 class="text-lg font-bold mb-2">
                                        <a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">
                                        {{ $post->text }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                                        {{ $post->created_at->format('d/m/Y') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-4">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
