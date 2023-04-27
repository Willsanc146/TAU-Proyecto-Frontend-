const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector('.navbar');

let menuOpen = false;
menuBtn.addEventListener('click', () => {
	if (!menuOpen) {
		menuBtn.classList.add('open');
		navbar.style.display = 'flex';
		menuOpen = true;
	} else {
		menuBtn.classList.remove('open');
		navbar.style.display = 'none';
		menuOpen = false;
	}
});
