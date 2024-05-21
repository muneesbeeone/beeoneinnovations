<template>
  <div
    class="relative 2xl:max-h-[1080px]  2xl:min-h-screen md:min-h-screen min-h-auto overflow-hidden w-full lg:px-12 pt-10 lg:pt-20 sm:pt-38 justify-between items-center">
    <img class="absolute left-0 -z-50 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-50 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />

    <div class="px-3 order-1 lg:order-2  w-full flex justify-center" data-aos="fade" data-aos-duration="1000"
      data-aos-easing="ease-in">
      <div class="px-3 order-1 lg:order-2 w-full flex justify-center">
        <div class="text-center flex flex-col justify-center items-center max-w-4xl lg:text-center font-sans space-y-5">
          <h1
            class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl sans 2xl:text-7xl font-bold tracking-tight text-white">
            Crafting Tomorrow's Technology
          </h1>
          <div class="max-w-xl">
            <p class="text-white 2xl:text-xl text-md lg:text-lg md:text-md">
              BeeOne Innovation pioneers transformative blockchain solutions,
              driving forward the future of technology with precision and
              creativity.
            </p>
          </div>
          <button type="button" class="mx-auto md:mx-0 grad-button font-semibold px-10 py-3 text-white bg-white/10  transition-all duration-1000  hover:bg-white/20 rounded-xl  cursor-pointer"
                data-twe-toggle="modal" data-twe-target="#exampleModalCenter" data-twe-ripple-init
                data-twe-ripple-color="light"> get in touch
              </button>
        </div>
      </div>
    </div>
    <div>
      <div style="background-color: #161616; border-radius: 70%/100px 100px 0 0"
        class="inset-x-0 bottom-0 absolute -z-10 transform-gpu md:h-[180px] 2xl:h-[280px] h-[150px] overflow-hidden bg-[#161616]">
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
