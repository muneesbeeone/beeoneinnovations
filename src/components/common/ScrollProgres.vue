<template>
  <div class="scroll-progress-container w-[5px] h-[30%] md:h-[50%]">
    <div class="scroll-progress relative overflow-hidden" :style="{ height: progress + '%' }">
      <!-- <div class="w-[10px] bg-[#94ffdf] h-[80%] flex justify-start"></div> -->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      progress: 0,
    };
  },
  mounted() {
    window.addEventListener('scroll', this.updateProgressBar);
  },
  beforeDestroy() {
    window.removeEventListener('scroll', this.updateProgressBar);
  },
  methods: {
    updateProgressBar() {
      const winScroll = document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      this.progress = (winScroll / height) * 100;
    },
  },
};
</script>

<style scoped>
.scroll-progress-container {
  position: fixed;
  top: 25%;
  right: 10px;
  background-color: #f0f0f0;
  z-index: 50;
  border-radius: 20px;
}

.scroll-progress {
  width: 100%;
  background: #1FFFBC;
  border-radius: 20px;

}

</style>
