<template>
      <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Register</h2>
      </div>
      <form class="mt-8 space-y-6" method="POST">
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm -space-y-px">
          
          <div>
            <p>Name:</p>
            <label for="Name" class="sr-only">Full Name:</label>
            <input id="Name" name="Name" type="text" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
          </div>

          <div>
            <p>Email:</p>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required="" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address" />
          </div>

          <div>
            <p>Password:</p>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password" />
          </div>
          
          <div>
            <p>Confirm Password:</p>
            <label for="con-password" class="sr-only">Confirm Password</label>
            <input id="con-password" name="con-password" type="password" autocomplete="current-password" required="" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 F focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password" />
          </div>


        <div>
            <p>Phone Number:</p>
            <label for="Pnumber" class="sr-only">Full Name:</label>
            <input id="Pnumber" name="Pnumber" type="number" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Phone Number" />
        </div>

        <div>
            <p>Address:</p>
            <label for="Address" class="sr-only">Full Name:</label>
            <input id="Address" name="Address" type="text" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Address" />
        </div> 

        <div class="flex justify-center">
          <div class="mb-3 w-96">
            <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Photo with ID:</label>
            <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
          </div>
        </div>
      </div>

        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="sendJSON()">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true" />
            </span>
            Sign Up
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<!-- <script>
 export default{
     name: "Register"
     }
</script> -->
<script>
  function sendJSON(){
              
            let result = document.querySelector('.email-address');
            let name = document.querySelector('.name');
            let email = document.querySelector('.password');
              
            // Creating a XHR object
            let xhr = new XMLHttpRequest();
            let url = "http://127.0.0.1:8000/api/register";
       
            // open a connection
            xhr.open("POST", url, true);
 
            // Set the request header i.e. which type of content you are sending
            xhr.setRequestHeader("Content-Type", "application/json");
 
            // Create a state change callback
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                  console.log('sent')
                    // Print received data from server
                    //result.innerHTML = this.responseText;
 
                }
            };
 
            // Converting JSON data to string
            var data = JSON.stringify({ "name": name.value, "email": email.value });
 
            // Sending data with the request
            xhr.send(data);
        }
</script>

<style scoped>

</style>