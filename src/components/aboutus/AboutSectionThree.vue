<template>
  <div
    class="relative  min-h-screen overflow-hidden w-full lg:px-12 py-10 lg:py-20 sm:py-38 justify-between items-center">
    <img class="absolute left-0 -z-50 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-50 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />

    <div class="flex flex-col justify-center items-center  text-center font-sans space-y-5">
      <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl sans 2xl:text-6xl font-bold tracking-tight text-white">
        People of Innovation
      </h1>
    </div>
    <div class="grid md:grid-cols-4 grid-cols-2 gap-5 pt-10 lg:pt-20 sm:pt-38 px-3">
      <div v-for="(item, index) in team" :key="index" class="text-gray-50 space-y-3 bg-[#252525] p-2">
        <img v-if="item.image" :key="index" class="w-full" :src="item.image" alt="">
        <div class="flex justify-between items-center">
          <div class="space-y-1">
            <h3 class="font-semibold">{{ item.name }}</h3>
            <p class="text-sm font-thin">{{ item.designation }}</p>
          </div>
          <div>
            <a v-if="item.link" :href="item.link" target="_blank"><img src="../../assets/icons/linkedin1.svg" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="text-gray-50 space-y-3 bg-[#252525] p-2">
        <img class="w-full" src="https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/next.webp" alt="">
        <div class="space-y-1">
          <h3 class="font-semibold">You Can Be The Next</h3>
          <router-link to="/careers" class="text-sm font-thin underline">View Latest Openings</router-link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      team: [
        {
          "id": 1,
          "name": "Akhil Antony",
          "designation": "CTO",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/akhilantony.webp",
          "link" : "https://www.linkedin.com/in/akhilantony/"
        },
        {
          "id": 2,
          "name": "Suresh Kamal",
          "designation": "IT Head (India)",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/suresh.webp",
          "link" : "https://www.linkedin.com/in/sureshkamal919497337065/"
        },
        {
          "id": 3,
          "name": "Ajeesh",
          "designation": "Backend Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/ajeesh.webp",
          "link":"https://www.linkedin.com/in/ajeesh-ks-9071aa266/"
        },
        {
          "id": 4,
          "name": "Akhil",
          "designation": "IOS Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/akhilchandran.webp",
          "link": "https://www.linkedin.com/in/akhilchandran1114/"
        },
        {
          "id": 5,
          "name": "Sarath Raj",
          "designation": "Project Manager",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/sarath.webp",
          "link" : "https://www.linkedin.com/in/sarath-raj-a07b5b15b/"
        },
        {
          "id": 6,
          "name": "Sharon",
          "designation": "UI/UX Designer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/sharon.webp",
          "link":"https://www.linkedin.com/in/sharon-a-s-673439219/"
        },
        {
          "id": 7,
          "name": "Saranya",
          "designation": "Quality Analyst",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/saranya.webp",
          "link":"https://www.linkedin.com/in/saranya-m-083539210/"
        },
        {
          "id": 10,
          "name": "Aimy Vironi",
          "designation": "Human Resource",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/aimy.webp",
          "link":"https://www.linkedin.com/in/aimy-vironi-4494736b/"
        },
        {
          "id": 15,
          "name": "Syamily K Raj",
          "designation": "Human Resource",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/syamily.webp",
          "link":"https://www.linkedin.com/in/syamily-k-raj-a0b4b2b6/"
        },
        {
          "id": 11,
          "name": "Muhammed Munees",
          "designation": "UI Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/munees.webp",
          "link": "https://www.linkedin.com/in/muhammed-m-1b909b10b"
        },
        {
          "id": 12,
          "name": "Fairooz",
          "designation": "Lead Android Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/fairooz.webp",
          "link": "https://www.linkedin.com/in/fairooz-p-1a9890206/"
        },
        {
          "id": 13,
          "name": "Arjun",
          "designation": "Android Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/Arjun.webp",
          "link" : "https://www.linkedin.com/in/arjun-k-a-429b4525a/"
        },
        {
          "id": 14,
          "name": "Vimal Pillai",
          "designation": "Project Coordinator",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/vimal.webp"
        },
        {
          "id": 19,
          "name": "Prajoon",
          "designation": "Digital Marketing Manager",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/prajoon.webp",
          "link":"https://www.linkedin.com/in/prajoonpk/"
        },
        {
          "id": 18,
          "name": "Akshai K",
          "designation": "IOS Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/akshai1.webp",
          "link": "https://www.linkedin.com/in/akshaikunjumon"
        },
        {
          "id": 16,
          "name": "Sabir",
          "designation": "Blockchain Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/sabir.webp",
          "link":"https://www.linkedin.com/in/sabir-aboobaker"
        },
        {
          "id": 17,
          "name": "Aaraamasree Sreekumar",
          "designation": "Blockchain Developer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/aaram.webp",
          "link":"https://www.linkedin.com/in/aaraam/"
        },
        {
          "id": 55,
          "name": "Muhammed Sahad",
          "designation": "UI/UX Designer",
          "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/sahad.webp",
          "link": "https://www.linkedin.com/in/muhammed-sahad-77b399237"
        },
        // {
        //   "id": 25,
        //   "name": "You Can Be The Next",
        //   "designation": "View Latest Openings",
        //   "image": "https://0xtech-cdn.s3-eu-west-1.amazonaws.com/dwallet-referral/beeoneinnovations/next.webp"
        // }
      ]
    }
  },
};
</script>
