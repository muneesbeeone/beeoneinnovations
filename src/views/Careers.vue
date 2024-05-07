<template>
  <banner :title="title"/>
  <career-section-one/>
  <get-in-touch/>
</template>
<script>
import Banner from '../components/common/Banner.vue';
import CareerSectionOne from '../components/careers/CareerSectionOne.vue';
import GetInTouch from '../components/common/GetInTouch.vue';


export default {
  components: { Banner,CareerSectionOne, GetInTouch },
  data(){
    return{
      title:"Career"
    }
  }
};
</script>