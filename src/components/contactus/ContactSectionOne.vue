<template>
  <div class="relative overflow-hidden w-full lg:px-12 py-10 lg:py-20 sm:py-38 justify-between items-center">
    <img class="absolute left-0 -z-50 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-50 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />
    <div class="px-3 md:px-12">
      <div class="bg-[#171717] relative flex flex-wrap md:flex-nowrap rounded-xl md:p-10 p-3">
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
          class="w-full md:pl-10 relative pl-0 md:ml-5 ml-0 md:border-l-[1px] border-l-0 space-y-5 border-white/50 md:order-2 order-1">
          <div v-show="loader" class="absolute flex justify-center items-center w-full h-full">
            <div class="loader bg-black/20 h-28 w-28 rounded-2xl shadow-xl shadow-black/50 backdrop-blur-sm">
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
          <h2 class="text-3xl text-white font-thin">Get in touch</h2>
          <form @submit.prevent="submitForm" class="contact-form grid grid-cols-2 gap-5 w-full">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="First Name" pattern="[A-Za-z ]+" title="Name must contain only letters" required type="text"
              v-model="firstName">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="Second name" required pattern="[A-Za-z ]+" title="Name must contain only letters" type="text"
              v-model="lastName">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="Email" required type="email"
              v-model="email">
            <input class="py-3 rounded-md bg-[#262626] text-white px-3" placeholder="Phone" title="please enter valid phone number" pattern="[0-9]{10,14}" required type="text"
              v-model="phone">
            <textarea class="py-3 rounded-md col-span-2 bg-[#262626] required text-white px-3" placeholder="Write note"
              v-model="note"></textarea>
            <div class="hidden md:block"></div>
            <button type="submit" class="grad-button col-span-2 md:col-span-1 text-white px-10 py-3 w-full  bg-white/10  transition-all duration-1000  hover:bg-white/20">Enquire now</button>

          </form>

        </div>
      </div>
    </div>

  </div>
</template>
<script>
import axios from 'axios';
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
      note: '',
      loader: false
    };
  },
  methods: {
    toggleHover() {
      this.isHovered = !this.isHovered;
    },

    async submitForm() {
      this.loader = true;
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
          this.loader = false;
          this.$store.dispatch('successModal', true);
          setTimeout(() => {
            this.$store.dispatch('successModal', false);
          }, 2000)
          this.firstName = '';
          this.lastName = '';
          this.email = '';
          this.phone = '';
          this.note = '';
        } else {
          this.loader = false;
        }
      } catch (error) {
        this.loader = false;
        console.error('Error submitting form:', error);
      }
    }
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