console.log("Init MP3");

var music = document.getElementById("music"); // id for audio element

if (music) {
  var duration = music.duration; // Duration of audio clip, calculated here for embedding purposes

  var pButton = document.getElementById("pButton"); // play button
  var playhead = document.getElementById("playhead"); // playhead
  var timeline = document.getElementById("timeline"); // timeline

  var tempoAtual = document.getElementById("tempo-atual");
  var tempoFinal = document.getElementById("tempo-final");

  // timeline width adjusted for playhead
  var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;

  // play button event listenter
  pButton.addEventListener("click", play);

  // timeupdate event listener
  music.addEventListener("timeupdate", timeUpdate, false);

  // makes timeline clickable
  timeline.addEventListener(
    "click",
    function (event) {
      moveplayhead(event);
      music.currentTime = duration * clickPercent(event);
    },
    false
  );

  // makes playhead draggable
  playhead.addEventListener("mousedown", mouseDown, false);
  window.addEventListener("mouseup", mouseUp, false);

  // Gets audio file duration
  music.addEventListener(
    "canplaythrough",
    function () {
      duration = music.duration;
    },
    false
  );

  // returns click as decimal (.77) of the total timelineWidth
  function clickPercent(event) {
    return (event.clientX - getPosition(timeline)) / timelineWidth;
  }

  // Boolean value so that audio position is updated only when the playhead is released
  var onplayhead = false;

  // mouseDown EventListener
  function mouseDown() {
    onplayhead = true;
    window.addEventListener("mousemove", moveplayhead, true);
    music.removeEventListener("timeupdate", timeUpdate, false);
  }

  // mouseUp EventListener
  // getting input from all mouse clicks
  function mouseUp(event) {
    if (onplayhead == true) {
      moveplayhead(event);
      window.removeEventListener("mousemove", moveplayhead, true);
      // change current time
      music.currentTime = duration * clickPercent(event);
      music.addEventListener("timeupdate", timeUpdate, false);
    }
    onplayhead = false;
  }
  // mousemove EventListener
  // Moves playhead as user drags
  function moveplayhead(event) {
    var newMargLeft = event.clientX - getPosition(timeline);

    if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
      // playhead.style.marginLeft = newMargLeft + "px";
      playhead.style.width = newMargLeft + "px";
    }
    if (newMargLeft < 0) {
      // playhead.style.marginLeft = "0px";
      playhead.style.width = "0px";
    }
    if (newMargLeft > timelineWidth) {
      // playhead.style.marginLeft = timelineWidth + "px";
      playhead.style.width = timelineWidth + "px";
    }
  }

  // timeUpdate
  // Synchronizes playhead position with current point in audio
  function timeUpdate() {
    var playPercent = timelineWidth * (music.currentTime / duration);
    // playhead.style.marginLeft = playPercent + "px";
    playhead.style.width = playPercent + "px";

    tempoAtual.innerText = msToTime(music.currentTime * 1000);
    tempoFinal.innerText = msToTime(duration * 1000);

    if (music.currentTime == duration) {
      pButton.className = "";
      pButton.className = "play";
    }
  }

  //Play and Pause
  function play() {
    console.log("AQUI");
    // start music
    if (music.paused) {
      music.play();
      // remove play, add pause
      pButton.className = "";
      pButton.className = "pause";
    } else {
      // pause music
      music.pause();
      // remove pause, add play
      pButton.className = "";
      pButton.className = "play";
    }
  }

  // getPosition
  // Returns elements left position relative to top-left of viewport
  function getPosition(el) {
    return el.getBoundingClientRect().left;
  }

  function msToTime(duration) {
    var milliseconds = parseInt((duration % 1000) / 100),
      seconds = Math.floor((duration / 1000) % 60),
      minutes = Math.floor((duration / (1000 * 60)) % 60),
      hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    return hours + ":" + minutes + ":" + seconds;
  }
}
