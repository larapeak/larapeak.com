@if(session()->has('preview'))
    <div class="bg-yellow-500" v-if="show && message">
        <div class="max-w-screen-xl px-3 py-2 mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between">
                <div class="flex items-center flex-1 w-0 min-w-0">
                    <span class="flex p-2 rounded-lg" class="bg-yellow-600">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </span>

                    <p class="ml-3 text-sm font-medium text-white truncate">
                        This is an preview, this post is not published yet!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif