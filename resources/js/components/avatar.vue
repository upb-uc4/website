<template>
    <div class="max-w-sm overflow-hidden">
        <img class="w-48 h-48 mt-2 rounded-full object-cover mx-8" src="https://www.constructdigital.com/hs-fs/hubfs/Minh-1.jpg?width=1200&height=1200&name=Minh-1.jpg">
        <div class="py-4">
            <div class="text-center font-bold text-xl">{{ name }} {{ lastname}}</div>
            <div class="text-center text-gray-500">{{ title }}</div>
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
