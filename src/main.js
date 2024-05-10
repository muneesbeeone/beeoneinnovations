import { createApp } from 'vue';
import store from './store.js';
import App from './App.vue';
import router from './router'; // Import the router
import 'aos/dist/aos.css'
const app = createApp(App);
app.use(store)
app.use(router); // Use the router

app.mount('#app');

