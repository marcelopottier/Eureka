<template>
    <nav>
        <!--Mobile menu-->
        <div>

        </div>
        <!--Desktop menu-->
        <div class="bg-[#274C77]">
            <div class="mx-auto">
                <div class="flex justify-between">
                    <!--menu-->
                    <div class="flex space-x-4">
                        <!--logo-->
                        <a href="/" class=" items-center space-x-2 py-5 px-2">
                            <picture>
                                <source media="(max-width: 768px)" srcset="../assets/logo-edit.png">
                                <source media="(min-width: 769px)" srcset="../assets/logo.png">
                                <img src="../assets/logo-edit.png" alt="" class="object-contain h-9 w-13 ml-1">
                            </picture>
                        </a>
                    </div>
                    <Menu as="div" class="mr-3 flex space-x-4 relative">
                        <MenuButton class="hover:bg-[#6096BA] text-white bg-[#047857] rounded-full w-20 flex items-center h-10 mt-5">
                                <span class="material-icons ml-3">add_circle</span>
                                <span class="text p-1">Novo</span>
                        </MenuButton>
                        <transition 
                            enter-active-class="transition transform duration-100 ease-out" 
                            enter-from-class="opacitiy-0 scale-90" 
                            enter-to-class="opacity-100 scale-100"
                            leave-active-class="transition transform duration-100 ease-in"
                            leave-from-class="opacity-100 scale-100"
                            leave-to-class="opacity-0 scale-90"
                        >
                            <MenuItems class="origin-top-right mt-16 focus:outline-none absolute right-0 bg-[#274C77] text-white rounded-md shadow-lg border">
                                <MenuItem v-slot="{active}">
                                    <a href="" :class="{'bg-[#6096BA]': active}" class="block px-4 py-2 text-sm">Consulta</a>
                                </MenuItem>
                                <MenuItem v-slot="{active}">
                                    <a href="" :class="{'bg-[#6096BA]': active}" class="block px-4 py-2 text-sm">Cliente</a>
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                        
                    <!--profile dropdown-->
                    <Menu as="div" class="mr-3 flex space-x-4 relative">
                        <MenuButton class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black rounded-full w-10 h-10 mt-5">
                            <img class="w-10 h-10 inline rounded-full" src="../assets/logo-edit.png" alt="">
                        </MenuButton>
                            <transition 
                            enter-active-class="transition transform duration-100 ease-out" 
                            enter-from-class="opacitiy-0 scale-90" 
                            enter-to-class="opacity-100 scale-100"
                            leave-active-class="transition transform duration-100 ease-in"
                            leave-from-class="opacity-100 scale-100"
                            leave-to-class="opacity-0 scale-90"
                            >
                                <MenuItems class="text-white origin-top-right mt-16 focus:outline-none absolute right-0 bg-[#274C77] rounded-md shadow-lg border">
                                    <MenuItem v-slot="{active}">
                                        <a href="" :class="{'bg-[#6096BA]': active}" class="block px-4 py-2 text-sm">Perfil</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{active}">
                                        <a href="" :class="{'bg-[#6096BA]': active}" class="block px-4 py-2 text-sm">Logout</a>
                                    </MenuItem>
                                </MenuItems>
                            </transition>
                    </Menu>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import {Menu, MenuButton, MenuItems, MenuItem} from '@headlessui/vue'
export default{
    components: {Menu, MenuButton, MenuItems, MenuItem},
}

</script>