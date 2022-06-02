<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            
        </template>

        <div class="max-w-12xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="flex flex-row py-1">
                    <div class="w-full text-center text-white bg-sky-600 p-4 font-semibold text-4xl">
                        STATEMENT
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm">
                    <table class="w-full ">
                        <thead>
                        <tr>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Open Invoice #
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Client Name
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Total Amount
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Total Paid
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Total Due
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="border-b-2 border-gray-200" v-for="i in 15" :key=i>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">12345
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    Cobb
                                    Energy
                                    Center
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">1044.00
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    0.00
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    1044.00
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
