<template>
  <banner :title="title"/>
  <product-section-one/>
  <get-in-touch/>
</template>
<script>
import ProductSectionOne from '../components/products/ProductSectionOne.vue';
import Banner from "../components/common/Banner.vue";
import GetInTouch from '../components/common/GetInTouch.vue';
export default {
  components: { Banner, ProductSectionOne, GetInTouch },
  data(){
    return{
      title:"Products"
    }
  }
};
</script>
