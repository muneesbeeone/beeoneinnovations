<template>
  <div class="relative bg-black overflow-hidden w-full lg:px-12 py-10 lg:py-20 sm:py-38 justify-between items-center">
    <img class="absolute left-0 w-[50%] z-0 top-0" src="../../assets/img/mask2.webp" alt="">
    <img class="absolute right-0 w-[50%] rotate-0 z-0 - bottom-0" src="../../assets/img/mask3.webp" alt="">

    <div class="px-3 w-screen grid items-center grid-cols-1 md:grid-cols-2">
      <div class="text-center items-center max-w-2xl lg:text-start font-sans space-y-5">
        <div class="relative">
          <h1
            class="text-3xl md:text-4xl roundedvectorthree relative lg:text-5xl xl:text-6xl sans 2xl:text-6xl font-bold tracking-tight text-white">
            Seeking Clarity?<br />Reach Out!
          </h1>
        </div>
        <div class="w-full flex items-center text-center justify-center relative block md:hidden">
          <div class="absolute w-full flex justify-center">
            <img class="w-[60%]" src="../../assets/img/saly.webp" alt="" />
          </div>
          <h1
            class="text-[#1F1F1F] mx-auto text-[35vw] mx-auto sm:text-[15vw] font-black tracking-tight font-sans font-bold leading-[160px]">
            Let's Talk!
          </h1>
        </div>
        <div class="max-w-xl">
          <p class="text-white text-md md:text-lg">
            Unlock the potential of your online presence with BeeOne
            Innovation's website development expertise. Our team combines
            creativity and technical prowess to craft bespoke websites that
            captivate audiences, drive engagement, and elevate your brand to new
            heights in the digital landscape
          </p>
        </div>
        <button type="button" class="mx-auto md:mx-0 relative grad-button font-semibold px-10 py-3 text-white bg-white/10  transition-all duration-1000  hover:bg-white/20 rounded-xl  cursor-pointer"
                data-twe-toggle="modal" data-twe-target="#exampleModalCenter" data-twe-ripple-init
                data-twe-ripple-color="light"> Get in touch
              </button>
      </div>
      <div class="w-full flex items-center text-center justify-center relative hidden md:block">
        <div class="absolute w-full flex justify-center">
          <img class="w-[60%]" src="../../assets/img/saly.webp" alt="" />
        </div>
        <h1
          class="text-[#1F1F1F] text-[35vw] sm:text-[15vw] font-black tracking-tight font-sans font-bold lg:leading-[12vw] leading-[28vw]">
          Let's Talk!
        </h1>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() { },
};
</script>
