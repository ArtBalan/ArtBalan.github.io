let bar = document.getElementById('bar');

let burger = document.getElementById('burger');

burger.addEventListener('click', () => {
	burger.classList.toggle('open');
	bar.classList.toggle('show');
} )
