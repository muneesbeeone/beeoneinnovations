<template>
  <div
    class="relative bg-[#1A1919] min-h-screen overflow-hidden w-full px-3 lg:px-12 py-10 lg:py-20 sm:py-38 justify-between items-center">
    <div class="px-3 order-1 lg:order-2 w-full flex justify-center">
      <div class="text-center flex flex-col justify-center items-center lg:text-center font-sans space-y-5">
        <h1
          class="text-3xl md:text-4xl product relative lg:text-5xl xl:text-6xl sans 2xl:text-6xl font-bold tracking-tight text-white">
          Our Products
        </h1>
        <div class="max-w-xl">
          <p class="text-white 2xl:text-xl text-sm lg:text-lg md:text-md">
            Discover our revolutionary products designed to transform the way
            you live, work, and play. From sleek gadgets to intuitive software
            solutions.
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="flex flex-wrap gap-5 justify-center mt-5">
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 to-purple-600 rounded-xl">
          <div
            class="md:max-w-[300px] 2xl:max-w-[350px] 2xl:max-w-[350px]  bg-[#000000] flex flex-col justify-between h-full space-y-2 bg-[#000000] p-1 rounded-xl">
            <img class="rounded-lg" src="../../assets/img/products/product(3).webp" alt="" />
            <h4 class="text-white text-2xl md:text-xl font-bold font-sans">DNFT</h4>
            <p class="text-gray-50 text-md">
              The DNFT platform is a revolutionary advancement in the NFT space,
            </p>
            <span @click="selectProducts('dnft')" class="underline cursor-pointer text-white text-right py-2">
              learn more
            </span>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="1200" data-aos-easing="ease-in-out"
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 to-purple-600 rounded-xl">
          <div
            class="md:max-w-[300px] 2xl:max-w-[350px] bg-[#000000] flex flex-col justify-between h-full space-y-2 bg-[#000000] p-1 rounded-xl">
            <img class="rounded-lg" src="../../assets/img/products/product(2).webp" alt="" />
            <h4 class="text-white text-2xl md:text-xl font-bold font-sans">
              TECHBANK MOVIES
            </h4>
            <p class="text-gray-50 text-md">
              Premier YouTube destination for an inside look at innovative film
              and music production
            </p>
            <span @click="selectProducts('movies')" class="underline cursor-pointer text-white text-right py-2">
              learn more
            </span>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="2000" data-aos-easing="ease-in-out"
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 to-purple-600 rounded-xl">
          <div
            class="md:max-w-[300px] 2xl:max-w-[350px] bg-[#000000] flex flex-col justify-between h-full space-y-2 bg-[#000000] p-1 rounded-xl">
            <img class="rounded-lg" src="../../assets/img/products/product(6).webp" alt="" />
            <h4 class="text-white text-2xl md:text-xl font-bold font-sans">
              TECHBANK DWALLET
            </h4>
            <p class="text-gray-50 text-sm">
              The only multi-seed wallet that allows trading and holding
            </p>
            <span @click="selectProducts('dwallet')" class="underline cursor-pointer text-white text-right py-2">
              learn more
            </span>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 to-purple-600 rounded-xl">
          <div
            class="md:md:max-w-[300px] 2xl:max-w-[350px] bg-[#000000] flex flex-col justify-between h-full space-y-2 bg-[#000000] p-1 rounded-xl">
            <img class="rounded-lg" src="../../assets/img/products/product(1).webp" alt="" />
            <h4 class="text-white text-2xl md:text-xl font-bold font-sans">DBANK</h4>
            <p class="text-gray-50 text-md">
              The world's BEST decentralized and tokenized community DeFi
              project.
            </p>
            <span @click="selectProducts('dbank')" class="underline cursor-pointer text-white text-right py-2">
              learn more
            </span>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="1500" data-aos-easing="ease-in-out"
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 to-purple-600 rounded-xl">
          <div
            class="md:md:max-w-[300px] 2xl:max-w-[350px] bg-[#000000] flex flex-col justify-between h-full space-y-2 bg-[#000000] p-1 rounded-xl">
            <img class="rounded-lg" src="../../assets/img/products/product(4).webp" alt="" />
            <h4 class="text-white text-2xl md:text-xl font-bold font-sans">TECHBANK</h4>
            <p class="text-gray-50 text-md">
              Buy, Sell, and manage your crypto over 60 popular Currencies in
              one place
            </p>
            <span href="#" @click="selectProducts('techbank')" class="underline cursor-pointer text-white text-right py-2">
              learn more
            </span>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-offset="200" data-aos-duration="2000" data-aos-easing="ease-in-out"
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 to-purple-600 rounded-xl">
          <div class="md:md:max-w-[300px] 2xl:max-w-[350px] flex flex-col justify-between h-full space-y-2 bg-[#000000] p-1 rounded-xl">
            <img class="rounded-lg" src="../../assets/img/products/product(5).webp" alt="" />
            <h4 class="text-white text-2xl md:text-xl font-bold font-sans">
              BEE INTERNATIONAL
            </h4>
            <p class="text-gray-50 text-md">
              Leading immigration service provider creating wide oppirtunities
              for migrants
            </p>
            <span  @click="selectProducts('bee')" class="underline cursor-pointer text-white text-right py-2">
              learn more
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return{
      isMobile:false
    }
   },
  methods:{
    checkDevice() {
      const userAgent = navigator.userAgent;
      const mobileRegex = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
      this.isMobile = mobileRegex.test(userAgent);
    },
    selectProducts(products) {
      this.$store.dispatch('selectedProduct', products);
      this.$router.push({ name: "Products"});
    }
  }
};
</script>
