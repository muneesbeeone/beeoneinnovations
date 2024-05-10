<template>
    <div data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] h-full w-full backdrop-blur-sm overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-twe-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-100 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[450px]">
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
export default {
    mounted() {
        initTWE({
            Modal,
            Ripple,
        });
    },
};
</script>