import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/css/index.css'
import axios from 'axios'

axios.defaults.baseURL = 'http://127.0.0.1:8000/api/'
//axios.defaults.headers['Content-Type'] = 'application/json'


const app = createApp(App).use(router)

app.config.globalProperties.$axios = axios

app.mount('#app')
