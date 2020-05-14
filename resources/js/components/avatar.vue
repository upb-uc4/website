<template>
    <div class="max-w-sm overflow-hidden">
        <img class="w-32 h-32 mt-2 rounded-full object-cover mx-16" src="https://www.constructdigital.com/hs-fs/hubfs/Minh-1.jpg?width=1200&height=1200&name=Minh-1.jpg">
        <div class="my-6">
            <div class="text-center font-bold text-xl">{{ name }} {{ lastname}}</div>
            <div class="text-center text-sm text-gray-500 uppercase font-semibold">{{ title }}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "avatar.vue",
        props: [
            'name',
            'lastname',
            'title',
        ],
    }
</script>
