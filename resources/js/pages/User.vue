<template>
    <div class="p-4 mt-16" :class="isSidePanel ? 'sm:ml-64' : ''">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <h5 class="text-xl font-bold dark:text-blue pb-3">Users</h5>
            <div class="relative overflow-x-auto">
                <div
                    class="flex items-center justify-end flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users"
                            class="block px-2 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for users">
                    </div>

                    <button @click="setIsOpen(true)" type="button"
                        class="ml-3 py-2 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Add
                        New</button>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Sr. No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email Verified At
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user, index) in users"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ index + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ user.name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ user.email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ user.email_verified_at }}
                            </td>
                            <td>
                                <div class="flex justify-center items-center">
                                    <button class="'text-gray-900 group flex items-center rounded-md px-2 py-2 text-sm'" @click="">
                                        <PencilIcon
                                            class="mr-2 h-5 w-5 text-indigo-400"
                                            aria-hidden="true"
                                        />
                                    </button>
                                    <button class="'text-gray-900 group flex items-center rounded-md px-2 py-2 text-sm'" @click="removeUser(user)">
                                        <TrashIcon
                                            class="mr-2 h-5 w-5 text-indigo-400"
                                            aria-hidden="true"
                                        />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end mt-3">
                <VuePagination :total="total" v-model:value="currentPage" :perPage="perPage" :classes="classes"
                    @set="changePage" />
            </div>


            <Dialog :open="isOpen" @close="setIsOpen" class="relative z-50 max-w-4xl">
                <!-- The backdrop, rendered as a fixed sibling to the panel container -->
                <div class="fixed inset-0 bg-black/30" aria-hidden="true" />
                <!-- Full-screen container to center the panel -->
                <div class="fixed inset-0 flex w-screen items-center justify-center p-4">
                    <!-- The actual dialog panel -->
                    <DialogPanel class="w-full max-w-sm relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <DialogTitle class="text-xl font-medium text-gray-900 dark:text-white">Add New
                            </DialogTitle>
                            <button @click="setIsOpen(false)" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="large-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <form class="space-y-6" action="#">
                                <div>
                                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input v-model="userDetail.name" type="text" name="username" id="username" placeholder="Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input v-model="userDetail.email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                                </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button 
                                @click="saveUser()" 
                                type="button" 
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
                                Submit 
                            </button>
                            <button @click="setIsOpen(false)" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                        </div>
                    </DialogPanel>
                </div>
            </Dialog>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import store from "../store";
import router from "../router";
import { Dialog, DialogPanel, DialogTitle, DialogDescription } from '@headlessui/vue';
import axiosClient from "../axios";
import { PencilIcon, TrashIcon} from '@heroicons/vue/20/solid'

const isSidePanel = computed(() => store.state.sidebar);
const total = ref(0);
const perPage = ref(5);
const currentPage = ref(1);
const users = ref();
const userDetail = ref({
    name: '',
    email: '',
});
const classes = {
    wrapper: "flex inline-flex -space-x-px text-sm",
    element: "w-10 h-10 border border-gray-200 table-cell hover:border-grey-100 bg-gray-700",
    activeElement: "w-10 h-10 border border-blue-500 table-cell hover:border-grey-900 dark:bg-gray-800",
    disabledElement: "w-10 h-10 border border-gray-200 table-cell cursor-not-allowed",
    activeButton: "text-white w-full h-full text-gray-900 hover:bg-grey-600 transition duration-100 ease-in-out focus:ring-2 focus:ring-blue-500 focus:outline-none focus:ring-opacity-50",
    disabledButton: "opacity-25 w-full h-full pointer-events-none transition duration-100 ease-in-out",
    button: "text-base hover:dark:bg-gray-800 w-full h-full transition duration-100 ease-in-out focus:ring-2 focus:ring-blue-500 focus:outline-none focus:ring-opacity-50 text-white",
}

const isOpen = ref(false)

const getUsers = (page = 1) => {
    axiosClient.get(`/users?page=${page}`).then((response) => {
        users.value = response.data.data;
        total.value = response.data.total;
    })
}

const saveUser = () => {
    axiosClient.post('/users', {
        'name' : userDetail.value.name, 
        'email': userDetail.value.email, 
        'password': '123456'}).then((response) => {
            setIsOpen(false);
            getUsers();
    })
}

const removeUser = (user) => {
    axiosClient.delete('/users/'+user.id).then((response) => {
        setIsOpen(false);
        getUsers();
    }).catch((error) => {
        console.log(error);
    }).finally(() => {
        
    })
}

const setIsOpen = (value) => {
    userDetail.value = {
        name: '',
        email: '',
        password: ''
    }
    isOpen.value = value
}

//pass this function to pagination component
const changePage = (pageNumber) => {
    getUsers(pageNumber)
}

onMounted(() => {
    getUsers();
})
</script>