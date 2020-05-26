<div class="bg-gray-100 pt-0 pb-8">
    <div class="bg-gray-100 z-100 bg-white flex items-center">
        <div class="w-full max-w-screen-xl relative mx-auto px-6">
            <div class="border-b-2 border-gray-200 h-24 flex flex-col justify-center">
                <div class="flex items-center justify-between">

                    <div class="flex ">
                        <a href="/" class="block">
                            <h1 class="xl:text-2xl lg:text-xl md:text-lg text-gray-800 font-black"><span class="text-blue-500">University</span> Credits <span class="text-blue-500">4</span>.0</h1>
                        </a>
                    </div>

                    <div class="flex items-center text-lg font-medium tracking-wide text-gray-500">
                        <a href="{{ route('home') }}" class="block">
                            <p class="mr-8 border-b-4 @if(Route::is('home')) text-blue-500 border-blue-500 hover:text-blue-700 @else border-gray-100 hover:text-gray-700 @endif">Home</p>
                        </a>
                        <a href="{{ route('about') }}" class="block">
                            <p class="mr-8 border-b-4 @if(Route::is('about')) text-blue-500 border-blue-500 hover:text-blue-700 @else border-gray-100 hover:text-gray-700 @endif">About</p>
                        </a>
                        <a href="{{ route('faq') }}" class="block">
                            <p class="mr-8 border-b-4 @if(Route::is('faq')) text-blue-500 border-blue-500 hover:text-blue-700 @else border-gray-100 hover:text-gray-700 @endif">FAQ</p>
                        </a>
                    </div>

                    <div class="flex text-gray-500">
                        <a class="block flex hover:text-gray-700 mr-5" href="https://github.com/upb-uc4/">
                            <i class="fab fa-2x fa-github"></i>
                        </a>
                        <a class="block flex hover:text-gray-700 mr-5" href="https://twitter.com/uc4_official">
                            <i class="fab fa-2x fa-twitter"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
