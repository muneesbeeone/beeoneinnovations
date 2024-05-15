<template>
    <div v-show="successModal"
        class="fixed left-0 top-0 z-[1055] h-full w-full  backdrop-blur-sm overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter"  aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div 
            class="pointer-events-none relative overflow-hidden  flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-100 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[450px]">
            <div
                class="pointer-events-auto relative flex flex-col w-full rounded-3xl border-none bg-[#222222DB] bg-clip-padding text-current shadow-4 outline-none p-5">
                <div
                    class="bg-gradient-to-b relative backdrop-blur-2xl flex justify-center min-h-sm  from-[#131313] to-[#313131] rounded-xl h-full">
                    <img class=" right-0 w-[30%] -mb-5" src="../../assets/img/saly4.png" alt="" />
                </div>
                <div class="md:col-span-2 col-span-3">
                    <div class="text-center rounded-t-md p-4">
                        <!-- Modal title -->
                        <h5 class="text-3xl font-medium leading-normal text-[#1FFFBC]" id="exampleModalCenterTitle">
                            Excellent
                        </h5>
                        <p class="text-white">
                            Thanks for the interest with Beeone. we will get back you soon
                        </p>
                    </div>
                </div>
            </div>
          
        </div>

    </div>
</template>
<script>
import { Modal, Ripple, initTWE } from "tw-elements";
import { mapState, mapMutations, mapActions, mapGetters } from 'vuex';

export default {
    data() {
        return {
            showSuccessModal: false
        }
    },
    mounted() {
        initTWE({
            Modal,
            Ripple,
        });
    },
    computed: {
        ...mapState({
            successModal: 'successModal',
        }),
    },
    watch: {
        successModal: {
            handler() {
                this.showSuccessModal = this.successModal
            }
        }
    },
    created() {
        this.showSuccessModal = this.successModal
    },
};
</script>
<style>
@keyframes loader_5191 {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.square {
  background: #ddd;
  width: 10px;
  height: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -5px;
  margin-left: -5px;
}

#sq1 {
  margin-top: -25px;
  margin-left: -25px;
  animation: loader_5191 675ms ease-in-out 0s infinite alternate;
}

#sq2 {
  margin-top: -25px;
  animation: loader_5191 675ms ease-in-out 75ms infinite alternate;
}

#sq3 {
  margin-top: -25px;
  margin-left: 15px;
  animation: loader_5191 675ms ease-in-out 150ms infinite;
}

#sq4 {
  margin-left: -25px;
  animation: loader_5191 675ms ease-in-out 225ms infinite;
}

#sq5 {
  animation: loader_5191 675ms ease-in-out 300ms infinite;
}

#sq6 {
  margin-left: 15px;
  animation: loader_5191 675ms ease-in-out 375ms infinite;
}

#sq7 {
  margin-top: 15px;
  margin-left: -25px;
  animation: loader_5191 675ms ease-in-out 450ms infinite;
}

#sq8 {
  margin-top: 15px;
  animation: loader_5191 675ms ease-in-out 525ms infinite;
}

#sq9 {
  margin-top: 15px;
  margin-left: 15px;
  animation: loader_5191 675ms ease-in-out 600ms infinite;
}
</style>