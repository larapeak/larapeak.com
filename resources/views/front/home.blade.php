<x-app-layout title="okeeeee">
    <div class="max-w-6xl mx-auto">
        <div class="mb-12 sm:mb-24">
            <h1 class="text-5xl font-bold">
                Hi There 👋!
            </h1>
            <p class="mt-3 text-lg">
                Welcome on the <span class="font-medium text-blue-600 underline">Larapeak</span> blog! <br>
                On this blog you can find tutorials about Laravel, Tailwindcss and more!
            </p>
        </div>

        <div class="grid grid-cols-1 gap-16 sm:grid-cols-2">
            @foreach ($posts as $post)
                <div>
                    <div class="h-3 bg-gradient-to-r from-green-300 to-indigo-400 rounded-t-md"></div>
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

                        <a href="/" class="font-bold text-blue-600">
                            Read article
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>