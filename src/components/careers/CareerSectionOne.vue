<template>
  <div
    class="relative overflow-hidden w-full lg:px-12 pt-10 lg:pt-20 sm:pt-38 justify-between items-center">
    <img class="absolute left-0 -z-50 top-0 hidden md:block" src="../../assets/img/mask2.webp" alt="" />
    <img class="absolute right-0 rotate-0 -z-50 -scale-x-100 top-0" src="../../assets/img/mask2.webp" alt="" />

    <div class="px-3 order-1 lg:order-2 w-full flex justify-center">
      <div class="text-center flex flex-col justify-center items-center max-w-4xl lg:text-center font-sans space-y-5">
        <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl sans 2xl:text-6xl font-bold tracking-tight text-white">
          Current Openings
        </h1>
        <div class="">
          <p class="text-white">
            Explore exciting opportunities to join our dynamic team! Discover fulfilling roles where innovation thrives,
            collaboration is valued, and growth is limitless. Be part of a company that fosters creativity, embraces
            diversity, and empowers every individual to make a meaningful impact. </p>
        </div>
      </div>
    </div>
    <div class="flex flex-col px-2 space-y-4 py-10">
      <div  @click="isOpeningOne = !isOpeningOne" class="p-[1px] cursor-pointer bg-gradient-to-br relative overflow-hidden from-green-500 via-blue-200 to-purple-600 rounded-xl">        
        <div class="max-w-full flex relative overflow-hidden flex-col relative justify-between h-full space-y-4 z-10 bg-gradient-to-r from-[#1D1D1D] to-[#232323] rounded-xl p-5">
          <div class="flex justify-between items-center relative z-10">
            <div>
              <h4 class="text-[#1FFFBC] text-lg md:text-2xl font-bold font-sans">
                Product Designer
              </h4>
              <p class="text-white">Openings : 1 | Experience 2+ | Kochi | Full Time</p>
            </div>
            <div class="flex items-center gap-5">
              <button data-twe-toggle="modal" data-twe-target="#exampleModalCareer" data-twe-ripple-init
                data-twe-ripple-color="light" class="md:block hidden"><img class="h-10" src="../../assets/img/applybutton.svg" alt=""></button>
              <i class='bx text-4xl text-white' :class="isOpeningOne ? 'bx-chevron-down' : 'bx-chevron-up'"></i>
            </div>
          </div>
        <img class="w-[100%] h-[100%] absolute left-0 bottom-0" src="../../assets/img/careervector.png" alt="">

          <div class="md:border-t-2 border-t-0 transition-all duration-1000 relative z-20"
            :class="isOpeningOne ? 'h-0 hidden' : 'h-full block'">
            <button data-twe-toggle="modal" data-twe-target="#exampleModalCareer" data-twe-ripple-init
                data-twe-ripple-color="light" class="md:hidden block "><img class="" src="../../assets/img/apply-large-btn.svg" alt=""></button>
            <div class="mission pt-6">
              <h5 class="text-white text-xl font-semibold">Job Discription</h5>
              <p class="text-white mt-3">
                We are looking for a talented UI/UX Designer to join our growing team. Experience in design tools like
                Photoshop and illustrator, prototyping tools like Figma/Adobe.
              </p>

              <h5 class="text-white text-xl font-semibold mt-9">Responsibilities</h5>
              <div class="text-white">
                <ul class="list-disc pl-5 mt-3">
                  <li> Understand product specifications and user psychology</li>
                  <li>Conduct concept and usability testing and gather feedback</li>
                  <li>Create personas through user research and data</li>
                  <li>Define the right interaction model and evaluate its success</li>
                  <li>Develop wireframes and prototypes based on requirements</li>
                  <li>Find creative ways to solve UI/UX problems (e.g. usability, responsive and findability)</li>
                  <li>Keep abreast of competitor products and industry trends</li>
                  <li>Knowledge in cryptocurrency and experience with payment/finance related apps is a big plus.</li>
                </ul>
                <ul class="jbdisc pl-5 sm:mt-3 mt-0">

                </ul>
              </div>
            </div>
            <div class="mission pt-6">
              <h5 class="text-white text-xl font-semibold ">Requirements</h5>
              <div class="text-white">
                <ul class="list-disc pl-5 ">
                  <li>1-3 years of proven experience as a UI/UX Designer</li>
                  <li>1-3 years of proven experience as a UI/UX Designer</li>
                  <li>Familiarity with interaction design and information architecture</li>
                  <li>Proficient in design and development software (e.g.Figma, XD and HTML,CSS etc)</li>
                  <li>Problem-solving aptitude</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div  @click="isOpeningTwo = !isOpeningTwo" class="p-[1px] cursor-pointer bg-gradient-to-br relative overflow-hidden from-green-500 via-blue-200 to-purple-600 rounded-xl">        
        <div class="max-w-full relative overflow-hidden flex flex-col relative justify-between h-full space-y-4 z-10 bg-gradient-to-r from-[#1D1D1D] to-[#232323] rounded-xl p-5">
          <div class="flex justify-between items-center relative z-10">
            <div>
              <h4 class="text-[#1FFFBC] text-lg md:text-2xl font-bold font-sans">
                Manuel Tester
              </h4>
              <p class="text-white">Openings : 1 | Experience 2+ | Kochi | Full Time</p>
            </div>
            <div class="flex items-center gap-5">
              <button data-twe-toggle="modal" data-twe-target="#exampleModalCareer" data-twe-ripple-init
                data-twe-ripple-color="light" class="md:block hidden"><img class="h-10" src="../../assets/img/applybutton.svg" alt=""></button>
              <i class='bx text-4xl text-white' :class="isOpeningTwo ? 'bx-chevron-down' : 'bx-chevron-up'"></i>
            </div>
          </div>
        <img class="w-[100%] h-[100%] absolute left-0 bottom-0" src="../../assets/img/careervector.png" alt="">

          <div class="md:border-t-2 border-t-0 transition-all duration-1000 relative"
            :class="isOpeningTwo ? 'h-0 hidden' : 'h-full block'">
            <button data-twe-toggle="modal" data-twe-target="#exampleModalCareer" data-twe-ripple-init
                data-twe-ripple-color="light" class="md:hidden block "><img class="" src="../../assets/img/apply-large-btn.svg" alt=""></button>

            <div class="mission pt-6">
              <h5 class="text-white text-xl font-semibold">Job Discription</h5>
              <p class="text-white mt-3">
                We are looking for a dedicated QA Engineer (Manual and Automation
                Testing) with a passion for quality assurance and a strong
                commitment to delivering exceptional software products. If you
                possess the required skills and experience, we encourage you to
                apply for this position.
              </p>

              <h5 class="text-white text-xl font-semibold mt-9">Responsibilities</h5>
              <div class="text-white">
                <ul class="list-disc pl-5 mt-3">
                  <li>Identify and assess risks associated with software testing and communicate them effectively to the
                    project team.</li>
                  <li>Prepare comprehensive test reports documenting test results, including identified bugs, issues,
                    and recommendations.</li>
                  <li>Develop detailed test cases based on project requirements and execute them meticulously.</li>
                  <li>Execute tests, report bugs using bug tracking tools, and diligently follow up on bugs until
                    closure.</li>
                  <li>Coordinate QA activities within the project team to ensure timely delivery of high-quality
                    software.</li>
                  <li>
                    Provide regular status updates on testing progress and escalate any critical issues or delays as
                    needed.
                  </li>
                  <li>Automate regression test cases using industry-standard automation tools and frameworks such as
                    Selenium or Cucumber.</li>
                  <li>
                    Handle multiple projects simultaneously and prioritize tasks effectively to meet project deadlines.
                  </li>
                </ul>
                <ul class="jbdisc pl-5 sm:mt-3 mt-0"></ul>
              </div>
            </div>
            <div class="">
              <h5 class="text-white text-xl font-semibold mt-9">Skills Required</h5>
              <div class="text-white">
                <ul class="list-disc pl-5 ">
                  <li>Experience in both manual and automation testing methodologies.</li>
                  <li>Proficiency in testing tools and processes, with hands-on experience in test automation tools.
                  </li>
                  <li>
                    Automation experience, with proficiency in Selenium and/or Cucumber preferred.
                  </li>
                  <li>
                    Basic understanding of SQL for database testing purposes.
                  </li>
                  <li>Knowledge of programming languages such as Java or C# for writing automation scripts.</li>
                  <li>Experience in testing REST APIs is preferred.</li>
                  <li>Exposure to security and performance testing concepts is an advantage.</li>
                  <li>Familiarity with tools like Jenkins, Maven, TestNG, and Jira is desirable.</li>
                </ul>
                <ul class="jbdisc pl-5 sm:mt-3 mt-0"></ul>
              </div>
            </div>
          </div>
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
    };
  },
  methods: {
    toggleHover() {
      this.isHovered = !this.isHovered;
    },
  },
};
</script>
