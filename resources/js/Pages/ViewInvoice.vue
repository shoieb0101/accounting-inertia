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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid p-4 bg-white border-b border-gray-200">
                    <div class="flex flex-row">
                        <div class="basis-1/5 px-5">
                            <select class="form-select form-select-lg mb-3
                                          appearance-none
                                          block
                                          w-full
                                          px-4
                                          py-2
                                          text-xl
                                          font-normal
                                          text-gray-700
                                          bg-white bg-clip-padding bg-no-repeat
                                          border border-solid border-gray-300
                                          rounded
                                          transition
                                          ease-in-out
                                          m-0
                                          focus:text-gray-700 focus:bg-white focus:outline-none"
                                    aria-label=".form-select-lg example">
                                <option selected>Open Invoices</option>
                                <option value="1">Closed Invoices</option>
                                <option value="2">All Invoices</option>
                            </select>
                        </div>
                        <div class="basis-1/5 px-5">
                            <input type="text" id="from" placeholder="11/11/2022"
                                   class=" py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                   required="" autocomplete="off">
                        </div>
                        <div class="basis-1/5 px-5">
                            <input type="text" id="to" placeholder="18/11/2022"
                                   class=" py-2 border border-gray-300 text-xl placeholder:text-xl placeholder:text-bold text-sm rounded-lg block w-full focus:border-cyan-500"
                                   required="" autocomplete="off">
                        </div>
                        <div class="basis-1/5 px-5">
                            <select class="form-select form-select-lg mb-3
                                          appearance-none
                                          block
                                          w-full
                                          px-4
                                          py-2
                                          text-xl
                                          font-normal
                                          text-gray-700
                                          bg-white bg-clip-padding bg-no-repeat
                                          border border-solid border-gray-300
                                          rounded
                                          transition
                                          ease-in-out
                                          m-0
                                          focus:text-gray-700 focus:bg-white focus:outline-none"
                                    aria-label=".form-select-lg example">
                                <option selected>All Clients</option>
                            </select>
                        </div>
                        <div class="basis-1/5 px-5">
                            <i class="fas fa-search fa-2x text-2xl bg-sky-700 text-white p-2 rounded-md"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="flex flex-row py-1">
                    <div class="w-full text-center text-white bg-red-700 p-2 font-semibold text-4xl">
                        Open Invoices
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm">
                    <table class="w-full ">
                        <thead>
                        <tr>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Invoice
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Date
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Code
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Client Name
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Department
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Contact
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Amount
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Paid
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Due
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                View
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Edit
                            </th>
                            <th class="text-center bg-black text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Payment
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                       
                            <tr class="border-b-2 border-gray-200" v-for="i in 15" :key=i> 
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">12345
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">4/26/2022
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">COB</td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">Cobb
                                    Energy
                                    Center
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">Kitchen
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    Mr. John Doe
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    1233
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    0
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    345
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    <i class="far fa-eye text-orange-500"></i>
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    <i class="far fa-edit text-sky-500"></i>
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    <i class="fas fa-dollar-sign text-green-500"></i>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>


                    <div class="flex flex-row py-1">
                        <div class="basis-2/12 text-center text-white bg-slate-600 p-2 font-semibold text-4xl">

                        </div>
                        <div class="basis-8/12 text-center text-white bg-slate-600 p-2 font-semibold text-4xl">
                            Closed Invoices
                        </div>

                        <div class="basis-2/12 text-center text-white bg-slate-600 p-2 font-semibold text-xl">
                            <div class="form-check form-check-inline w-48 text-xl float-right">
                                <input
                                    class="form-check-input appearance-none h-4 w-4 border border-white rounded-sm bg-slate-600 checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label inline-block text-white"
                                       for="inlineCheckbox1">Re-open Invoice</label>
                            </div>
                        </div>
                    </div>

                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Invoice
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Date
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Code
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Client Name
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Department
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Contact
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Amount
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Paid
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                Due
                            </th>
                            <th class="text-center bg-slate-500 text-white font-semibold text-xl py-2 border-r-2 border-white">
                                View
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="border-b-2 border-gray-200" v-for="i in 15" :key=i>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">12345
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">4/26/2022
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">COB</td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">Cobb
                                    Energy
                                    Center
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">Kitchen
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    Mr. John Doe
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    1233
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    0
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    345
                                </td>
                                <td class="text-center text-slate-700 py-2 text-lg border-r-2 border-gray-200">
                                    <i class="far fa-eye text-orange-500"></i>
                                </td>
                            </tr>
                       
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
