<script setup>
import { ref } from 'vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>  


<template>
                                <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </BreezeNavLink>

                                 <BreezeDropdown align="right">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="w-56 text-center inline-flex items-center px-10 pt-1 h-12 border-l-4 text-2xl  leading-5 text-white font-semibold focus:outline-none transition duration-150 ease-in-out">
                                                <div class="w-full text-center"><span>Timecard</span>
                            </div>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <BreezeDropdownLink :href="route('timecard-entry')" :active="route().current('timecard-entry')">
                                             Timecard Entry
                                        </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('entry-1')" :active="route().current('entry-1')">
                                            Timecard Entry Review
                                        </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>


                                <BreezeDropdown align="right">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="w-56 text-center inline-flex items-center px-10 pt-1 h-12 border-l-4 text-2xl  leading-5 text-white font-semibold focus:outline-none transition duration-150 ease-in-out">
                                                <div class="w-full text-center"><span>Payroll</span>
                            </div>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <BreezeDropdownLink :href="route('pending-payroll')" :active="route().current('pending-payroll')">
                                             Timecard Pending
                                        </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('dashboard')" :active="route().current('dashboard')">
                                            Timecard Completed
                                        </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>

                                <BreezeDropdown align="right">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="w-56 text-center inline-flex items-center px-10 pt-1 h-12 border-l-4 text-2xl  leading-5 text-white font-semibold focus:outline-none transition duration-150 ease-in-out">
                                                <div class="w-full text-center"><span>Invoice</span>
                            </div>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <BreezeDropdownLink :href="route('view-invoice')" :active="route().current('view-invoice')">
                                             View Invoice
                                        </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('entry-2')" :active="route().current('entry-2')">
                                            Payment Entry
                                        </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('payment-review')" :active="route().current('payment-review')">
                                            Payment Entry Review
                                        </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>

                                <BreezeDropdown align="right">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" :class="route().current('statement') || route().current('aging-report')?'bg-sky-600':''" class="w-56 text-center inline-flex items-center px-10 pt-1 h-12 border-l-4 text-2xl  leading-5 text-white font-semibold focus:outline-none transition duration-150 ease-in-out">
                                                <div class="w-full text-center"><span>Reports</span>
                            </div>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <BreezeDropdownLink :href="route('statement')" :active="route().current('statement')">
                                            Statement
                                        </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('aging-report')" :active="route().current('aging-report')">
                                            Aging Report
                                        </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>
</template>