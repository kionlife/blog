<!-- Page with list of news with pagination -->
<x-admin-app-layout>
    <div class="mb-2">
        <a href="{{ route('admin.news.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Add news
        </a>
    </div>

    <!-- List of news in table -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Text</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Created at</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $post)
                        <tr>
                            <td class="border px-4 py-2">{{ $post->id }}</td>
                            <td class="border px-4 py-2">{{ $post->title }}</td>
                            <td class="border px-4 py-2">{{ $post->text }}</td>
                            <td class="border px-4 py-2 text-center">
                                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="object-cover h-48 w-96 rounded">
                            </td>
                            <td class="border px-4 py-2">{{ $post->created_at->format('d/m/Y') }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('news.show', $post->id) }}" class="mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Show
                                </a>
                                <a href="{{ route('admin.news.edit', $post->id) }}" class="mx-2 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                <!-- Delete with confirmation -->
                                <form class="inline-block" action="{{ route('admin.news.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mx-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</x-admin-app-layout>
