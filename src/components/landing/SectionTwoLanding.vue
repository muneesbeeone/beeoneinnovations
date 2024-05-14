<template>
  <div :class="{'panel':!isMobile}"
    class="relative bg-black z-100 min-h-screen overflow-hidden w-full lg:px-12 px-3 py-10 lg:py-28 sm:py-38 justify-between items-center"
  >
    <!-- <div class="top-grad absolute top-0 left-0"></div>
    <div class="top-grad-2 bottom-0 rotate-180 absolute"></div> -->
    <img class="absolute left-0 -z-50 top-0" src="../../assets/img/mask2.webp" alt="">
    <img class="absolute right-0 rotate-0 -z-50 - bottom-0" src="../../assets/img/mask3.webp" alt="">

    <div class="px-3 md order-1 lg:order-2 w-full flex justify-center">
      <div
        class="text-center flex flex-col justify-center items-center max-w-2xl lg:text-center font-sans space-y-5"
      >
        <h1
          class="text-3xl md:text-4xl relative roundedvectortwo lg:text-5xl xl:text-6xl sans 2xl:text-7xl font-bold tracking-tight text-white"
        >
          Tech Alchemy
        </h1>
        <div class="max-w-lg">
          <p class="text-white 2xl:text-xl text-md lg:text-lg md:text-md">
            Discover the dynamic world of BeeOne Innovation's cutting-edge
            technologies, where innovation merges seamlessly with IT expertise
            to drive your business forward.
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="flex flex-wrap gap-5 justify-center mt-5">
        <div
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 transition-all duration-1000 hover:skew-y-3 hover:-skew-x-3 to-purple-600 rounded-3xl"
        >
          <div class="md:max-w-[280px]  2xl:max-w-[320px] 2xl:max-w-[320px] flex flex-col justify-between h-full space-y-4 bg-[#171717] p-5 rounded-3xl">
            <h4 class="text-[#1FFFBC] text-2xl 2xl:text-3xl 2xl:text-3xl font-bold font-sans">
              Blockchain Technology
            </h4>
            <p class="text-gray-50 text-md 2xl:text-lg">
              Explore the revolutionary potential of blockchain technology with
              BeeOne Innovation. From secure transactions to decentralized
              networks, we harness the power of blockchain to redefine trust,
              transparency, and efficiency across industries
            </p>
            <button class="ring-1 text-white ring-white rounded-md px-5 py-2" @click="selectTechnology(0)" data-twe-ripple-init
                data-twe-ripple-color="light">
              learn more
            </button>
          </div>
        </div>
        <div
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 transition-all duration-1000 hover:skew-y-3 hover:-skew-x-3 to-purple-600 rounded-3xl"
        >
          <div class="md:max-w-[280px] 2xl:max-w-[320px] flex flex-col justify-between h-full space-y-4 bg-[#171717] p-5 rounded-3xl">
            <h4 class="text-[#1FFFBC] text-2xl 2xl:text-3xl font-bold font-sans">
              Mobile Development
            </h4>
            <p class="text-gray-50 text-md 2xl:text-lg">
              Unlock the power of mobility with BeeOne Innovation's expert
              mobile development solutions. From concept to launch, we craft
              intuitive and feature-rich mobile apps that elevate user
              experiences and drive business growth in the palm of your hand.
            </p>
            <button class="ring-1 text-white ring-white rounded-md px-5 py-2" data-twe-ripple-init
                data-twe-ripple-color="light" @click="selectTechnology(1)">
              learn more
            </button>
          </div>
        </div>
        <div
          class="p-[1px] bg-gradient-to-br from-green-500 via-blue-200 transition-all duration-1000 hover:-skew-y-3 hover:skew-x-3 to-purple-600 rounded-3xl"
        >
          <div class="md:max-w-[280px] 2xl:max-w-[320px] flex flex-col justify-between h-full space-y-4 bg-[#171717] p-5 rounded-3xl">
            <h4 class="text-[#1FFFBC] text-2xl 2xl:text-3xl font-bold font-sans">
              Website Development
            </h4>
            <p class="text-gray-50 text-md 2xl:text-lg">
              Unlock the potential of your online presence with BeeOne
              Innovation's website development expertise. Our team combines
              creativity and technical prowess to craft bespoke websites that
              captivate audiences, drive engagement, and elevate your brand to
              new heights in the digital landscape
            </p>
            <button class="ring-1 text-white ring-white rounded-md px-5 py-2" data-twe-ripple-init
                data-twe-ripple-color="light" @click="selectTechnology(2)">
              learn more
            </button>
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
    selectTechnology(id) {
      this.$router.push({ name: "Technologies"});
      this.$store.dispatch('selectTechnology', id);
    },
  }
  
};
</script>
