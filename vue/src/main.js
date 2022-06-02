import { createApp } from 'vue'
import store from './Store/index.js'
import router from './router/index.js'
import './input.css'
import App from './App.vue'


createApp(App)
    .use(router)
    .use(store)

.mount('#app')
