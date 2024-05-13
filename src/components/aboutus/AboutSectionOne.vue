<template>
  <div
    class="relative max-h-[1080px] 2xl:max-h-screen md:min-h-screen min-h-auto overflow-hidden w-full lg:px-12 pt-10 lg:pt-20 sm:pt-38 justify-between items-center">
    <img class="absolute left-0 -z-50 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-50 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />

    <div class="px-3 order-1 lg:order-2  w-full flex justify-center" data-aos="fade"  data-aos-duration="1000" data-aos-easing="ease-in">
      <div class="text-center flex flex-col justify-center items-center max-w-4xl lg:text-center font-sans space-y-5">
        <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl sans 2xl:text-6xl font-bold tracking-tight text-white">
          Who we are
        </h1>
        <div class="">
          <p class="text-white">
            Beeone Innovation, where innovation meets excellence. As a product-based company, we specialize in harnessing the power of blockchain technology, mobile (iOS and Android), and web projects to drive transformative solutions. Our mission is to push the boundaries of technology, delivering cutting-edge products and services tailored to meet your needs. Discover how Beeone Innovation is shaping the future of technology with our commitment to innovation and excellence
          </p>
        </div>
        <div class="flex justify-center w-full cursor-pointer">
          <img class="h-10" src="./../../assets/icons/button.svg" alt="" />
        </div>
      </div>
    </div>
    <div>
      <div style="background-color: #161616; border-radius: 70%/100px 100px 0 0"
        class="inset-x-0 bottom-0 absolute -z-10 transform-gpu md:h-[200px] h-[150px] overflow-hidden bg-[#161616]">
      </div>
      <div class="w-full">
        <img @mouseover="toggleHover" @mouseout="toggleHover"
          class="w-[60%] md:w-[30%] mx-auto mt-16 md:mt-[100px] 2xl:mt-[200px] relative z-50 transition-all duration-[2000ms] hover:-translate-y-8"
          src="./../../assets/img/bee3d.webp" alt=""
          :class="{ '-translate-y-3 md:-translate-y-8 -skew-x-6': isHovered }" />
        <img @mouseover="toggleHover" @mouseout="toggleHover"
          class="w-[80%] md:w-[40%] mx-auto mt-[-9rem] md:mt-[-13rem] transition-all duration-1000 hover:translate-y-8"
          :class="{ 'translate-y-3 md:translate-y-8': isHovered }" src="./../../assets/img/shadow2.png" alt="" />
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isHovered: false,
    };
  },
  methods: {
    toggleHover() {
      this.isHovered = !this.isHovered;
    },
  },
};
</script>
