<template>
  <div id="container">
    <banner />
    <section-1 />
    <section-two-landing />
    <section-three-landing />
    <get-in-touch />
    <section-five-landing />
  </div>
</template>
<script>
import Banner from "../components/landing/Banner.vue";
import SectionFiveLanding from '../components/landing/SectionFiveLanding.vue';
import Section1 from '../components/landing/SectionOneLanding.vue';
import SectionThreeLanding from '../components/landing/SectionThreeLanding.vue';
import SectionTwoLanding from '../components/landing/SectionTwoLanding.vue';
import GetInTouch from '../components/common/GetInTouch.vue';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
export default {
  components: { Banner, Section1, SectionTwoLanding, SectionThreeLanding, SectionFiveLanding, GetInTouch },
  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.to(".pContent", {
      yPercent: 50,
      ease: "none",
      scrollTrigger: {
        trigger: ".pSection",
        // start: "top bottom", // the default values
        // end: "bottom top",
        scrub: true
      },
    });
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      let panels = gsap.utils.toArray(".panel");
      let tops = panels.map((panel) =>
        ScrollTrigger.create({ trigger: panel, start: "bottom bottom" })
      );

      panels.forEach((panel, i) => {
        ScrollTrigger.create({
          trigger: panel,
          start: () =>
            panel.offsetHeight < window.innerHeight
              ? "top top"
              : "bottom bottom", // if it's shorter than the viewport, we prefer to pin it at the top
          pin: true,
          pinSpacing: false,
        });
      });

      ScrollTrigger.create({
        snap: {
          snapTo: (progress, self) => {
            // let panelStarts = tops.map((st) => st.start),
            //     snapScroll = gsap.utils.snap(
            //         panelStarts,
            //         self.scroll()
            //     );
            return gsap.utils.normalize(
              0,
              ScrollTrigger.maxScroll(window),
              snapScroll
            ); // snapping requires a progress value, so convert the scroll position into a normalized progress value between 0 and 1
          },
          duration: 0.5,
        },
      });
    }
  }
};
</script>
<style></style>