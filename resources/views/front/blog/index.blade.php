<x-app-layout title="Home">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6 sm:mb-12">
            <h1 class="text-5xl font-bold">
                All Blog Posts
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-16">
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

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>