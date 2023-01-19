let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
let headerLink = document.querySelectorAll('.header-link')

menuBtn.addEventListener('click', () => {
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})


for (let i = 0; i < headerLink.length; i++){
	headerLink[i].addEventListener('click', () => {
		menuBtn.classList.toggle('active');
		menu.classList.toggle('active');
	})
}