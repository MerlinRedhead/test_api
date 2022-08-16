require('./bootstrap');

import { createApp } from 'vue'
import App from './components/App'
import router from './router' // <---

createApp(App).use(router).mount('#app')


App.component('App', App)

App.mount('#app')

export default router;
