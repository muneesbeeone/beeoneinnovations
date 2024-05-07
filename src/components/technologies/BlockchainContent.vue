<template>
  <blockchain-services/> 
  <blockchain-technologies/>
</template>
<script>
import BlockchainServices from './blockchain/BlockchainServices.vue'
import BlockchainTechnologies from './blockchain/BlockchainTechnologies.vue'
export default {
  components: { BlockchainServices, BlockchainTechnologies },
    
}
</script>