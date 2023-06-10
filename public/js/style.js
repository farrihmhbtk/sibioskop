// Assuming you have multiple videos and play buttons generated in a loop
const videoCount = 5; // Number of videos

// Loop through each video and play button
for (let i = 0; i < videoCount; i++) {
  const video = document.getElementById(`video-${i}`);
  const playBtn = document.getElementById(`playbutton-${i}`);
  const videoCover = document.getElementById(`video-cover-${i}`);

  let times = 0;

  playBtn.addEventListener('click', () => {
    if (times === 0) {
      video.src += '?autoplay=1';
      times = 1;
      video.style.display = 'block';
      playBtn.style.display = 'none';
      videoCover.style.display = 'none';
    }
  });
}
