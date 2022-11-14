<template>
    <aside :class="`${is_expanded && 'is_expanded'}`">
        <br>
        <div class="menu-toggle-wrap">
            <button class="menu-toggle button-sidebar" @click="ToggleMenu">
                <span class="material-icons">keyboard_double_arrow_right</span>
            </button>
        </div>
        <h3>Menu</h3>
        <div class="menu">
            <router-link class="button" to="/">
                <span class="material-icons">home</span>
                <span class="text">Home</span>
            </router-link>
            <router-link class="button" to="/agenda">
                <span class="material-icons">calendar_month</span>
                <span class="text">Agenda</span>
            </router-link>
            <router-link class="button" to="/clients">
                <span class="material-icons">people</span>
                <span class="text">Clientes</span>
            </router-link>
            <router-link class="button" to="/users">
                <span class="material-icons">groups_3</span>
                <span class="text">Usuários</span>
            </router-link>
        </div>
        <div class="flex"></div>
        <div class="menu">
            <router-link class="button" to="/config">
                <span class="material-icons">settings</span>
                <span class="text">Configurações</span>
            </router-link>
        </div>
    </aside>
</template>

<script setup>
import {ref} from 'vue'

const is_expanded = ref(localStorage.getItem("is_expanded") === "true")

const ToggleMenu = () => {
    is_expanded.value = !is_expanded.value
    localStorage.setItem("is_expanded", is_expanded.value)
}

</script>

<style lang="scss">
.button-sidebar{
    cursor: pointer;
    appearance: none;
    border: none;
    outline: none;
    background: none;
}
 aside{
    display: flex;
    flex-direction: column;
    width: calc(2rem + 32px);
    min-height: 100vh;
    overflow: hidden;
    padding: 1rem;
    background-color: #274C77;
    color: #F9F9F9;

    transition: 0.2s ease-out;
    .flex{
        flex: 1 1 0;
    }
    .logo{
        margin-bottom: 0.5rem;
        img{
            width: 2rem;
        }
    }

    .menu-toggle-wrap{
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1rem;
        position: relative;
        top: 0;
        transition: 0.2s ease-out;
        .menu-toggle{
            transition: 0.2s ease-out;
            .material-icons{
                font-size: 2rem;
                color: white;
                transition: 0.2s ease-out;
            }
            &:hover{
                .material-icons{
                    color: #45F0DF;
                    transform: translateX(0.5rem);
                }
            }
        }
    }
    h3, .button .text{
        opacity: 0;
        transition: 0.3s ease-out;
    }
    h3{
        color: #E7ECEF;
        font-size: 13px;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
    }
    .menu {
		margin: 0 -1rem;
		.button {
			display: flex;
			align-items: center;
			text-decoration: none;
			transition: 0.2s ease-in-out;
			padding: 0.5rem 1rem;
			.material-icons {
				font-size: 1.5rem;
				color: #E7ECEF;
				transition: 0.2s ease-in-out;
			}
			.text {
				color: #E7ECEF;
				transition: 0.2s ease-in-out;
			}
			&:hover {
				background-color: #6096BA;
				.material-icons, .text {
					color: #45F0DF;
				}
			}
			&.router-link-exact-active {
				background-color: #6096BA;
				border-right: 5px solid #45F0DF;
				.material-icons, .text {
					color: white;
				}
			}
		}
	}
    
    &.is_expanded{
        width: 150px;
        .menu-toggle-wrap{
            top: -3rem;
            .menu-toggle{
                transform: rotate(-180deg);
            }
        }
        h3, .button .text{
        opacity: 1;
        }
        .button{
            .material-icons{
                margin-right: 1rem;
            }
        }
    }
    @media (max-width: 768px){
        position: fixed;
        z-index: 99;
    }
 }
</style>