<template>
  <div
    class="relative  lg:px-12 py-20 lg:py-28 sm:py-48 flex justify-center"
  >
    <!-- <header-vue /> -->
    <div class="relative z-10">
      <div class="w-screen relative">
        <div data-aos="fade"  data-aos-duration="1000" data-aos-easing="ease-in"
          class="w-full h-full flex items-center justify-center px-6 lg:px-12 order-2 md:order-1"
        >
          <h1
            class="font-bold sans tracking-tight text-white text-3xl md:text-3xl lg:text-5xl xl:text-5xl 2xl:text-5xl"
          >
          {{ title }}
          </h1>
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
  props :{
    title:{
      typeof:String
    }
  },
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
