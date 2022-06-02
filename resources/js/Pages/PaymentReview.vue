<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="max-w-12xl mx-auto">
                <h2 class="font-semibold text-3xl text-white text-bold bg-slate-600 text-center leading-tight py-4 px-2 border-b-2 border-b-white">
                    PAYMENT REVIEW
                </h2>
            </div>
        </template>

        <div class="max-w-12xl mx-auto">
            <div class="bg-white overflow-hidden">
                <div class="bg-white overflow-hidden shadow-sm">
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-4 border-r-2 border-b-2 border-white"
                                rowspan="2">
                                View
                            </th>
                            <th class="text-center bg-sky-600 text-white font-bold uppercase py-4 border-r-2 border-b-2 border-white"
                                colspan="3">
                                Entry
                            </th>
                            <th class="text-center bg-black text-white font-bold uppercase py-4 border-r-2 border-b-2 border-white"
                                colspan="3">
                                Review
                            </th>
                        </tr>
                        <tr>
                            <th class="text-left pl-10 bg-slate-700 text-white font-bold uppercase py-4 border-r-2 border-white">
                                Invoice Number
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-4 border-r-2 border-white">
                                Invoice Date
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-4 border-r-2 border-white">
                                Paid
                            </th>
                            <th class="text-center bg-black text-white font-bold uppercase py-4 border-r-2 border-white">
                                Due
                            </th>
                            <th class="text-center bg-black text-white font-bold uppercase py-4 border-r-2 border-white">
                                Discrepancy
                            </th>
                            <th class="text-center bg-black text-white font-bold uppercase py-4 border-r-2 border-white">
                                Accept
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="border-b-2 border-slate-100" v-for="i in 15" :key=i>
                                <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                    <i class="far fa-eye text-2xl text-orange-500"></i>
                                </td>
                                <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                    325 256
                                </td>
                                <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                    2/25/2022
                                </td>
                                <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                    125.29
                                </td>
                                <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                    125.87
                                </td>
                                <td class="py-2 text-center  border-r-2 border-slate-100">
                                    <span class="text-red-600 font-bold">
                                        245.25
                                    </span>
                                </td>
                                <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                    <div class="form-check form-check-inline w-48 text-xl float-right">
                                        <input
                                            class="form-check-input appearance-none h-4 w-4 border-2 border-sky-600 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                    </div>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
