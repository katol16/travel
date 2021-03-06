// STICKY socialMedia

$(window).resize(function() { 
	changeSocialMediaPosition();

});

var postContainer = document.querySelector('.postContainer');

// trzeba to zrobić za pomocą klas!
function changeSocialMediaPosition() {
	$(function(){
	    // Check the initial Poistion of the Sticky Header
	    var stickyHeaderTop = $('.socialMedia').offset().top;
	    var stickyHeaderRight = $(window).width() - ($('.socialMedia').offset().left + $('.socialMedia').outerWidth());
	    var socialMediaWidth = document.querySelector('.socialMedia').offsetWidth;

	    document.addEventListener('scroll', scrollFunc);
	    function scrollFunc(){
	        if( ( $(window).scrollTop() > stickyHeaderTop) && ($(document).width() > 768) && ($('body').hasClass('postBody')) ||
	         ( $(window).scrollTop() > stickyHeaderTop) && ($(document).width() > 1170) && $('.socialMedia').hasClass('socialMedia--mainSite') ) {
	            $('.socialMedia').css({position: 'fixed', width: socialMediaWidth+'px', top: '0px', right: stickyHeaderRight+'px', marginTop: '0px', height: 'auto',});
	        } else {
	            $('.socialMedia').css({position: 'static', marginTop: '20px',top: 'none', width: ''});
	        }
	    };
	});	
}
changeSocialMediaPosition();

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

