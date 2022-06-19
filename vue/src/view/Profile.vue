<template>
 <Popover class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Workflow</span>
            <lebal Class="text-2xl">BlotterReport Website</lebal>
          </a>
        </div>     
        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
          <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Sign in </a>
          <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
        </div>
      </div>
    </div>

    <div class="fixed top-25 left-0 h-screen w-40 bg-white">
        <img class="inline-block h-32 w-32 m-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
        <p class="text-center">Name</p>

        <a href="#" class="ml-3 whitespace-nowrap inline-flex fixed bottom-20 px-9 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Logout</a>
        <a href="#" class="ml-3 whitespace-nowrap inline-flex fixed bottom-[124px] px-10 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Sitting</a>
        <a href="#" class="ml-3 whitespace-nowrap inline-flex fixed bottom-[168px] px-10 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Report</a>
    </div>

        <div class="fixed top-25 left-[160px] w-screen px-2 py-2 h-screen bg-white">
          <div class="py-1 px-8 w-10/12 h-1/2 border-4 bg-white rounded-xl shadow-lg space-y-2 sm:space-y-0 sm:space-x-6">
          <img class="inline-block h-20 w-auto m-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            <div class="text-center space-y-2 sm:text-left">
              <div class="space-y-0.5">
                <p class="text-lg text-black font-semibold">
                  Jan Night Lance
                </p>
                <p class="text-slate-500 font-medium">
                  Report Title
              </p>
            </div>
            <div class="py-8 px-1 w-full h-1/2 border-4 bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-top sm:space-y-0 sm:space-x-6">
            <p>hello</p>
            </div>
            <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Check</button>
          </div>
        </div>
      </div>
  
 </Popover>
</template>

<script>
 export default{
     name: "Profile"
     }
</script>