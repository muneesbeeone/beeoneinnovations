<template>
    <div data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full backdrop-blur-sm overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCareer" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-twe-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[700px]">
            <div
                class="pointer-events-auto overflow-hidden relative flex w-full flex-col rounded-3xl border-none bg-[#222222DB] grid grid-cols-3 bg-clip-padding text-current shadow-4 outline-none p-5">
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
                        <button type="button" id="closeBtnNew"
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
                    <form @submit.prevent="submitForm()">
                        <div class="relative pr-0 md:pr-4 grid md:grid-cols-2 grid-cols-1 gap-7">
                            <div class="relative flex h-14 w-full min-w-[200px]">
                                <input v-model="formData.firstName" placeholder="First Name" required type="text"
                                    pattern="[A-Za-z ]+" title="Name must contain only letters"
                                    class="peer h-full w-full border-b border-white-gray-50 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input v-model="formData.lastName" placeholder="Last Name" required type="text"
                                    pattern="[A-Za-z ]+" title="Name must contain only letters"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input v-model="formData.email" placeholder="Email" required type="email"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input v-model="formData.phone" placeholder="Phone" required type="text"
                                    title="please enter valid phone number" pattern="[0-9]{10,14}"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input type="file" @change="handleFileUpload" ref="fileInput"
                                    style="display: none" accept="application/pdf" />
                                <input placeholder="File"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                    :value="selectedFileName" readonly @click="openFilePicker" />
                                <i class="absolute bottom-3 right-1 bx bx-upload text-white"
                                    @click="openFilePicker"></i>
                                <p></p>
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <select id="jobTitle" placeholder="Job Title" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                    <option class="text-black" value="Product Designer">Product Designer</option>
                                    <option class="text-black" value="Manual Tester">Manual Tester</option>
                                </select>
                            </div>
                            <div class="text-red-500">{{ fileError }}</div>
                            <button type="submit" class="grad-button text-white px-10 py-3 w-full  bg-white/10  transition-all duration-1000  hover:bg-white/20">Apply now</button>

                        </div>
                    </form>
                </div>
                <div v-show="loader" class="w-full h-full bg-black/50 backdrop-blur-md absolute">
                    <div class="loader">
                        <div class="square" id="sq1"></div>
                        <div class="square" id="sq2"></div>
                        <div class="square" id="sq3"></div>
                        <div class="square" id="sq4"></div>
                        <div class="square" id="sq5"></div>
                        <div class="square" id="sq6"></div>
                        <div class="square" id="sq7"></div>
                        <div class="square" id="sq8"></div>
                        <div class="square" id="sq9"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Modal, Ripple, initTWE } from "tw-elements";
import axios from 'axios';
export default {
    data() {
        return {
            selectedFile: null,
            selectedFileName: 'Upload Resume...',
            formData: {
                firstName: '',
                lastName: '',
                email: '',
                phone: '',
                jobTitle: '',
                file: null,
            },
            loader: false,
            fileError: ''
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
            if (file) {
                if (file.type !== 'application/pdf') {
                    this.fileError = 'File must be a PDF';
                    this.$refs.fileInput.value = '';
                    return;
                }
                if (file.size > 2 * 1024 * 1024) {
                    this.fileError = 'File size must be less than 2MB';
                    this.$refs.fileInput.value = '';
                    return;
                }
                this.selectedFileName = file.name;
                this.fileError = null;
            }
            this.formData.file = event.target.files[0];
            this.selectedFile = file;
            this.selectedFileName = file ? file.name : 'Choose file...';
            // Here you can implement your file upload logic

        },
        submitForm() {
            if (this.$refs.fileInput.files.length === 0) {
                this.fileError = 'File is required';
                return;
            }
            this.loader = true

            const formData = new FormData();
            let jobTitle = document.getElementById('jobTitle').value
            formData.append('firstName', this.formData.firstName);
            formData.append('lastName', this.formData.lastName);
            formData.append('email', this.formData.email);
            formData.append('phone', this.formData.phone);
            formData.append('jobTitle', jobTitle);
            formData.append('file', this.formData.file);

            axios.post('careerEnquiry.php', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {
                    if (response.data.success) {
                        this.loader = false
                        this.formData.firstName = '';
                        this.formData.lastName = '';
                        this.formData.email = '';
                        this.formData.phone = '';
                        this.formData.file = null;
                        this.$store.dispatch('successModal', true);
                        setTimeout(() => {
                            this.$store.dispatch('successModal', false);
                        }, 2000)
                        document.getElementById('closeBtnNew').click()
                    } else {
                        console.log('Failed to send email: ' + response.data.message);
                        this.loader = false
                        document.getElementById('closeBtnNew').click()

                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    this.loader = false
                    document.getElementById('closeBtnNew').click()

                });
        }
    }
}
</script>