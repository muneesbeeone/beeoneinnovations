<template>
  <!-- :class="[isSticky?'sticky fade-in backdrop-blur-lg':'absolute',isFadeOut?'fade-out':'fade-in']" -->
  <header class="inset-x-0 absolute top-0 z-[100] transition-colors duration-1000" id="header" :class="[isSticky?' fade-in bg-black':'absolute bg-transparent pb-2 md:pb-0',isFadeOut?'':'fade-in']">
    <nav
      class="flex navbar px-0 md:px-5 w-full flex-nowrap items-center justify-between text-white py-5  h-full hover:text-neutral-100 focus:text-neutral-100 lg:flex-wrap lg:justify-start lg:py-2"
      data-twe-navbar-ref>
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        <div class="ms-2">
          <span @click="navigateTo('/')" class="flex items-center cursor-pointer space-x-3 rtl:space-x-reverse">
            <img src="../assets/img/Beeone.webp" class="h-8 lg:h-10" alt="Techbank Movies Logo" />
          </span>
        </div>
        <!-- Hamburger button for mobile view -->
        <button
          class="block border-0 bg-transparent px-2 text-white hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
          type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent3"
          aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
          <!-- Hamburger icon -->
          <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <!-- Collapsible navbar container -->
        <div
          class="!visible  transition-all hidden -mt-16 md:backdrop-blur-none backdrop-blur-xl bg-[#222222BD] md:bg-transparent rounded-cl flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto rounded-b-2xl"
          id="navbarSupportedContent3" data-twe-collapse-item>
          <!-- Left links -->
          <div class="md:hidden py-5" style="font-family: Montserrat;">
            <h2 class="text-center text-[#414040] text-6xl font-black">Menu</h2>
          </div>
          <ul
            class="list-style-none font-[400] relative overflow-hidden text-center ms-auto flex flex-col ps-0 lg:mt-1 lg:flex-row"
            data-twe-navbar-nav-ref>
            <!-- Home link -->
            <li :class="navItemClass('/')" @click="navigateTo('/')" data-twe-collapse-init
              data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
              aria-label="Toggle navigation">
              <router-link class="lg:px-2 cool-link" to="/" :class="isActive('/') ? 'active' : ''" aria-current="page"
                data-twe-nav-link-ref data-twe-collapse-init data-twe-target="#navbarSupportedContent3"
                aria-controls="navbarSupportedContent3" aria-expanded="false"
                aria-label="Toggle navigation">Home</router-link>
            </li>
            <!-- Technologies link -->
            <li :class="navItemClass('/technologies')" @click="navigateTo('/technologies')" data-twe-collapse-init
              data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
              aria-label="Toggle navigation">
              <router-link class="text-white lg:px-2 cool-link" to="/technologies"
                :class="isActive('/technologies') ? 'active' : ''" aria-current="page"
                data-twe-nav-link-ref>Technologies</router-link>
            </li>
            <!-- Products link -->
            <li :class="navItemClass('/products')" @click="navigateTo('/products')" data-twe-collapse-init
              data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
              aria-label="Toggle navigation">
              <router-link class="text-white lg:px-2 cool-link" to="/products"
                :class="isActive('/products') ? 'active' : ''" aria-current="page"
                data-twe-nav-link-ref>Products</router-link>
            </li>
            <!-- About Us link -->
            <li :class="navItemClass('/aboutus')" @click="navigateTo('/aboutus')" data-twe-collapse-init
              data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
              aria-label="Toggle navigation">
              <router-link class="text-white lg:px-2 cool-link" to="/aboutus"
                :class="isActive('/aboutus') ? 'active' : ''" aria-current="page" data-twe-nav-link-ref>About
                us</router-link>
            </li>
            <!-- Careers link -->
            <li :class="navItemClass('/careers')" @click="navigateTo('/careers')" data-twe-collapse-init
              data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
              aria-label="Toggle navigation">
              <router-link class="text-white lg:px-2 cool-link" to="/careers"
                :class="isActive('/careers') ? 'active' : ''" aria-current="page"
                data-twe-nav-link-ref>Careers</router-link>
            </li>
            <!-- Blogs link -->
            <li :class="navItemClass('https://beeoneinnovations.com/blogs')" onclick="window.open('https://beeoneinnovations.com/blogs', '_blank')"
               data-twe-collapse-init
              data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
              aria-label="Toggle navigation">
              <a class="text-white lg:px-2 cool-link" href="https://beeoneinnovations.com/blogs/" target="_blank"
                data-twe-nav-link-ref
                :class="isActive('https://beeoneinnovations.com/blogs') ? 'active' : ''">Blogs</a>
            </li>
            <!-- Contact Us button -->
            <li :class="navItemClass('/contactus')" class="block md:hidden" @click="navigateTo('/contactus')"
              data-twe-collapse-init data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3"
              aria-expanded="false" aria-label="Toggle navigation">
              <router-link class="text-white lg:px-2 cool-link" to="/contactus"
                :class="isActive('/contactus') ? 'active' : ''" aria-current="page" data-twe-nav-link-ref>Contact
                Us</router-link>
            </li>
            <li
              class="py-4 ps-2 lg:my-0 lg:pe-1 rounded-lg hover:bg-black/20 md:hover:bg-transparent lg:ps-2 hidden md:block"
              data-twe-nav-item-ref>
              <button data-twe-toggle="modal" data-twe-target="#exampleModalCenter" data-twe-ripple-init
                data-twe-ripple-color="light" class="text-white lg:px-2 bg-gray-500 rounded-md">Contact
                Us</button>
            </li>
          </ul>
          <div class="absolute flex justify-center w-full">
            <button data-twe-collapse-init data-twe-target="#navbarSupportedContent3"
              aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation"
              class="bg-[#222222] text-white/50 px-6 mt-2 rounded-full text-center mx-auto block md:hidden shadow-lg shadow-black/50 py-1 flex items-center"><i
                class="bx bx-x text-xl font-extrabold"></i>close</button>

          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
    </nav>
  </header>
