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
                    Pending Payroll
                </h2>
            </div>
        </template>

        <div class="max-w-12xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row">
                        <div class="basis-1/2 pl-10 pr-20">
                            <input type="text" id="group"
                                   placeholder="Payroll Group 1"
                                   class="bg-gray-50 py-4 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg ring-sky-500 border-sky-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                   required>
                        </div>
                        <div class="basis-1/2 pl-20 pr-10">
                            <input type="text" id="employee"
                                   placeholder="Search Employee"
                                   class="bg-gray-50 py-4 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg ring-sky-500 border-sky-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                   required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-row py-3">
                    <div class="basis-7/12 text-right text-sky-600 font-bold text-4xl">
                        Ready For Payroll
                    </div>
                    <div class="basis-5/12 text-right">
                        <button type="button"
                                class="text-white bg-custom_blue hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Next Payroll
                        </button>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm">
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-left pl-10 bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Select All
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Employee Name
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Date
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Client Name
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Job
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Hour
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Type(Reg/OT)
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2 border-r-2 border-white">
                                Rate
                            </th>
                            <th class="text-center bg-slate-700 text-white font-bold uppercase py-2">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b-2 border-slate-100">
                            <td colspan="9"
                                class="text-left bg-gray-500 font-bold text-white text-xl py-3 pl-10">Previous
                                Week
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-2 justify-center font-bold border-r-2 border-slate-100">
                                <div class="flex justify-center">
                                    <div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                                type="checkbox" value="" id="flexCheckDefault3">
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Clinton Mims
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                25 - Mar
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Cobb Energy Center
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Server
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                5
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Reg
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                12
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold">
                                60
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-2 justify-center font-bold border-r-2 border-slate-100">
                                <div class="flex justify-center">
                                    <div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                                type="checkbox" value="" id="flexCheckDefault3">
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Clinton Mims
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                25 - Mar
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Cobb Energy Center
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Server
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                5
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                Reg
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold border-r-2 border-slate-100">
                                12
                            </td>
                            <td class="py-2 text-center text-slate-700 font-bold">
                                60
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
