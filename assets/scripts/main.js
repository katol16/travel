// GALERIA zdjęć
var galleryBox = document.querySelector(".galleryBox"),
	galleryImg = document.querySelector(".galleryImg"),
	aside = document.querySelector("aside"),
	arrowLeft = document.querySelector(".arrow-left"),
	arrowRight = document.querySelector(".arrow-right"),
	nr,
	numberOfPictures = 8;
	close = document.querySelector(".fa-times");

galleryBox.addEventListener('click', showImg);
arrowLeft.addEventListener('click', prevImg);
arrowRight.addEventListener('click', nextImg);
close.addEventListener('click', closeImg);

function showImg(event) {
	aside.style.display = "flex";
	nr = event.target.id;
	galleryImg.src="posts/norway/"+nr+".jpg";
}

function nextImg() {
	if (nr < numberOfPictures) {
		nr++;
		galleryImg.src="posts/norway/"+nr+".jpg";	
	}
}

function prevImg() {
	if (nr > 1) {
		nr--;
		galleryImg.src="posts/norway/"+nr+".jpg";	
	}
}

function closeImg(event) {
	aside.style.display = "none";
}

