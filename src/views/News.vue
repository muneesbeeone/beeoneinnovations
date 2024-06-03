<template>
  <banner :title="title"/>
  <news-section/>
  <get-in-touch/>
</template>
<script>
import ProductSectionOne from '../components/products/ProductSectionOne.vue';
import Banner from "../components/common/Banner.vue";
import GetInTouch from '../components/common/GetInTouch.vue';
import NewsSection from '../components/products/NewsSection.vue';
export default {
  components: { Banner, GetInTouch, NewsSection },
  data(){
    return{
      title:"News"
    }
  }
};
</script>
