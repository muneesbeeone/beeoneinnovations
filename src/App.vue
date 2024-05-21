<template>
  <div id="app" class="h-auto max-w-[1920px] mx-auto transition-all duration-1000">
    <header-vue />
    <transition name="fade">
      <router-view></router-view>
    </transition>
    <enquiry-modal />
    <career-modal />
    <scroll-progres />
    <footer-vue />
    <success-modal />
  </div>
</template>

<script>
import FooterVue from "./components/FooterVue.vue";
import HeaderVue from "./components/HeaderVue.vue";
import AOS from "aos";
import EnquiryModal from './components/common/EnquiryModal.vue';
import CareerModal from './components/common/CareerModal.vue';
import SuccessModal from './components/common/SuccessModal.vue';
import ScrollProgres from './components/common/ScrollProgres.vue';

export default {
  components: { FooterVue, HeaderVue, EnquiryModal, CareerModal, SuccessModal, ScrollProgres },
  name: "App",
  data() {
    return {

    };
  },
  mounted() {
    AOS.init();
  },
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
