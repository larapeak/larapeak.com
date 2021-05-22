<x-app-layout title="Home">
    <div class="max-w-6xl mx-auto">
        <div class="mb-12 sm:mb-24">
            <h1 class="text-5xl font-bold">
                Hi There 👋!
            </h1>
            <p class="mt-3 text-lg">
                Welcome on the <span class="font-medium underline text-primary">Larapeak</span> blog! <br>
                On this blog you can find tutorials about Laravel, Tailwindcss and more!
            </p>
        </div>

        <div class="grid grid-cols-1 gap-16 sm:grid-cols-2">
            @foreach ($posts as $post)
                <div>
                    <div class="h-3 bg-gradient-to-r from-yellow-400 to-primary rounded-t-md"></div>
                    <div class="my-3">
                        <p class="mb-3 text-sm font-semibold text-gray-400">
                            {{ $post->published_at->format('M-Y') }}
                        </p>

                        <h2 class="mb-3 text-3xl font-semibold">
                            {{ $post->title }}
                        </h2>
                        <p class="mb-3">
                            {{ $post->excerpt }}
                        </p>

                        <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-primary">
                            Read article
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-12">
            <a href="{{ route('blog.index') }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                Load More Posts
            </a>
        </div>
    </div>
</x-app-layout>