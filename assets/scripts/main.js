// GALERIA zdjęć
var galleryBox = document.querySelector(".galleryBox"),
	galleryImg = document.querySelector(".galleryImg"),
	aside = document.querySelector("aside"),
	arrowLeft = document.querySelector(".arrow-left"),
	arrowRightLeft = document.querySelector(".arrow-right"),
	close = document.querySelector(".fa-times");

galleryBox.addEventListener('click', showImg);
close.addEventListener('click', closeImg);

function showImg(event) {
	aside.style.display = "flex";
	galleryImg.src="posts/norway/"+event.target.id+".jpg";
}

function closeImg(event) {
	aside.style.display = "none";
}

