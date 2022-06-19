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

    <div class="flex justify mx-auto bg-white place-content-around my-9 ">
        <div>
          <img class="w-full h-32 rounded-full" src="C:/Users/Auyao/Desktop/IPT/WebBased-BlotterReport/vue/PIC/logo.png">
        </div>
        <div>
          <p>“To my mind, a picture should be something pleasant, cheerful, and pretty, yes pretty!</p>
          <p>There are too many unpleasant things in life as it is without creating still more of them.”</p>
          <p> ― Pierre-Auguste Renoir</p>
        </div>
    </div>

    <div class="flex justify-center mx-auto h-80 py-52 bg-white border-2 ">
        <div>
          <p class="mt-2 text-center text-sm text-gray-600">hello</p>
        </div>
    </div>

    <label>News</label>
    <div class="flex justify-center w-full h-auto bg-white border-4 my-4">
           <ul class="divide-y divide-gray-100 w-full border-1 my-3">
              <li class="grid grid-cols-2 m-2 rounded-md border-2 p-10 hover:bg-blue-100 hover:text-blue-200">
                  <div>
                    <img class="w-40 h-20 border-2 ">
                  </div>
                  <div>
                    <p>1</p>
                  </div>
              </li>
              <li class="grid grid-cols-2 m-2 rounded-md border-2 p-10 hover:bg-blue-100 hover:text-blue-200">
                  <div>
                    <img class="w-40 h-20 border-2 ">
                  </div>
                  <div>
                    <p>2</p>
                  </div>
              </li>
              <li class="grid grid-cols-2 m-2 rounded-md border-2 p-10 hover:bg-blue-100 hover:text-blue-200">
                  <div>
                    <img class="w-40 h-20 border-2 ">
                  </div>
                  <div>
                    <p>3</p>
                  </div>
              </li>
          </ul>
    </div>
  </Popover>
</template>


<script>
  export default{
     name: "Dashboard"
     }
</script>