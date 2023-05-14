const Player = document.getElementById('video');
const PlayBtn = document.getElementById('playbutton');
const videoCover = document.getElementById('video-cover');

let times = 0, playY;
const playVideo = PlayBtn.addEventListener( 'click' , () => {
    if(times == 0){
      playY = Player.src += '?autoplay=1';
      times = 1;
      Player.style.display='block';
      PlayBtn.style.display='none';
      document.getElementById('video-cover').style.display='none';
    }
});