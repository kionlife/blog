<!-- Navigation sidebar -->
<div class="flex flex-col w-64 h-screen px-4 py-8 bg-white border-r dark:bg-gray-800 dark:border-gray-600">
    <div class="flex flex-col items-center mt-6 -mx-2">
{{--        <img class="object-cover w-24 h-24 mx-2 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="avatar">--}}
{{--        <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">{{ Auth::user()->name }}</h4>--}}
{{--        <p class="mx-2 mt-px text-sm font-medium text-gray-600 dark:text-gray-400 hover:underline">{{ Auth::user()->email }}</p>--}}
    </div>
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a class="flex items-center px-4 py-2 mt-px text-gray-700 bg-gray-200 rounded-lg dark:bg-gray-700 dark:text-gray-200" href="{{ route('admin.index') }}">
                <span class="mx-4 text-lg font-normal">Dashboard</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-px text-gray-700 bg-gray-200 rounded-lg dark:bg-gray-700 dark:text-gray-200" href="{{ route('admin.news') }}">
                <span class="mx-4 text-lg font-normal">News</span>
            </a>
        </nav>
    </div>
</div>
