<template>
  <header class="absolute inset-x-0 top-0 z-50">
    <nav
      class="flex px-0 md:px-5 w-full flex-nowrap items-center justify-between text-white py-5 hover:text-neutral-100 focus:text-neutral-100 lg:flex-wrap lg:justify-start lg:py-4"
      data-twe-navbar-ref>
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        <div class="ms-2">
          <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../assets/img/Beeone.webp" class="h-8 lg:h-10" alt="Techbank Movies Logo" />
          </a>
        </div>
        <!-- Hamburger button for mobile view -->
        <button
          class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
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
          class="!visible mt-2 hidden md:backdrop-blur-none backdrop-blur-lg bg-white/30 md:bg-transparent rounded-lg flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
          id="navbarSupportedContent3" data-twe-collapse-item>
          <!-- Left links -->
          <ul
            class="list-style-none relative overflow-hidden text-center ms-auto flex flex-col ps-0 divide-y md:divide-y-0 divide-gray-400 md:hover:divide-y-0 hover:divide-y-2 lg:mt-1 lg:flex-row"
            data-twe-navbar-nav-ref>
            <!-- Home link -->
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2"
              data-twe-nav-item-ref>
              <a class="text-white lg:px-2" aria-current="page" href="#/" data-twe-nav-link-ref>Home</a>
            </li>
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2"
              data-twe-nav-item-ref>
              <a class="text-white lg:px-2" aria-current="page" href="#/technologies"
                data-twe-nav-link-ref>Technologies</a>
            </li>
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2"
              data-twe-nav-item-ref>
              <a class="text-white lg:px-2" aria-current="page" href="#/products" data-twe-nav-link-ref>Products</a>
            </li>
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2"
              data-twe-nav-item-ref>
              <a class="text-white lg:px-2" aria-current="page" href="#/aboutus" data-twe-nav-link-ref>About us</a>
            </li>
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2"
              data-twe-nav-item-ref>
              <a class="text-white lg:px-2" aria-current="page" href="#/careers" data-twe-nav-link-ref>Careers</a>
            </li>
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2"
              data-twe-nav-item-ref>
              <a class="text-white lg:px-2" aria-current="page" href="#" data-twe-nav-link-ref>Blogs</a>
            </li>
            <li class="py-4 ps-2 lg:my-0 lg:pe-1 hover:bg-gray-50/50 md:hover:bg-transparent lg:ps-2 hidden md:block"
              data-twe-nav-item-ref>
              <button data-twe-toggle="modal" data-twe-target="#exampleModalCenter" data-twe-ripple-init
                data-twe-ripple-color="light" class="text-white lg:px-2 bg-gray-500 rounded-md">Contact Us</button>
            </li>
            <!-- Dropdown link -->
            <!-- <li
              class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
              data-twe-nav-item-ref
              data-twe-dropdown-ref
            >
              <a
                class="flex items-center text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                href="#"
                type="button"
                id="dropdownMenuButton2"
                data-twe-dropdown-toggle-ref
                aria-expanded="false"
              >
                Dropdown
                <span class="ms-1 [&>svg]:w-5">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </span>
              </a>
              <ul
                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                aria-labelledby="dropdownMenuButton1"
                data-twe-dropdown-menu-ref
              >
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="#"
                    data-twe-dropdown-item-ref
                    >Action</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="#"
                    data-twe-dropdown-item-ref
                    >Another action</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="#"
                    data-twe-dropdown-item-ref
                    >Something else here</a
                  >
                </li>
              </ul>
            </li> -->
          </ul>
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
    return {};
  },
  mounted() {
    initTWE({ Collapse });
  },
};
</script>
