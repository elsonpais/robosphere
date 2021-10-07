// gsap.from(".box", {
//   duration: 3,
//   transform: "translateX(500px)",
//   transform: "translateY(500px)",
// });
// document.ready(function () {
//   alert("working");
// });

// document.readyState(function () {
//   alert("ready");
//   console.log("working");
// });

// document.onload(function () {
//   alert("ready bro");
// });

$(document).ready(function () {
  $("#signup").click(function () {
    $("#login-card").addClass("hide-login");
    $("#signup-card").addClass("show-signup");
  });
  $("#login").click(function () {
    $("#signup-card").removeClass("show-signup");
    $("#login-card").removeClass("hide-login");
  });
});
