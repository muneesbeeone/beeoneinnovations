<template>
  <banner :title="title"/>
  <about-section-one/>
  <about-section-two />
  <about-section-three/>
  <get-in-touch/>
</template>
<script>
import AboutSectionOne from '../components/aboutus/AboutSectionOne.vue';
import AboutSectionThree from '../components/aboutus/AboutSectionThree.vue';
import AboutSectionTwo from '../components/aboutus/AboutSectionTwo.vue';
import Banner from "../components/common/Banner.vue";
import GetInTouch from '../components/common/GetInTouch.vue';
export default {
  components: { Banner, AboutSectionOne, AboutSectionTwo , AboutSectionThree, GetInTouch },
  data(){
    return{
      title:"About Us"
    }
  }
};
</script>