<template>
    <div data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full backdrop-blur-sm overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-twe-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[700px]">
            <div
                class="pointer-events-auto relative overflow-hidden flex w-full flex-col rounded-3xl border-none bg-[#222222DB] grid grid-cols-3 bg-clip-padding text-current shadow-4 outline-none p-5">
                <div
                    class="bg-gradient-to-b relative hidden md:block backdrop-blur-2xl max-w-[180px] from-[#131313] to-[#313131] rounded-xl h-full">
                    <img class="absolute right-0 -mr-8 mt-10" src="../../assets/img/saly2.webp" alt="" />
                </div>
                <div class="md:col-span-2 col-span-3">
                    <div class="flex flex-shrink-0 items-center justify-between rounded-t-md p-4">
                        <!-- Modal title -->
                        <h5 class="text-3xl font-medium leading-normal text-white" id="exampleModalCenterTitle">
                            Let's talk
                        </h5>
                        <img class="absolute h-28 -hue-rotate-45 -rotate-[28deg] left-[11rem] top-5 block md:hidden"
                            src="../../assets/img/saly2.webp" alt="">
                        <!-- Close button -->
                        <button type="button" id="closeBtn"
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
                    <form @submit.prevent="submitForm">
                        <div class="relative p-4 grid md:grid-cols-2 grid-cols-1 gap-7">
                            <div class="relative flex h-14 w-full min-w-[200px]">
                                <input v-model="firstName" placeholder="First Name" required type="text"
                                    class="peer h-full w-full border-b border-white-gray-50 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input v-model="lastName" placeholder="Second name" required type="text"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input v-model="email" placeholder="Email" required type="email"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            </div>
                            <div class="relative h-14 w-full min-w-[200px]">
                                <input v-model="phone" placeholder="Phone" required type="number"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            </div>
                            <div class="relative md:col-span-2 col-span-1 h-14 w-full min-w-[200px]">
                                <textarea v-model="note" placeholder="Write note" required
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-50 outline outline-0 transition-all placeholder-shown:border-gray-50 focus:border-gray-100 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 flex-wrap items-center justify-end p-4">
                            <button type="submit" class="ms-1 inline-block rounded" data-twe-ripple-init
                                data-twe-ripple-color="light">
                                <img class="h-10" src="./../../assets/img/sendnowbtn.webp" alt="" />
                            </button>
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
            firstName: '',
            lastName: '',
            email: '',
            phone: '',
            note: '',
            loader:false
        };
    },
    mounted() {
        initTWE({
            Modal,
            Ripple,
        });
    },
    methods: {
        async submitForm() {
            this.loader = true
            try {
                const formData = {
                    abt_first_name: this.firstName,
                    abt_last_name: this.lastName,
                    abt_email: this.email,
                    abt_cell: this.phone,
                    abt_message: this.note
                };

                // Make the POST request
                const response = await axios.post("/beeoneinnovations/sendEmail.php", formData, {
                    headers: {
                        "Content-Type": "application/json",
                    },
                });
                if (response.status) {
                    // Reset form fields
                    this.loader = false

                    this.firstName = '';
                    this.lastName = '';
                    this.email = '';
                    this.phone = '';
                    this.note = '';
                    this.$store.dispatch('successModal', true);
                    setTimeout(() => {
                        this.$store.dispatch('successModal', false);
                    }, 2000)
                    document.getElementById('closeBtn').click()
                }

            } catch (error) {
                this.loader = false
                console.error('Error submitting form:', error);
            }
        }
    }
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