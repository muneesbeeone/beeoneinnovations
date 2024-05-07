<template>
  <banner :title="title"/>
  <tech-section-one/>
  <get-in-touch/>
</template>
<script>
import GetInTouch from '../components/common/GetInTouch.vue';
import Banner from "../components/common/Banner.vue";
import TechSectionOne from '../components/technologies/TechSectionOne.vue';
export default {
  components: { Banner, TechSectionOne, GetInTouch },
  data(){
    return{
      title:"Technologies"
    }
  }
};
</script>
