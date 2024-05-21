<template>
  <div class="min-h-[300px] relative border-t-2 border-[#15A77B]">
    <div class="relative z-10 p-10 w-full">
      <div class="flex justify-between space-y-3 md:space-y-0 flex-wrap">
        <div class="ms-0 space-y-5 max-w-xs">
          <a href="/" class="">
            <img src="../assets/img/Beeone.webp" class="h-8 lg:h-12" alt="beeone Movies Logo" />
          </a>
          <p class="text-white font-thin">
            4th Floor, 406 D, HiLITE Platino, Shankar Nagar Road, Kannadikkadu,
            Maradu, Kochi, Kerala 682304
          </p>
        </div>
        <div class="flex flex-col">
          <div class="text-white font-bold">Extra Links</div>
          <div class="flex text-md text-white mt-5">
            <ul class="list-disc ml-5">
              <li ><router-link to="/aboutus">About Us</router-link></li>
              <li><router-link to="/technologies">Technologies</router-link></li>
              <li><router-link to="/products">Products</router-link></li>
            </ul>
            <ul class="list-disc ml-7">
              <li> <a href="https://beeoneinnovations.com/blogs/" target="_blank">Blog</a></li>
              <li><router-link to="/careers">Career</router-link></li>
              <li><router-link to="/contactus">Conduct us</router-link></li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col">
          <div class="text-white font-bold">Technologies</div>
          <div class="flex text-md text-white mt-5">
            <ul class="list-disc ml-5">
              <li class="cursor-pointer" @click="selectTechnology(0)">Blockchain</li>
              <li class="cursor-pointer" @click="selectTechnology(1)">Mobile</li>
              <li class="cursor-pointer" @click="selectTechnology(2)">Website</li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col">
          <div class="text-white font-bold">Products</div>
          <div class="flex text-md text-white mt-5">
            <ul class="list-disc ml-5">
              <li class="cursor-pointer" @click="selectProducts('techbank')">Techbank</li>
              <li class="cursor-pointer" @click="selectProducts('movies')">Techbank movies</li>
              <li class="cursor-pointer" @click="selectProducts('dwallet')">Techbank Dwallet</li>
            </ul>
            <ul class="list-disc ml-7">
              <li class="cursor-pointer" @click="selectProducts('dnft')">DNFT</li>
              <li class="cursor-pointer" @click="selectProducts('bee')">Bee International</li>
              <li class="cursor-pointer" @click="selectProducts('dbank')">Dbank</li> 
            </ul>
          </div>
        </div>
      </div>
      <hr class="mt-8">
      <div class="flex justify-between space-y-3 md:space-y-0 flex-wrap items-center mt-5">
        <p class="text-white"><a href="#" class="">Terms and conditions</a> @beeoneinnovations</p>
        <div class="text-sm lg:text-md text-white w-fit items-center border-white space-x-2 flex">
          <a href="https://www.facebook.com/beeoneinnovations" target="_parent" class="h-9 w-9 bg-white/10 flex justify-center items-center rounded-lg hover:bg-white/20 transition-all"><i class='bx bxl-instagram text-xl'></i></a>
          <a href="https://www.instagram.com/beeoneinnovations/" target="_blank" class="h-9 w-9 bg-white/10 flex justify-center items-center rounded-lg hover:bg-white/20 transition-all"><i class='bx bxl-facebook text-xl'></i></a>
          <a href="https://twitter.com/beeinnovations" target="_parent" class="h-9 w-9 bg-white/10 flex justify-center items-center rounded-lg hover:bg-white/20 transition-all"><img class="h-4" src="../assets/icons/x.ico" alt="" /></a>
          <a href="https://www.linkedin.com/company/beeone-innovations" target="_blank" class="h-9 w-9 bg-white/10 flex justify-center items-center rounded-lg hover:bg-white/20 transition-all"><i class='bx bxl-linkedin text-xl'></i></a>
          <!-- <a href="#" target="_blank"><img src="../assets/icons/youtube.svg" alt="" /></a> -->
        </div>
      </div>

    </div>
    <div class="video-container">
      <video id="2911f215-33d8-5331-fd79-0cc1bdd219d7-video" autoplay="" loop="" class="object-cover w-full h-full"
        style="background-image: url('/src/assets/img/bannerstill.webp')" muted="" playsinline="" data-wf-ignore="true"
        data-object-fit="cover">
        <source src="../assets/img/beeonebanner1.webm" data-wf-ignore="true" />
        <source src="../assets/img/beeonebanner.mp4" data-wf-ignore="true" />
      </video>
    </div>
  </div>
</template>
<script>

export default {
  methods: {
    selectTechnology(id) {
      this.$router.push({ name: "Technologies"});
      this.$store.dispatch('selectTechnology', id);
    },
    selectProducts(products) {
      this.$store.dispatch('selectedProduct', products);
      this.$router.push({ name: "Products"});
    }
  }
};
</script>
