import { createRouter, createWebHistory } from 'vue-router';
import Home from '../SiteHome';    // Import your components
import SiteContact from '../SiteContact';  // Assuming you have a SiteContact.vue component
import SiteNewsDetail from "@/SiteNewsDetail";
import PageDetails from "@/PageDetails";
const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/contact',
        name: 'SiteContact',
        component: SiteContact   // This is the route for your /contact page
    },
    {
        path: '/news/:slug', // Dynamic route for news details
        name: 'SiteNewsDetail',
        component: SiteNewsDetail
    },
    {
        path: '/page/:slug', // Dynamic route for page details
        name: 'PageDetails',
        component: PageDetails
    }

];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;
