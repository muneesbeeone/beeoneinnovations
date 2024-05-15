<template>
  <div class="relative overflow-hidden w-full lg:px-12 py-10 lg:py-20 sm:py-38 justify-between items-center">
    <img class="absolute left-0 -z-50 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-50 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />
    <div class="px-3 md:px-12">
      <div class="bg-[#171717] flex flex-wrap md:flex-nowrap rounded-xl md:p-10 p-3">
        <div class="w-full flex flex-col space-y-5 justify-between max-w-sm md:order-1 order-2">
          <a href="/" class="mx-auto pt-5 md:mx-0">
            <img src="../../assets/img/Beeone.webp" class="h-8 lg:h-12" alt="beeone Movies Logo" />
          </a>
          <ul class="space-y-2 bg-[#262626] p-3 md:p-0 md:bg-transparent rounded-lg ">
            <li class="text-white font-thin flex gap-3 items-center"><i
                class='bx bx-envelope'></i>hr@beeoneinnovations.com</li>
            <li class="text-white font-thin flex items-center gap-3"><i class='bx bx-phone'></i><span>09 207 839
                333</span></li>
            <li class="text-white font-thin flex gap-3 items-start"><i class='bx bx-location-plus'></i><span>4th Floor,
                406 D, HiLITE Platino, Shankar Nagar Road, Kannadikkadu,
                Maradu, Kochi, Kerala 682304</span></li>
          </ul>
          <div class="mx-auto md:mx-0 text-center md:text-left">
            <div class="text-white text-xs font-thin ">Connect on social media</div>
            <div class="text-sm lg:text-md w-fit  items-center mt-2 border-white space-x-2 flex">
              <a href="#" target="_parent"><img src="../../assets//icons/insta.svg" alt="" /></a>
              <a href="#" target="_blank"><img src="../../assets/icons/facebook.svg" alt="" /></a>
              <a href="#" target="_parent"><img src="../../assets/icons/x.svg" alt="" /></a>
              <a href="#" target="_blank"><img src="../../assets/icons/linkedin1.svg" alt="" /></a>
              <a href="#" target="_blank"><img src="../../assets/icons/youtube.svg" alt="" /></a>
            </div>
          </div>
        </div>
        <div
          class="w-full md:pl-10 pl-0 md:ml-5 ml-0 md:border-l-[1px] border-l-0 space-y-5 border-white/50 md:order-2 order-1">
          <h2 class="text-3xl text-white font-thin">Get In touch</h2>
          <form @submit.prevent="submitForm" class="contact-form grid grid-cols-2 gap-5 w-full">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="First Name" required type="text"
              v-model="firstName">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="Second name" required type="text"
              v-model="lastName">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="Email" required type="email"
              v-model="email">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="Phone" required type="text" v-model="phone">
            <textarea class="py-3 rounded-md col-span-2 bg-[#262626] text-white px-3" placeholder="Write note"
              v-model="note"></textarea>
            <div class="col-span-2 flex md:justify-end justify-center">
              <button type="submit"><img class="h-14" src="../../assets/img/apply-large-btn.svg" alt=""></button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</template>
<script>
export default {
  data() {
    return {
      isHovered: false,
      isOpeningOne: true,
      isOpeningTwo: true,
      firstName: '',
      lastName: '',
      email: '',
      phone: '',
      note: ''
    };
  },
  methods: {
    toggleHover() {
      this.isHovered = !this.isHovered;
    },

    async submitForm() {
      try {
        const formData = {
          abt_first_name: this.firstName,
          abt_last_name: this.lastName,
          abt_email: this.email,
          abt_cell: this.phone,
          abt_message: this.note
        };

        // Make the POST request
        const response = await axios.post("sendEmail.php", formData, {
          headers: {
            "Content-Type": "application/json",
          },
        });
        if (response.status) {
          this.$store.dispatch('successModal', true);
          setTimeout(() => {
            this.$store.dispatch('successModal', false);
          }, 2000)
          this.firstName = '';
          this.lastName = '';
          this.email = '';
          this.phone = '';
          this.note = '';
        }
      } catch (error) {
        console.error('Error submitting form:', error);
      }
    }
  },
};
</script>
