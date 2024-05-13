<template>
  <div class="relative bg-black min-h-screen overflow-hidden lg:px-12 pt-10 lg:pt-20 sm:pt-38 flex items-center" :class="{'panel':!isMobile}">
    <!-- <header-vue /> -->
    <div class="relative z-10">
      <div class="w-screen flex items-center z-20 relative">
        <div
          class="w-full min-h-screen  grid grid-cols-1 md:grid-cols-2 items-center px-3"
        >
          <div class="text-center md:text-left  space-y-10 max-w-xl 2xl:max-w-2xl">
            <div class="space-y-6 ">
              <h1
                class="font-bold font-sans tracking-tight text-white text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl"
              >
                Next-gen Innovators
              </h1>
              <p class="text-lg lg:text-xl leading-8 text-white">
                Embodies our dynamic team committed to pushing boundaries and
                sparking breakthroughs. With a blend of forward-thinking vision
                and cutting-edge expertise, we're dedicated to pioneering
                solutions that redefine the future landscape. Join us as we
                embark on a journey of creativity, collaboration, and continuous
                innovation, shaping tomorrow's world today.
              </p>
            </div>
            <button type="button" class="mx-auto md:mx-0  cursor-pointer"
                data-twe-toggle="modal" data-twe-target="#exampleModalCenter" data-twe-ripple-init
                data-twe-ripple-color="light">
                <img class="h-12" src="./../../assets/icons/button.svg" alt="" />
              </button>
          </div>
          <div class="h-full flex items-end relative">
            <img
              class="right-0 bottom-0"
              src="./../../assets/img/landing-section3-hero.webp"
              alt="Next-gen Innovators"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="video-container">
      <video
        id="2911f215-33d8-5331-fd79-0cc1bdd219d7-video"
        autoplay=""
        loop=""
        class="object-cover w-full h-full"
        style="background-image: url('/src/assets/img/bannerstill.webp')"
        muted=""
        playsinline=""
        data-wf-ignore="true"
        data-object-fit="cover"
      >
        <source
          src="./../../assets/img/beeonebanner1.webm"
          data-wf-ignore="true"
        />
        <source
          src="./../../assets/img/beeonebanner.mp4"
          data-wf-ignore="true"
        />
      </video>
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
    }
  }
};
</script>
