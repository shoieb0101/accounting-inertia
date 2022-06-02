<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="max-w-12xl mx-auto">
                <h2 class="font-semibold text-2xl text-white font-bold bg-slate-600 text-center leading-tight py-2 px-2">
                    Timecard Entry (Team 2)
                </h2>
            </div>
        </template>

        <div class="max-w-12xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid pt-4 pb-2 align-middle bg-white">

                    <div class="text-teal-500 text-center">
                        <i class="far fa-clock fa-3x"></i>
                    </div>
                    <div class="col-start-2 col-end-4 text-3xl text-slate-800 font-bold inline-block align-top">
                        Cobb Energy Center

                    </div>

                    <div class="col-start-4 col-end-7">
                        <input type="text" id="search"
                               placeholder="Search Client"
                               class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg ring-sky-500 border-sky-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                               required>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid pb-2 bg-white border-b border-gray-200">
                    <h1 class="w-full text-center text-red-600 font-bold text-2xl">
                        <i class="fa fa-solid fa-caret-left pr-10 text-teal-500 text-3xl"></i>
                        JUN 14 - JUN 21
                        <i class="fa fa-solid fa-caret-right pl-10 text-slate-600 text-3xl"></i>
                    </h1>
                </div>
                <div class="bg-white overflow-hidden shadow-sm">

                    <div class="flex flex-row border-t-4 border-gray-300">
                        <div class="basis-2/6">
                            <h1 class="bg-slate-700 text-center font-bold text-white text-2xl py-2">Scheduled
                                Employee</h1>
                            <h1 class="bg-gray-500 text-center font-bold text-white text-2xl py-2">Mon 6-14</h1>

                            <table class="w-full">
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                            </table>

                            <h1 class="bg-gray-500 text-center font-bold text-white text-2xl py-2">Wed 6-16</h1>

                            <table class="w-full">
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                                <tr class="text-zinc-600 text-lg border-b-2 border-gray-300 ">
                                    <td class="w-1/2 text-center border-r-2 border-gray-300 py-1">Cook</td>
                                    <td class="w-1/2 text-center py-1">Clinton Mims</td>
                                </tr>
                            </table>
                        </div>
                        <div class="basis-4/6 border-l-4 border-gray-300">
                            <div class="flex flex-row py-2 px-20">
                                <div class="basis-3/6 pr-5">
                                    <input type="text" id="employee"
                                           placeholder="Employee"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-3/6">
                                    <input type="text" id="position"
                                           placeholder="Position"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                            </div>
                            <div class="flex flex-row py-2 px-20">
                                <div class="basis-1/4 pr-5">
                                    <input type="text" id="hours"
                                           placeholder="Total Hours"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-1/4 pr-5">

                                </div>
                                <div class="basis-1/4 pr-5">

                                </div>
                                <div class="basis-1/4 text-right">
                                    <button type="button"
                                            class=" text-white bg-sky-600 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xl px-20 py-2 text-center mb-2">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            <table class="w-full">
                                <thead>
                                <tr class="border-t-4 border-b-4 border-gray-300">
                                    <th class="w-32 text-left pl-5 bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        DAY DATE
                                    </th>
                                    <th class="w-32 text-left pl-5 bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-l-2 border-white">

                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        NAME
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        JOB
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Hours
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        RATE
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-gray-500 text-white font-bold uppercase py-3 border-r-2 border-white ">
                                    <td colspan="7" class="text-left py-2 pl-5">
                                        Mon 6-14
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-100">


                                    </td>
                                    <td class="py-1 text-left pl-5 text-sky-600 font-bold border-r-2 border-b-2  border-slate-100">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class="border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-100">


                                    </td>
                                    <td class="py-1 text-left pl-5 text-sky-600 font-bold border-r-2 border-b-2 border-slate-100">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                        <i class="fas fa-exclamation-triangle text-slate-700"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5  text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class="bg-gray-500 text-white font-bold uppercase py-3 border-r-2 border-white ">
                                    <td colspan="7" class="text-left py-2 pl-5">
                                        Wed 6-16
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2  border-slate-100">
                                        <i class="far fa-file text-red-500"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5  text-red-500 font-bold border-r-2 border-b-2 border-slate-100">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                        <i class="far fa-file text-teal-500"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5 text-teal-500 font-bold border-r-2 border-b-2 border-slate-100">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-b-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class="bg-teal-500 text-white font-bold uppercase py-3 border-t-8 border-gray-300  ">
                                    <td colspan="7" class="text-center py-2 pl-5">
                                        Matched Record
                                    </td>
                                </tr>
                                <tr class="bg-white  text-slate-600 font-bold uppercase py-3 border-r-2  border-b-2 border-slate-100 ">
                                    <td colspan="7" class="text-left py-2 pl-5">
                                        Mon 6-14
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                        <i class="far fa-file text-slate-700"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5  text-slate-700 font-bold">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                        <i class="far fa-file text-slate-700"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5  text-slate-700 font-bold">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class="bg-white text-slate-600 font-bold uppercase py-3 border-r-2  border-b-2 border-slate-100 ">
                                    <td colspan="7" class="text-left py-2 pl-5">
                                        Wed 6-16
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                        <i class="far fa-file text-slate-700"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5 text-slate-700 font-bold">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold">
                                        <i class="far fa-file text-slate-700"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5  text-slate-700 font-bold">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold">

                                    </td>
                                    <td class="py-1 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                        15
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
