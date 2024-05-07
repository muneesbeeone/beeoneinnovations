<template>
    <banner :title="title"/>
    <contact-section-one/>
</template>
<script>
import Banner from '../components/common/Banner.vue';
import ContactSectionOne from '../components/contactus/ContactSectionOne.vue';

export default {
  components: { Banner, ContactSectionOne },
    data(){
        return{
            title:'Contact Us'
        }
    }
};
</script>