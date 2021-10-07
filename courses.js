gsap.from(".course-card", {
  duration: 1,
  transform: "translateX(-110%)",
  ease: "power1.out",
  stagger: "0.5",
});

$(document).ready(function () {
  $("#course-card1").click(function () {
    if ($("#course-content1").is(":visible")) {
      $("#course-content1").slideUp("slow");
    } else {
      $("#course-content1").slideDown("slow");
    }
  });
  $("#course-card2").click(function () {
    if ($("#course-content2").is(":visible")) {
      $("#course-content2").slideUp("slow");
    } else {
      $("#course-content2").slideDown("slow");
    }
  });
  $("#course-card3").click(function () {
    if ($("#course-content3").is(":visible")) {
      $("#course-content3").slideUp("slow");
    } else {
      $("#course-content3").slideDown("slow");
    }
  });
});