</template>
<script>
import { Collapse, initTWE } from "tw-elements";
export default {
  data() {
    return {
      currentLocation: window.location.pathname,
      isFadeOut: false,
      isSticky: false,
      scrollThreshold: 1
    };
  },
  mounted() {
    initTWE({ Collapse });
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    isActive(route) {
      return this.$route.path === route;
    },
    navItemClass(route) {
      return {
        'py-4': true,
        'ps-2': true,
        'lg:my-0': true,
        'lg:pe-1': true,
        'rounded-lg': true,
        'hover:bg-black/20': true,
        'md:hover:bg-transparent': true,
        'lg:ps-2': true
      };
    },
    handleScroll() {
      const header = document.getElementById("header");
      if (header) {
        this.isFadeOut = window.scrollY >= 100;
        this.isSticky = window.scrollY >= this.scrollThreshold;
      }
    },
    navigateTo(router) {
      this.$router.push(router);
    }
  },
  watch: {
    // Watch for changes in currentLocation
    currentLocation(newValue, oldValue) {
      // React to changes here, if needed
      console.log('Current location changed:', oldValue, '->', newValue);
      // You can also update other properties or perform additional actions here
    }
  },
};
</script>
<style>
.active {
  color: #ffffff;
  /* Example color for active link */
  font-weight: 700;
  /* Example font weight for active link */
}

/* li {
  margin-bottom: 10px;
} */

.cool-link {
  display: inline-block;
  text-decoration: none;
}

.cool-link::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background: #1FFFBC;
  transition: width .3s;
  margin-top: 3px;

}

.cool-link.active::after,
.cool-link:hover::after {
  margin-top: 3px;
  width: 100%;
  transition: width .3s;
}

@media (min-width: 768px) {

  .cool-link.active::after,
  .cool-link:hover::after {
    margin-top: 3px;
    width: 70%;
    transition: width .3s;
  }
}

.fade-out {
  opacity: 0;
  transition: opacity 2s ease;
}

.fade-in {
  opacity: 10;
  transition: opacity 3s ease;
}
#header {
    transition: background-color 2s; /* Adjust the duration as needed */
}
</style>
