<template>
  <div
    id="app"
    class="h-auto max-w-[1920px] mx-auto transition-all duration-1000"
  >
    <header-vue />
    <transition name="fade">
      <router-view></router-view>
    </transition>
    <enquiry-modal/>
    <career-modal/>
    <footer-vue />
  </div>
</template>

<script>
import FooterVue from "./components/FooterVue.vue";
import HeaderVue from "./components/HeaderVue.vue";
import AOS from "aos";
import EnquiryModal from './components/common/EnquiryModal.vue';
import CareerModal from './components/common/CareerModal.vue';

export default {
  components: { FooterVue, HeaderVue, EnquiryModal, CareerModal },
  name: "App",
  mounted() {
    AOS.init();
  },
};
</script>

<style>
/* Add your global styles here */
</style>
