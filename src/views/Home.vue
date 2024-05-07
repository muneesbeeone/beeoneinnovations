<template>
  <banner />
  <section-1/>
  <section-two-landing/>
  <section-three-landing/>
  <get-in-touch/>
  <section-five-landing/>
</template>
<script>
import GetInTouch from '../components/common/GetInTouch.vue';
import Banner from "../components/landing/Banner.vue";
import SectionFiveLanding from '../components/landing/SectionFiveLanding.vue';
import Section1 from '../components/landing/SectionOneLanding.vue';
import SectionThreeLanding from '../components/landing/SectionThreeLanding.vue';
import SectionTwoLanding from '../components/landing/SectionTwoLanding.vue';
export default {
  components: { Banner, Section1, SectionTwoLanding, SectionThreeLanding, SectionFiveLanding, GetInTouch },
};
</script>
