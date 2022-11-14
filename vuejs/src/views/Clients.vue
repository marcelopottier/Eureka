<template>
    <main class="main-background clients-page">
        <h1 class="text-lg underline">Clientes</h1>
        <!--Table menu-->
        <div class="flex justify-between mb-2">
            <div class="flex space-x-4">
                <Menu as="div" class=" flex space-x-4 relative h-5">
                        <MenuButton class="hover:bg-[#6096BA] text-white bg-[#047857] rounded-full w-20 flex items-center h-7 mt-4">
                                <span class="material-icons ml-2">keyboard_arrow_down</span>
                                <span class="text p-1">Ações</span>
                        </MenuButton>
                        <transition 
                            enter-active-class="transition transform duration-100 ease-out" 
                            enter-from-class="opacitiy-0 scale-90" 
                            enter-to-class="opacity-100 scale-100"
                            leave-active-class="transition transform duration-100 ease-in"
                            leave-from-class="opacity-100 scale-100"
                            leave-to-class="opacity-0 scale-90"
                        >
                            <MenuItems class="origin-top-right mt-11 focus:outline-none absolute right-0 bg-[#274C77] text-white rounded-md shadow-lg border">
                                <MenuItem v-slot="{active}">
                                    <a href="" :class="{'bg-[#6096BA]': active}" class="block px-4 py-2 text-sm">Consulta</a>
                                </MenuItem>
                                <MenuItem v-slot="{active}">
                                    <a href="" :class="{'bg-[#6096BA]': active}" class="block px-4 py-2 text-sm">Cliente</a>
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                <button class="h-7 mt-4 rounded-full text-center hover:bg-[#6096BA] text-white bg-[#047857] flex items-center w-20">
                    <span class="material-icons ml-2 ">edit</span>
                    <span class="text p-2">Editar</span>
                </button>
                <button class="h-7 mt-4 rounded-full text-center border-[#047857] border-2 text-[#047857] hover:bg-[#6096BA] hover:text-white flex items-center w-20">
                    <span class="material-icons ml-2 ">add_circle</span>
                    <span class="text p-2">Novo</span>
                </button>
            </div>
            <input type="search" class="rounded-full h-7 text-center mt-4" id="search" placeholder="Pesquisar">
        </div>
        <!-- END Table menu-->
        <!--start table-->
        <div class="overflow-auto rounded-lg shadow-sm hidden md:block">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Nome</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Telefone</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Consulta</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Idade</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="bg-white" v-for="client in clients">
                        <td class="whitespace-nowrap p-3 font-bold text-blue-500 hover:underline">{{client.patient_name}}</td>
                        <td class="whitespace-nowrap p-3 text-sm text-gray-700">{{client.phone}}</td>
                        <td class="whitespace-nowrap p-3 text-sm text-gray-700">{{client.schooling}}</td>
                        <td class="whitespace-nowrap p-3 text-sm text-gray-700">{{client.email}}</td>
                        <td class="whitespace-nowrap p-3 text-sm text-gray-700">{{client.age}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--grid for small screens-->
        <div class="mb-3 grid grid-cols-1 md:grid-cols-2 gap-4 md:hidden" v-for="client in clients">
            <!--Wrapper-->
            <div class="bg-white p-4 space-y-3 rounded-lg shadow-md">
                <div class="flex items-center space-x-2 text-sm">
                    <div class="text-blue-500 font-bold hover:underline">{{client.patient_name}}</div>
                    <div class="text-sm text-gray-500">Idade: {{client.age}}</div>
                    <div class="text-sm text-gray-500">Consulta: {{client.schooling}}</div>
                </div>
                <div class="text-sm text-gray-500">Telefone: {{client.phone}}</div>
                <div class="text-sm text-gray-500">E-mail: {{client.email}}</div>
            </div>
        </div>
    </main>
</template>

<script>
import {Menu, MenuButton, MenuItems, MenuItem} from '@headlessui/vue'
export default {
    components: {Menu, MenuButton, MenuItems, MenuItem},
    data(){
        return {
            clients: null
        }
    },
    created(){
        this.$axios.get('/clients').then(response => (this.clients = response.data))
    }
}

</script>

<style>
.material-icons{
    font-size: 20px;
}
@keyframes backgroundColorPallete {
    0%{
        background: #f5f5f5;
    }
    25%{
        background: #fafafa;
    }
    50%{
        background: #d4d4d4;
    }
    75%{
        background: #cbd5e1;
    }
    100%{
        background: #e5e5e5;
    }
}
.main-background{
    animation-name: backgroundColorPallete;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}
</style>