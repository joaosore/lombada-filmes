import Player from "@vimeo/player";

async function init_video() {
  console.log("Init Video");

  const options = {
    width: 1500,
    loop: false,
    controls: true,
    byline: false,
    color: "FDCC36",
    playsinline: true,
    portrait: true,
    title: false,
    responsivo: true,
  };

  var player = "";
  var myEle = document.getElementById("made-in-ny");

  if (myEle) {
    player = new Player("made-in-ny", options);
  }

  $(document).on("click", ".btn", function () {
    if ($(this).hasClass("play")) {
      $(this).addClass("pause");
      $(this).removeClass("play");
      player.play();
    } else {
      $(this).addClass("play");
      $(this).removeClass("pause");
      player.pause();
    }
  });
}

$(document).ready(function () {
  init_video();
});
