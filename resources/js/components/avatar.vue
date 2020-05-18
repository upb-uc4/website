<template>
    <div class="max-w-sm overflow-hidden">
        <img class="w-32 h-32 mt-2 rounded-full object-cover mx-16" :src="image">
        <div class="my-6">
            <div class="text-center font-bold text-xl">{{ name }} {{ lastname }}</div>
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
            'image',
        ],
    }
</script>
