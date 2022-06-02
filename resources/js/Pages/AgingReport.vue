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
                    <div class="w-full text-center bg-white p-2 font-semibold ">
                        <h1 class="text-4xl text-black">
                            ELEGANT SERVICE INC.
                        </h1>
                        <h2 class="text-3xl text-slate-700">
                            Aging Of Accounts Receivable
                        </h2>
                        <h5 class="text-black italic text-xl">
                            As Of January 10th, 2022
                        </h5>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm border-t-4 border-slate-300">
                    <table class="w-full">
                        <thead>
                        <tr class="border-b border-slate-300">
                            <th colspan="3"
                                class="bg-slate-600 text-center text-white font-bold text-3xl py-2 border-r-2 border-white">
                                TOTAL RECEIVABLE
                            </th>
                            <th colspan="4"
                                class="bg-white text-center text-black font-bold text-3xl py-2 border-r-2 border-white">
                                $ 1,978,515.57
                            </th>
                        </tr>
                        <tr class="border-b border-slate-300">
                            <th colspan="3"
                                class="border-r border-slate-300 bg-slate-600 text-center text-white font-bold text-3xl py-2 border-r-2 border-white">
                                TOTAL
                            </th>
                            <th
                                class="border-r border-slate-300 bg-white text-center text-black font-bold text-2xl py-2 border-r-2 border-white">
                                $ 466,976.00
                            </th>
                            <th
                                class="border-r border-slate-300 bg-white text-center text-black font-bold text-2xl py-2 border-r-2 border-white">
                                $ 592,832.00
                            </th>
                            <th
                                class="border-r border-slate-300 bg-white text-center text-black font-bold text-2xl py-2 border-r-2 border-white">
                                $ 760,248.00
                            </th>
                            <th
                                class="border-r border-slate-300 bg-white text-center text-black font-bold text-2xl py-2 border-r-2 border-white">
                                $ 158,458.00
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Invoice #
                            </th>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Date
                            </th>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Company
                            </th>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Current
                            </th>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                31-60 Days
                            </th>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                61-90 Days
                            </th>
                            <th class="text-center bg-slate-600 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                90+ Days
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="border-b-2 border-gray-200" v-for="i in 15" :key=i>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    308013
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    12/13/2021
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    Affairs To Remember
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    3991.25
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">

                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">

                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">

                                </td>
                            </tr>
                        
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
