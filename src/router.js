import { createRouter, createWebHashHistory  } from "vue-router";
import Home from "./views/Home.vue"; // Import your views/components
import Technologies from "./views/Technologies.vue";
import Products from "./views/Products.vue";
import AboutUs from "./views/AboutUs.vue";
import Careers from "./views/Careers.vue";
import ContactUs from "./views/ContactUs.vue"
const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/technologies",
    name: "Technologies",
    component: Technologies,
  },
  // {
  //   path: "/technologies/:id",
  //   name: "Technologies",
  //   component: Technologies,
  // },
  {
    path: "/products",
    name: "Products",
    component: Products,
  },
  {
    path: "/aboutus",
    name: "AboutUs",
    component: AboutUs,
  },
  {
    path: "/careers",
    name: "Careers",
    component: Careers,
  },
  {
    path: "/contactus",
    name: "ContactUs",
    component: ContactUs,
  }
  // Add more routes as needed
];


const router = createRouter({
  history: createWebHashHistory (),
  routes,
  scrollBehavior(to, from, savedPosition) {
    return { top: 0 }; // Scroll to the top of the page
  },
});

export default router;
