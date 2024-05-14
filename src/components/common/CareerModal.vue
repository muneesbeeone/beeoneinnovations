<template>
    <div data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full backdrop-blur-sm overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCareer" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-twe-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[700px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-3xl border-none bg-[#222222DB] grid grid-cols-3 bg-clip-padding text-current shadow-4 outline-none p-5">
                <div
                    class="bg-gradient-to-b relative hidden md:block backdrop-blur-2xl max-w-[180px] from-[#131313] to-[#313131] rounded-xl h-full">
                    <img class="absolute right-0 mt-20" src="../../assets/img/saly3.webp" alt="" />
                </div>
                <div class="md:col-span-2 col-span-3">
                    <div class="flex flex-shrink-0 items-center justify-between rounded-t-md p-4">
                        <!-- Modal title -->
                        <h5 class="text-3xl font-medium leading-normal text-white" id="exampleModalCenterTitle">
                            Let's Work <br class="md:hidden block" /> Together
                        </h5>
                        <img class="absolute h-28 -hue-rotate-45 left-[11rem] top-5 block md:hidden"
                            src="../../assets/img/saly3.webp" alt="">
                        <!-- Close button -->
                        <button type="button"
                            class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                            data-twe-modal-dismiss aria-label="Close">
                            <span class="[&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="relative p-4 grid md:grid-cols-2 grid-cols-1 gap-7">
                        <div class="relative flex h-14 w-full min-w-[200px]">
                            <input placeholder="First Name" required type="text"
                                class="peer h-full w-full border-b border-white-gray-50 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0" />
                        </div>
                        <div class="relative h-14 w-full min-w-[200px]">
                            <input placeholder="Second name" required type="text"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                        </div>
                        <div class="relative h-14 w-full min-w-[200px]">
                            <input placeholder="Email" required type="email"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                        </div>
                        <div class="relative h-14 w-full min-w-[200px]">
                            <input placeholder="Phone" required type="phone"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                        </div>
                        
                        <div class="relative h-14 w-full min-w-[200px]">
                            <input type="file" @change="handleFileUpload" required ref="fileInput" style="display: none" />
                            <input placeholder="File"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                :value="selectedFileName" readonly @click="openFilePicker" />
                            <i class="absolute bottom-3 right-1 bx bx-upload text-white" @click="openFilePicker"></i>
                        </div>
                        <div class="relative h-14 w-full min-w-[200px]">
                            <select placeholder="Email"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                <option class="text-black" value="Product Designer">Product Designer</option>
                                <option class="text-black" value="Manual Tester">Manual Tester</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 flex-wrap items-center justify-end p-4">
                        <button type="button" class="ms-1 inline-block rounded" data-twe-ripple-init
                            data-twe-ripple-color="light">
                            <img class="h-10" src="./../../assets/img/apply-large-btn.svg" alt="" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Modal, Ripple, initTWE } from "tw-elements";
export default {
    data() {
        return {
            selectedFile: null,
            selectedFileName: 'Upload Resume...'
        }
    },
    mounted() {
        initTWE({
            Modal,
            Ripple,
        });
    },
    methods: {
        openFilePicker() {
            this.$refs.fileInput.click();
        },
        handleFileUpload(event) {
            const file = event.target.files[0];
            this.selectedFile = file;
            this.selectedFileName = file ? file.name : 'Choose file...';
            // Here you can implement your file upload logic

        }
    }
}
</script>