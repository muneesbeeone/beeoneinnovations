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
    <div class="grid grid-cols-4 gap-5 pt-10 lg:pt-20 sm:pt-38 px-3">
      <div v-for="(item, index) in team" :key="index" class="text-gray-50 space-y-3 bg-[#252525] p-2">
        <img v-if="item.image" :key="index" :src="item.image" alt="">
        <div class="space-y-1">
          <h3 class="font-semibold">{{ item.name }}</h3>
          <p class="text-sm font-thin">{{ item.designation }}</p>
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
          "image": "/src/assets/img/team/akhilantony.webp"
        },
        {
          "id": 2,
          "name": "Suresh Kamal",
          "designation": "IT Head (India)",
          "image": "/src/assets/img/team/suresh.webp"
        },
        {
          "id": 3,
          "name": "Ajeesh",
          "designation": "Backend Developer",
          "image": "/src/assets/img/team/ajeesh.webp"
        },
        {
          "id": 4,
          "name": "Akhil",
          "designation": "IOS Developer",
          "image": "/src/assets/img/team/akhilchandran.webp"
        },
        {
          "id": 5,
          "name": "Sarath Raj",
          "designation": "Project Manager",
          "image": "/src/assets/img/team/sarath.webp"
        },
        {
          "id": 6,
          "name": "Sharon",
          "designation": "UI/UX Designer",
          "image": "/src/assets/img/team/sharon.webp"
        },
        {
          "id": 7,
          "name": "Saranya",
          "designation": "Quality Analyst",
          "image": "/src/assets/img/team/saranya.webp"
        },
        {
          "id": 10,
          "name": "Aimy Vironi",
          "designation": "Human Resource",
          "image": "/src/assets/img/team/aimy.webp"
        },
        {
          "id": 15,
          "name": "Syamily K Raj",
          "designation": "Human Resource",
          "image": "/src/assets/img/team/syamily.webp"
        },
        {
          "id": 11,
          "name": "Muhammed Munees",
          "designation": "UI Developer",
          "image": "/src/assets/img/team/munees1.webp"
        },
        {
          "id": 12,
          "name": "Fairooz",
          "designation": "Lead Android Developer",
          "image": "/src/assets/img/team/fairooz.webp"
        },
        {
          "id": 13,
          "name": "Arjun",
          "designation": "Android Developer",
          "image": "/src/assets/img/team/Arjun.webp"
        },
        {
          "id": 14,
          "name": "Vimal Pillai",
          "designation": "Project Coordinator",
          "image": "/src/assets/img/team/vimal.webp"
        },
        {
          "id": 19,
          "name": "Prajoon",
          "designation": "Digital Marketing Manager",
          "image": "/src/assets/img/team/prajoon.webp"
        },
        {
          "id": 18,
          "name": "Akshai K",
          "designation": "IOS Developer",
          "image": "/src/assets/img/team/akshai.webp"
        },
        {
          "id": 16,
          "name": "Sabir",
          "designation": "Blockchain Developer",
          "image": "/src/assets/img/team/sabir.webp"
        },
        {
          "id": 17,
          "name": "Aaraamasree Sreekumar",
          "designation": "Blockchain Developer",
          "image": "/src/assets/img/team/aaram.webp"
        },
        // {
        //   "id": 8,
        //   "name": "Ancy Sabu",
        //   "designation": "Accounts Manager",
        //   "image": "/src/assets/img/team/ancy.webp"
        // }
      ]
    }
  },
};
</script>
