<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="max-w-12xl mx-auto">
                <h2 class="font-semibold text-3xl text-white text-bold bg-slate-600 text-center leading-tight py-4 px-2">
                    HOME
                </h2>
            </div>
        </template>

        <div class="max-w-12xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid p-6 bg-white border-b border-gray-200">
                    <div>
                        <button type="button"
                                class="text-white bg-custom_blue focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Team 1
                        </button>
                        <button type="button"
                                class="text-gray-500 bg-neutral-400  focus:ring-4 focus:ring-neutral-300 font-bold rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">
                            Team 2
                        </button>
                        <button type="button"
                                class="text-gray-500 bg-neutral-400  focus:ring-4 focus:ring-neutral-300 font-bold rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">
                            Admin
                        </button>
                    </div>

                    <div class="col-start-4 col-end-7">
                        <input type="text" id="search"
                               placeholder="Search Client"
                               class="bg-gray-50 py-4 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg ring-sky-500 border-sky-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                               required>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid p-6 bg-white border-b border-gray-200">
                    <h1 class="w-full text-center text-red-600 font-bold text-4xl">
                        <i class="fa fa-solid fa-caret-left pr-10 text-cyan-600"></i>
                        JUN 14 - JUN 21
                        <i class="fa fa-solid fa-caret-right w-7 h-5 pl-10 text-slate-600"></i>
                    </h1>
                </div>
                <div class="bg-white overflow-hidden shadow-sm">
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Client Name
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Blank
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Pending Entry
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Wrong Entry
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Awaiting Approval
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Clock Error
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                Claim
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3 border-r-2 border-white">
                                No Show
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-3">Total</th>
                        </tr>
                        </thead>
                        <tbody class="text-xl">
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-2 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                <i class="far fa-clock pr-10 text-cyan-500"></i>
                                Cobb
                                Energy Center
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">10</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100"></td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">2</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">5</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">1</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">1</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">1</td>
                            <td class="py-2 text-center text-slate-700 font-bold">20</td>
                        </tr>
                        <tr class="border-bottom-2 border-gray-300">
                            <td class="py-2 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                <i class="far fa-clock pr-10 text-cyan-500"></i>
                                Cobb
                                Energy Center
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">10</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100"></td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">2</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">5</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">1</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">1</td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">1</td>
                            <td class="py-2 text-center text-slate-700 font-bold">20</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
