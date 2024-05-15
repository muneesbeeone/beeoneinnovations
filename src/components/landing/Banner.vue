<template>
  <div
    class="relative min-h-screen overflow-hidden max-h-[1080px] lg:px-12 py-10  lg:py-20 sm:py-38  flex justify-center">
    <!-- <header-vue /> -->
    <div class="relative z-10">
      <div class=" w-screen flex items-center z-20 relative">
        <div class="w-full h-full grid grid-cols-1 md:grid-cols-2 items-center  px-6 lg:px-12 order-2 md:order-1">
          <div class="flex justify-center order-2 md:order-1">
            <div class="text-center md:text-left font-sans space-y-10">
              <div class="space-y-5" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in">
                <h1
                  class="font-bold sans tracking-tight text-white text-4xl md:text-3xl lg:text-5xl xl:text-7xl 2xl:text-8xl">
                  Innovation<br />starts here
                </h1>
                <p class="text-lg lg:text-xl leading-8 text-white">
                  Inspiring Tomorrow's Breakthroughs.
                </p>
              </div>
              <button type="button" class="mx-auto md:mx-0  cursor-pointer"
                data-twe-toggle="modal" data-twe-target="#exampleModalCenter" data-twe-ripple-init
                data-twe-ripple-color="light">
                <img class="h-12" src="./../../assets/icons/button.svg" alt="" />
              </button>
            </div>
          </div>
          <div class="flex flex-col relative justify-center order-1 md:order-2">
            <img class="w-[75%] md:w-[60%] mt-32 mx-auto transition-transform duration-[2000ms] transform"
              :class="{ '-translate-y-5 md:-translate-y-12 skew-x-3 skew-y-3': isHovered }"
              src="./../../assets/img/banner-img.webp" alt="" @mouseover="toggleHover" @mouseout="toggleHover" />
            <img
              class="w-[75%] md:w-[80%] md:-mt-[13rem] -mt-[7rem] md:-ml-1 -z-50 ml-[-0.3rem]  mx-auto transition-transform duration-[2000ms] transform"
              :class="{ 'md:translate-y-6 translate-y-5 skew-x-3 skew-y-3': isHovered }"
              src="./../../assets/img/shadow1.png" alt="" @mouseover="toggleHover" @mouseout="toggleHover" />
          </div>
        </div>
        <div
          class="absolute text-sm lg:text-md w-fit text-white px-5 pr-5 mb-10 space-y-3 flex justify-end flex-col left-0">
          <a href="#" target="_parent"><img src="./../../assets//icons/insta.svg" alt="" /></a>
          <a href="#" target="_blank"><img src="./../../assets/icons/facebook.svg" alt="" /></a>

          <a href="#" target="_parent"><img src="./../../assets/icons/x.svg" alt="" /></a>
          <a href="#" target="_blank"><img src="./../../assets/icons/linkedin1.svg" alt="" /></a>
          <a href="#" target="_blank"><img src="./../../assets/icons/youtube.svg" alt="" /></a>
        </div>
      </div>
    </div>
    <div class="video-container">
      <video id="2911f215-33d8-5331-fd79-0cc1bdd219d7-video" autoplay="" loop="" class="object-cover w-screen h-full"
        style="background-image: url('/src/assets/img/bannerstill.webp');background-size: cover;" muted="" playsinline="" data-wf-ignore="true"
        data-object-fit="cover">
        <source src="/src/assets/img/beeonebanner1.webm" data-wf-ignore="true" />
        <source src="/src/assets/img/beeonebanner.mp4" data-wf-ignore="true" />
      </video>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isHovered: false
    };
  },
  methods: {
    toggleHover() {
      this.isHovered = !this.isHovered;
    },
  },
};
</script>
