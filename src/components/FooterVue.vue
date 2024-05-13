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
              <li><a href="/#aboutus">About Us</a></li>
              <li><a href="/#technologies">Technologies</a></li>
              <li><a href="/#products">Products</a></li>
            </ul>
            <ul class="list-disc ml-7">
              <li>Blog</li>
              <li><a href="/#careers">Career</a></li>
              <li><a href="/#contactus">Conduct us</a></li>
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
        <p class="text-white">Terms and conditions@beeoneinnovations</p>
        <div class="text-sm lg:text-md w-fit items-center border-white space-x-2 flex">
          <a href="#" target="_parent"><img src="../assets//icons/insta.svg" alt="" /></a>
          <a href="#" target="_blank"><img src="../assets/icons/facebook.svg" alt="" /></a>

          <a href="#" target="_parent"><img src="../assets/icons/x.svg" alt="" /></a>
          <a href="#" target="_blank"><img src="../assets/icons/linkedin1.svg" alt="" /></a>
          <a href="#" target="_blank"><img src="../assets/icons/youtube.svg" alt="" /></a>
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
