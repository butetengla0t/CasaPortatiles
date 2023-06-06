<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head.head')
    <body class="antialiased">
        @include('header.header')
        <div class="bg-gray-200 py-5 mb-4 w-full">

            <div class="w-10/12 mx-auto sm:flex sm:flex-row sm:gap-8 md:flex-col md:w-full">
            
                <div class="sm:w-3/4 md:mx-auto md:w-10/12">
                
                    <div class="w-full">
                        <div class="mx-auto w-full max-w-screen-xl">
                            <div class="bg-white text-black border-1 flex items-center justify-between px-6 py-4 rounded-md border-l-8 border-l-green-800 border-gray-500">
                                <h1 class="text-lg">Windows</h1>
                                <a class="btn-transparent view-all" href="/ms-windows/">View All</a>
                            </div>
                                <div class="rounded-xl bg-white mt-5">
                                    <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
                                        <a href="#" class="block shrink-0">
                                            <img
                                                alt="Speaker"
                                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXZhdGFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
                                                class="h-full w-32 rounded-lg max-w-full object-contain md:object-scale-down"
                                            />
                                        </a>

                                        <div>
                                            <h3 class="font-medium sm:text-lg">
                                                <a href="#" class="hover:underline">
                                                    Question about Livewire Rendering and Alpine JS
                                                </a>
                                            </h3>

                                            <p class="line-clamp-2 text-sm text-gray-700">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
                                                accusantium temporibus iure delectus ut totam natus nesciunt ex?
                                                Ducimus, enim.
                                            </p>

                                            <div class="mt-2 sm:flex sm:items-center sm:gap-2">
                                                <div class="flex items-center gap-1 text-gray-500">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                    >
                                                        <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"
                                                        />
                                                    </svg>

                                                    <p class="text-xs">14 comments</p>
                                                </div>

                                                <span class="hidden sm:block" aria-hidden="true">&middot;</span>

                                                <p class="hidden sm:block sm:text-xs sm:text-gray-500">
                                                    Posted by
                                                    <a href="#" class="font-medium underline hover:text-gray-700">
                                                        John
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-end -mt-7">
                                    <strong
                                        class="rounded-br-xl -mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-ee-xl rounded-ss-xl bg-green-600 px-3 py-1.5 text-white"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                                            />
                                        </svg>

                                        <span class="text-[10px] font-medium sm:text-xs">Recommended</span>
                                    </strong>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- SIDE -->
                    <div class="sm:w-1/4 mt-5 sm:mt-0 md:w-10/12 md:mx-auto">
                        <div class="w-full">
                        <div class="rounded-xl bg-white">
                                <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
                                    <!-- <a href="#" class="block shrink-0">
                                        <img
                                            alt="Speaker"
                                            src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXZhdGFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
                                            class="h-auto w-32 rounded-lg max-w-full object-contain md:object-scale-down"
                                        />
                                    </a> -->

                                    <div>
                                        <h3 class="font-medium sm:text-md">
                                            <a href="#" class="hover:underline">
                                            Question about Livewire Rendering and Alpine JS
                                            </a>
                                        </h3>

                                        <p class="line-clamp-2 text-sm text-gray-700">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
                                            accusantium temporibus iure delectus ut totam natus nesciunt ex?
                                            Ducimus, enim.
                                        </p>

                                        <div class="mt-2 sm:flex sm:items-center sm:gap-2">
                                            <div class="flex items-center gap-1 text-gray-500">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                >
                                                    <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"
                                                    />
                                                </svg>

                                                <p class="text-xs">14 comments</p>
                                            </div>

                                            <span class="hidden sm:block" aria-hidden="true">&middot;</span>

                                            <p class="hidden sm:block sm:text-xs sm:text-gray-500">
                                                Posted by
                                                <a href="#" class="font-medium underline hover:text-gray-700">
                                                    John
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                    <div class="flex justify-end -mt-6">
                                        <strong
                                            class="rounded-br-xl -mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-ee-xl rounded-ss-xl bg-red-600 px-3 py-1.5 text-white"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                                                />
                                            </svg>

                                            <span class="text-[10px] font-medium sm:text-xs">Latest</span>
                                        </strong>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer.footer')
    </body>
</html>
