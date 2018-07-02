// STICKY socialMedia
$(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('.socialMedia').offset().top;
        var stickyHeaderRight = $(window).width() - ($('.socialMedia').offset().left + $('.socialMedia').outerWidth());
        var socialMediaWidth = document.querySelector('.socialMedia').offsetWidth;
        console.log(socialMediaWidth);

        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.socialMedia').css({position: 'fixed', width: socialMediaWidth+'px', top: '0px', right: stickyHeaderRight+'px', marginTop: '0px', height: 'auto'});
                		$('.socialMedia--mainSite').css({paddingTop: '0px'});
                } else {
                        $('.socialMedia').css({position: 'static', marginTop: '20px', float: 'right'});
                		$('.socialMedia--mainSite').css({paddingTop: '20px'});
                }
        });
  });


// GALERIA zdjęć
var galleryBox = document.querySelector(".galleryBox"),
	galleryBox__btn = document.querySelector(".galleryBox__btn"),
	galleryImg = document.querySelector(".galleryImg"),
	aside = document.querySelector("aside"),
	arrowLeft = document.querySelector(".arrow-left"),
	arrowRight = document.querySelector(".arrow-right"),
	nr,
	numberOfPictures = 8;
	close = document.querySelector(".fa-times");

galleryBox__btn.addEventListener('click', showImgWithId);
galleryBox.addEventListener('click', showImg);
arrowLeft.addEventListener('click', prevImg);
arrowRight.addEventListener('click', nextImg);
close.addEventListener('click', closeImg);

function showImg(event) {
	aside.style.display = "flex";
	nr = event.target.id;
	galleryImg.src="posts/norway/"+nr+".jpg";
}

function showImgWithId(event) {
	aside.style.display = "flex";
	nr = 1;
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

