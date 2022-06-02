<script setup>

import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'bg-sky-600 block px-4 py-2 text-white hover:bg-sky-600 hover:text-white text-lg font-semibold'
    : 'block px-4 py-2 text-white bg-black hover:bg-sky-600 hover:text-white text-lg font-semibold'
);

</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
