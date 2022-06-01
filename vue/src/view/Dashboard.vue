<template>
  <Popover class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Workflow</span>
            <lebal Class="text-2xl">Welcome to the BlotterReport Website</lebal>
          </a>
        </div>     
        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
          <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Sign in </a>
          <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
        </div>
      </div>
    </div>
    <div class="container mx-auto bg-white">
  <lebal >h</lebal>
    </div>
  </Popover>
</template>


<script>
  export default{
     name: "Dashboard"
     }
</script>

<script setup>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
  BookmarkAltIcon,
  CalendarIcon,
  ChartBarIcon,
  CursorClickIcon,
  MenuIcon,
  PhoneIcon,
  PlayIcon,
  RefreshIcon,
  ShieldCheckIcon,
  SupportIcon,
  ViewGridIcon,
  XIcon,
} from '@heroicons/vue/outline'
import { ChevronDownIcon } from '@heroicons/vue/solid'


</script>
