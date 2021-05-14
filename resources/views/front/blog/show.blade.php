<x-app-layout :title="$post->title">
    <article class="max-w-3xl mx-auto">
        <a
        href="{{ route('blog.index') }}"
        class="flex items-center mb-6 font-semibold transition duration-300 sm:mb-12 hover:text-blue-600"
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
            <div class="h-2 mt-2 rounded-md bg-gradient-to-r from-green-300 to-indigo-400"></div>
        </div>

        <div class="mx-auto mb-6 prose prose-xl max-w-none prose-blue sm:mb-12">
            {!! $post->formatted_text !!}
        </div>

        <!-- <nuxt-content
        :document="article"
        class="mx-auto mb-6 prose prose-xl max-w-none prose-blue sm:mb-12"
        /> -->

    </article>
</x-app-layout>