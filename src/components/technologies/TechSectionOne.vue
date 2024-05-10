<template>
  <div
    class="relative  overflow-hidden transition-all w-full lg:px-12 py-10 lg:py-20 sm:py-38 justify-between items-center">
    <img class="absolute left-0 -z-1 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-1 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />

    <div class="px-3 w-full flex justify-center">
      <div class="text-center flex flex-col justify-center items-center max-w-4xl lg:text-center font-sans space-y-5">
        <div class="flex text-xs gap-4 relative z-55">
          <button v-for="(tab, index) in tabs" :key="index" @click="currentTab = index"
            class="p-[2px]  transition-all duration-1000 hover:-skew-y-6 hover:skew-x-6 rounded-3xl"
            :class="currentTab === index ? 'bg-gradient-to-br from-green-500 via-blue-200 to-purple-600' : 'bg-gray-200'">
            <div
              class="min-w-[100px] flex flex-col justify-between h-full space-y-4 bg-[#171717] p-3 px-5 rounded-3xl text-[#1FFFBC]"
              :class="currentTab === index ? 'text-[#1FFFBC]' : 'text-gray-200'">
              {{ tab.name }}
            </div>
          </button>
        </div>
        <div v-if="currentTab === 0">
          <block-chain />
        </div>
        <div v-else-if="currentTab === 1">
          <mobile-apps />
        </div>
        <div v-else>
          <web-development />
        </div>
      </div>
    </div>
  </div>
  <div v-if="currentTab === 0">
    <blockchain-content/>
  </div>
  <div v-else-if="currentTab === 1">
    <mobile-technologies/>
  </div>
  <div v-else>
    <web-technologies/>
  </div>

</template>
<script>
import BlockChain from './BlockChain.vue';
import BlockchainContent from './BlockchainContent.vue';
import MobileTechnologies from './mobile/MobileTechnologies.vue';
import MobileApps from './MobileApps.vue';
import WebTechnologies from './web/WebTechnologies.vue';
import WebDevelopment from './WebDevelopment.vue';
import { mapState, mapMutations, mapActions, mapGetters } from 'vuex';
export default {
  components: { BlockChain, MobileApps, WebDevelopment, BlockchainContent, WebTechnologies, MobileTechnologies },
  data() {
    return {
      tabs: [
        { name: 'Blockchain' },
        { name: 'Mobile' },
        { name: 'Website' }
      ],
      currentTab: this.selectedTechnology
    }
  },
  computed: {
    ...mapState({
      selectedTechnology: 'selectedTechnology',
    }),
  },
  watch:{
    selectedTechnology:{
      handler(){
        this.currentTab = this.selectedTechnology
      }
    }
  },
  created(){
    this.currentTab = this.selectedTechnology
  },
  methods: {
    ...mapActions(['selectTechnology']),
  },
};
</script>
