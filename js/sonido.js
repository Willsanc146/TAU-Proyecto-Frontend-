const bgVideo = document.getElementById('bg-video');
const sonido = document.getElementById('sonido');

sonido.addEventListener('click', () => {
	if (bgVideo.muted) {
		bgVideo.muted = false;
		sonido.innerHTML =
			'<i class="fa-regular fa-music" style="color: #ffffff"></i>';
	} else {
		bgVideo.muted = true;
		sonido.innerHTML =
			'<i class="fa-regular fa-volume-mute" style="color: #ffffff"></i>';
	}
});
