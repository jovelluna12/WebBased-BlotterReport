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


    <div class="container mx-auto space-y-6 bg-white h-auto">
                <form class="mt-8 space-y-6" action="#" method="POST">
                        <input type="hidden" name="remember" value="true" />
                        <div class="rounded-md shadow-sm -space-y-px">
                    <div class="bg-cyan-300 border-2 border-black">    
                    <h1 class="text-2xl">Report</h1>
                    </div>
                        <div class="grid grid-cols-2 border-2 py-2 border-white divide-x">
                            <div>
                                <p>Name:</p>
                                <label for="Name" class="sr-only">Full Name:</label>
                                <p class="px-2 text-xl">Jan</p>
                            </div>
                            <div>
                                <p>Date:</p>
                                <label for="Date" class="sr-only">Email address</label>
                                <p class="px-2 text-xl">12/2/2021</p>
                            </div>
                        </div>

                        <div class="border-2 py-2 border-white">
                            <p>Address:</p>
                            <label for="Address" class="sr-only">Password</label>
                            <p class="px-2 text-xl">Lapasn</p>
                        </div>
                        
                        <div class="grid grid-cols-2 border-2 py-2 border-white divide-x">
                            <div>
                                <p>Email:</p>
                                <label for="email-address" class="sr-only">Email address</label>
                                <p class="px-2 text-xl">Jan@gmail.com</p>
                            </div>
                            <div>
                                <p>Phone Number:</p>
                                <label for="Pnumber" class="sr-only">Full Name:</label>
                               <p class="px-2 text-xl">0916172334</p>
                            </div>
                        </div>

                        <div class="flex justify-center">
                        <div class="mb-3 w-96">
                            <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Image that will be use for the report!!</label>
                                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
                                </div>
                        </div>

                        <div class="max-w-full flex justify-center" >
                            <p class="px-2 text-xl">Jan ajksdhjkhajksdhajkshdjkahsdjkhajkshdjkash</p>
                        </div>

                    </div> 
                <div>
                <div class="grid grid-cols-2 border-2 py-2 border-white divide-x">
                    <button type="submit" class="group relative w-20 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-rose-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true" />
                        </span>
                        Reject
                    </button>
                    <button type="submit" class="group relative w-20 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true" />
                        </span>
                        Accept
                    </button>
                </div>
                </div>
            </form>
            </div>
  </Popover>
</template>


<script>
 export default{
     name: "Read"
     }
</script>