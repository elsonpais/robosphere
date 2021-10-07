const navSlide = () => {
  const hamburger = document.querySelector(".hamburger");
  const nav = document.querySelector(".navv-menu");
  const buttons = document.querySelector(".buttons");

  hamburger.addEventListener("click", () => {
    if (nav.classList.contains("nav-active")) {
      nav.classList.remove("nav-active");
      nav.style.transform = "translateX(100%)";
    } else {
      nav.classList.add("nav-active");
      nav.style.transform = "translateX(0%)";
    }

    if (buttons.classList.contains("nav-active")) {
      buttons.classList.remove("nav-active");
      buttons.style.transform = "translateX(100%)";
    } else {
      buttons.classList.add("nav-active");
      buttons.style.transform = "translateX(0%)";
    }
  });
};

navSlide();

// gsap.registerPlugin(ScrollTrigger);

gsap.from(".home-banner", {
  duration: 1.5,
  padding: "200px",
  ease: "circ.out",
});
gsap.from(".heading", { duration: 2, top: "80%", ease: "back.out(1.7)" });
gsap.from(".heading", { duration: 2, opacity: "0", ease: "power2.in" });
gsap.from(".navv", {
  duration: 1.5,
  transform: "translateY(-140px)",
  ease: "circ.out",
});
gsap.from(".brandd,.navv-menu,.buttons", {
  duration: 1,
  transform: "translateY(-140px)",
  ease: "power3.in",
  delay: 1,
});

gsap.from(".news-heading", {
  duration: 1,
  transform: "translateY(75px)",
  opacity: "0",
});

gsap.from(".card", {
  duration: 1,
  transform: "translateY(100px)",
  stagger: 0.3,
  delay: 1,
});
gsap.from(".card img", {
  duration: 1,
  transform: "translateY(100px)",
  opacity: "0",
  stagger: 0.3,
  delay: 1,
});

gsap.from(".youtube-img", { duration: 1, transform: "translateX(500px)" });
gsap.from(".youtube-heading", {
  duration: 1,
  transform: "translateX(-900px)",
  delay: 1,
});
gsap.from(".youtube-btn", {
  duration: 1,
  transform: "translateY(300px)",
  delay: 2,
});

// gsap.from(".brand,.nav-menu li a,.buttons button", {
//   duration: 1,
//   opacity: 0,
//   // ease: "power3.in",
//   delay: 2,
// });

// $(function () {
//   $(".card").hover(
//     function () {
//       $(".card").css("cursor", "pointer");
//       // $(".card img").css("display", "none");
//       // $(".card-text h5").css("color", "black");
//     },
//     function () {
//       // $(".card img").css("display", "block");
//       // $(".card-text h5").css("color", "white");
//     }
//   );
// });

// const cards = document.querySelectorAll('.card');
// cards.onmouseover = function() {
//   gsap.from('.card')
// }
