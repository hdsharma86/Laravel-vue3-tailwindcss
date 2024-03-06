<template>
    <div class="flex flex-row justify-center h-screen items-center">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Admin Login</h5>
            <div class="w-full max-w-xs">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="handleSubmit">
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Username
                    </label>
                    <input v-model="form.email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                  </div>
                  <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                      Password
                    </label>
                    <input autocapitalize="true" v-model="form.password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic">Please choose a password.</p>
                  </div>
                  <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                      Forgot Password?
                    </a>
                  </div>
                </form>
                <p class="text-center text-gray-500 text-xs">
                  &copy;2020 Acme Corp. All rights reserved.
                </p>
              </div>
        </div>
    </div>
    
</template>
<script setup>
    import {reactive, ref} from 'vue';
    import store from "../store";
    import router from "../router";
    const form = reactive({
        email: '',
        password: ''
    });
    let loading = ref(false);
    const errorMessage = ref('');
    const handleSubmit = () => {
        store.dispatch('login', form)
        .then(() => {
            loading.value = false;
            router.push({name: 'admin.dashboard'})
        })
        .catch(({response}) => {
            console.log(response)
            loading.value = false;
            //errorMessage.value = response.data.message;
        })
    }
</script>