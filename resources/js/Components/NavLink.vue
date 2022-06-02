<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'bg-sky-600 w-56 text-center inline-flex items-center px-10 pt-1 h-12 border-l-4 text-2xl  leading-5 text-white font-semibold focus:outline-none transition duration-150 ease-in-out'
    : 'w-56 text-center inline-flex items-center px-10 pt-1 h-12 border-l-4 text-2xl  leading-5 text-white font-semibold focus:outline-none transition duration-150 ease-in-out'
);

</script>

<template>
    <div class="hidden space-x-8 sm:-my-px sm:flex">
        <Link :href="href" :class="classes">
            <slot />
        </Link>
    </div>
</template>
