<x-app-layout :title="$post->title">
    <article class="max-w-3xl mx-auto">
        <a
        href="{{ route('blog.index') }}"
        class="flex items-center mb-6 font-semibold transition duration-300 sm:mb-12 hover:text-primary"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Back to Blog
        </a>

        <div class="mb-6 sm:mb-12">
            <p class="mb-3 font-semibold text-gray-400">
                Published: {{ $post->published_at->format('M d, Y') }}
            </p>
            <h1 class="text-5xl font-bold">
                {{ $post->title }}
            </h1>
            <div class="h-2 mt-2 rounded-md bg-gradient-to-r from-yellow-400 to-primary"></div>
        </div>

        <div class="mx-auto mb-6 prose prose-xl max-w-none prose-blue sm:mb-12">
            {!! $post->formatted_text !!}
        </div>

        <div class="flex px-6 py-4 mt-12 text-blue-500 bg-blue-100 border border-blue-200 rounded">
            <div class="flex items-center">
                <svg class="w-12 h-12 mr-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                <span>Follow me on twitter to get notified when I post a new blog @<a href="https://www.twitter.com/larapeakdev" target="_BLANK" class="font-semibold underline transition duration-300 hover:text-primary">larapeakdev</a></span>
            </div>
        </div>

    </article>
</x-app-layout>