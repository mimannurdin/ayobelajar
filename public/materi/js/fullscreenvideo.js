const video = document.querySelector("video");

video.addEventListener('click', ()=>{
    video.requestFullscreen();
});