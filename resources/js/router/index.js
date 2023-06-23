import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/home/Home.vue';
import About from '../components/About.vue';

const routes = [
    { 
        path: '/',
        component: Home
    },
    { 
        path: '/about', 
        component: About
    }
  ]
  
  // Create the router instance and pass the `routes` option
  const router = createRouter({
      history: createWebHistory(),
      routes
  });

  export default router;