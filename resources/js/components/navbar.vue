<template>
    <header class="bg-gray-100 pt-0 pb-8">
        <div class="bg-gray-100 z-100 bg-white flex items-center">
            <div class="w-full max-w-screen-xl relative mx-auto px-6">
                <div class="border-b-2 border-gray-200 h-24 flex flex-col justify-center" :class="isOpen ? 'h-full sm:h-24' : 'h-24'">

                    <div class="hidden sm:flex items-center justify-between">
                        <div>
                            <a href="/" class="block">
                                <h1 class="xl:text-2xl md:text-xl text-gray-800 font-black"><span class="text-blue-500">University</span> Credits <span class="text-blue-500">4</span>.0</h1>
                            </a>
                        </div>

                        <div class="flex items-center text-lg font-medium tracking-wide text-gray-500">
                            <a :href="route_home" class="block">
                                <p class="mr-8 border-b-4" :class="active_route_home ? 'text-blue-500 border-blue-500 hover:text-blue-700' : 'border-gray-100 hover:text-gray-700'">Home</p>
                            </a>
                            <a :href="route_about" class="block">
                                <p class="mr-8 border-b-4" :class="active_route_about ? 'text-blue-500 border-blue-500 hover:text-blue-700' : 'border-gray-100 hover:text-gray-700'">About</p>
                            </a>
                            <a :href="route_faq" class="block">
                                <p class="mr-8 border-b-4" :class="active_route_faq ? 'text-blue-500 border-blue-500 hover:text-blue-700' : 'border-gray-100 hover:text-gray-700'">FAQ</p>
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

                    <div class="sm:hidden flex items-center justify-between" :class="isOpen ? 'mt-4' : 'mt-0'">
                        <div>
                            <a href="/" class="block">
                                <h1 class="text-gray-800 font-black"><span class="text-blue-500">University</span> Credits <span class="text-blue-500">4</span>.0</h1>
                            </a>
                        </div>
                        <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-gray-700 focus:outline-none">
                            <svg class="h-8 w-8 fill-current" viewBox="0 0 24 24">
                                <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                                <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                            </svg>
                        </button>
                    </div>

                    <div :class="isOpen ? 'block' : 'hidden'" class="my-4 text-lg sm:hidden font-medium tracking-wide text-gray-500">
                        <a :href="route_home" class="block hover:text-gray-700 hover:bg-gray-300">Home</a>
                        <a :href="route_about" class="mt-1 block hover:text-gray-700 hover:bg-gray-300">About</a>
                        <a :href="route_faq" class="mt-1 block hover:text-gray-700 hover:bg-gray-300">FAQ</a>
                        <a href="https://github.com/upb-uc4/" class="mt-1 block hover:text-gray-700 hover:bg-gray-300">Check us out on GitHub <i class="ml-1 fab fa-github"></i></a>
                        <a href="https://twitter.com/uc4_official" class="mt-1 block hover:text-gray-700 hover:bg-gray-300">Follow us on Twitter <i class="ml-1 fab fa-twitter"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        props: [
            'active_route_home',
            'active_route_about',
            'active_route_faq',
            'route_home',
            'route_about',
            'route_faq',
        ],
        data() {
            return {
                isOpen: false,
            }
        }
    }
</script>
