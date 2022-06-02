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
                Timecard Entry
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
                               placeholder="Search Employee"
                               class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg ring-sky-500 border-sky-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                               required>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid pb-2 bg-white ">
                    <h1 class="w-full text-center text-red-600 font-bold text-2xl">
                        <i class="fa fa-solid fa-caret-left pr-10 text-teal-500 text-3xl"></i>
                        JUN 14 - JUN 21
                        <i class="fa fa-solid fa-caret-right pl-10 text-slate-600 text-3xl"></i>
                    </h1>
                </div>
                <div class="bg-white overflow-hidden shadow-sm">

                    <div class="flex flex-row ">
                        <div class="w-full ">
                            <div class="flex flex-row py-2 px-20 ">
                                <div class="basis-4/12 pr-5">
                                    <input type="text" id="employee"
                                           placeholder="Employee"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-2/12 pr-20">
                                    <input type="text" id="position"
                                           placeholder="Position"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-3/12 pl-5 pr-5">
                                    <input type="text" id="hours"
                                           placeholder="Total Hours"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-3/12">
                                    <input type="text" id="rate"
                                           placeholder="Rate"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                            </div>
                            <div class="flex flex-row py-2 mx-20 border-b-4 border-gray-300  border-gray-300">
                                <div class="basis-2/12 pr-5">
                                    <input type="text" id="in"
                                           placeholder="In"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-2/12">
                                    <input type="text" id="out"
                                           placeholder="Out"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-2/12 pl-5 pr-20">
                                    <input type="text" id="break"
                                           placeholder="Break"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-3/12 pl-5">
                                    <input type="text" id="team2"
                                           placeholder="Team 2 Hours"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>
                                </div>
                                <div class="basis-3/12 text-xl font-bold text-slate-400 pl-5">
                                    <h2>Amount</h2>
                                </div>
                            </div>
                            <div class="flex flex-row py-2 px-20">
                                <div class="basis-2/12 pr-5">
                                    <input type="text" id="break"
                                           placeholder="Break Out"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>

                                </div>
                                <div class="basis-2/12 pr-5">
                                    <input type="text" id="return"
                                           placeholder="Return"
                                           class="bg-gray-50 py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                           required>

                                </div>
                                <div class="basis-3/12 pr-5">

                                </div>
                                <div class="basis-3/12 pr-5">

                                </div>
                                <div class="basis-2/12 text-right">
                                    <button type="button"
                                            class=" text-white bg-cyan-600 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xl px-20 py-2 text-center mb-2">
                                        Update
                                    </button>
                                </div>
                            </div>
                            <table class="w-full pb-20">
                                <thead>
                                <tr class="border-t-4 border-b-8 border-gray-300">
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
                                        In
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Br Out
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Return
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        OUT
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Break
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Total
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Team 2
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Rate
                                    </th>
                                    <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                        Amount
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-gray-500 text-white font-bold py-3 ">
                                    <td colspan="13" class="text-left py-2 pl-5">
                                        Mon 6-14
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">


                                    </td>
                                    <td class="py-1 text-left pl-5 text-sky-600 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims
                                        <i class="fas fa-trash-alt text-red-500 text-right text-xl pr-5 float-right"></i>
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        15
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        15
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">

                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">


                                    </td>
                                    <td class="py-1 text-left pl-5 text-sky-600 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims
                                        <i class="fas fa-trash-alt text-red-500 text-right text-xl pr-5 float-right"></i>
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        15
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        15
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">

                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">
                                        <i class="fas fa-exclamation-triangle text-neutral-500"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5 text-zinc-400 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims
                                        <i class="fas fa-trash-alt text-red-500 text-right text-xl pr-5 float-right"></i>
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        15
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        15
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">

                                    </td>
                                </tr>

                                <tr class="bg-gray-500 text-white font-bold py-3 border-t-4 border-gray-300">
                                    <td colspan="13" class="text-left py-2 pl-5">
                                        Tue 6-15
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">

                                        <i class="far fa-clock text-teal-500 text-center text-xl"></i>
                                    </td>
                                    <td class="py-1 text-left pl-5 text-slate-800 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        7:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        8:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-700 font-bold border-r-2 border-b-2 border-slate-300">
                                        90
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">
                                        <i class="far fa-clock text-red-500 text-center text-xl"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5 text-slate-800 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        7:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        8:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">

                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">
                                        <i class="fas fa-phone-alt text-sky-600 text-center text-xl"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5 text-slate-800 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15.5
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-700 font-bold border-r-2 border-b-2 border-slate-300">
                                        90
                                    </td>
                                </tr>

                                <tr class="bg-slate-700 text-white font-bold py-3 border-t-4 border-gray-300">
                                    <td colspan="13" class="text-left py-2 pl-5">
                                        Wed 6-15
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">

                                        <i class="far fa-file text-red-500"></i>
                                    </td>
                                    <td class="py-1 text-left pl-5 text-red-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        5
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        14
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-700 font-bold border-r-2 border-b-2 border-slate-300">
                                        90
                                    </td>
                                </tr>
                                <tr class=" border-slate-100">
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-r-2 border-b-2 border-slate-200">
                                        <i class="far fa-file text-teal-500"></i>

                                    </td>
                                    <td class="py-1 text-left pl-5 text-teal-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        Clinton Mims
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-r-2 border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-500 font-bold border-r-2 border-b-2 border-slate-300">
                                        15.5
                                    </td>
                                    <td class="py-1 text-center bg-neutral-400 text-neutral-700 font-bold border-r-2 border-b-2 border-slate-300">
                                        90
                                    </td>
                                </tr>

                                <tr class="bg-teal-500 text-white font-bold uppercase py-3 border-t-8 border-gray-300  ">
                                    <td colspan="13" class="text-center py-2 pl-5">
                                        Matched Record
                                    </td>
                                </tr>

                                <tr class="bg-white text-neutral-600 font-bold py-3 border-t-4 border-b-2 border-gray-300">
                                    <td colspan="13" class="text-left py-2 pl-5">
                                        Tue 6-15
                                    </td>
                                </tr>

                                <tr class=" border-slate-100 ">
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-200">

                                        <i class="far fa-clock text-neutral-700"></i>
                                    </td>
                                    <td class="py-1 text-left pl-5 text-7eutral-500 font-bold border-slate-200">
                                        Clinton Mims

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        5
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-300">
                                        14
                                    </td>
                                    <td class="py-1 text-center text-neutral-700 font-bold border-slate-300">
                                        90
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-200">

                                        <i class="fas fa-phone-alt text-neutral-700"></i>
                                    </td>
                                    <td class="py-1 text-left pl-5 text-7eutral-500 font-bold border-slate-200">
                                        Clinton Mims

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        5
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-300">
                                        14
                                    </td>
                                    <td class="py-1 text-center text-neutral-700 font-bold border-slate-300">
                                        90
                                    </td>
                                </tr>

                                <tr class="bg-white text-neutral-600 font-bold py-3 border-b-2 border-t-2 border-gray-300">
                                    <td colspan="13" class="text-left py-2 pl-5">
                                        Web 6-16
                                    </td>
                                </tr>

                                <tr class=" border-slate-100 ">
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-200">


                                    </td>
                                    <td class="py-1 text-left pl-5 text-neutral-500 font-bold border-slate-200">
                                        Clinton Mims

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-200">
                                        5
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-slate-300">
                                        14
                                    </td>
                                    <td class="py-1 text-center text-neutral-700 font-bold border-slate-300">
                                        90
                                    </td>
                                </tr>

                                <tr class=" border-b-2 border-slate-200">
                                    <td class="py-1 text-center text-custom_blue font-bold border-slate-100">
                                    </td>
                                    <td class="py-1 text-center text-custom_blue font-bold border-b-2 border-slate-200">

                                        <i class="far fa-file text-neutral-700"></i>
                                    </td>
                                    <td class="py-1 text-left pl-5 text-7eutral-500 font-bold border-b-2 border-slate-200">
                                        Clinton Mims

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">
                                        Cook
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">
                                        4:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">
                                        11:00 PM
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">
                                        60
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">

                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-200">
                                        5
                                    </td>
                                    <td class="py-1 text-center text-neutral-500 font-bold border-b-2 border-slate-300">
                                        14
                                    </td>
                                    <td class="py-1 text-center text-neutral-700 font-bold border-b-2 border-slate-300">
                                        90
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
