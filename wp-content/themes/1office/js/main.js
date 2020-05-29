$( document ).ready( function () {
	// Slide of Recruitment Page
	var recruitment = new Swiper ('#recruitment-page .swiper-container', {
		slidesPerView: 1,
      	spaceBetween: 30,
		loop: true,
        pagination: {
	        el: '#recruitment-page .swiper-pagination',
	        clickable: true,
	    },
        navigation: {
            nextEl: '#recruitment-page .swiper-button-next',
            prevEl: '#recruitment-page .swiper-button-prev',
        },
        speed: 1500,
	});
	// Select of filter bar
	var city = $("#recruitment-page #city #selected-city");
	$("#recruitment-page #city #selected-city").click( function () {
		$("#recruitment-page #city .arrow").css("transform","rotate(180deg)");
		$("#recruitment-page #city .list-select ul").toggle(function () {
			$("#recruitment-page #city .list-select ul").each( function () {
				$("#recruitment-page #city .list-select ul li").click( function () {
					city.text($.trim($(this).text())); 
					$("#recruitment-page #city .list-select ul").hide();
					$("#recruitment-page #city .arrow").css("transform","rotate(0deg)");
				});
			});
		});
	});
	var position = $("#recruitment-page #position #selected-position");
	$("#recruitment-page #position #selected-position").click( function () {
		$("#recruitment-page #position .arrow").css("transform","rotate(180deg)");
		$("#recruitment-page #position .list-select ul").toggle(function () {
			$("#recruitment-page #position .list-select ul").each( function () {
				$("#recruitment-page #position .list-select ul li").click( function () {
					position.text($.trim($(this).text())); 
					$("#recruitment-page #position .list-select ul").hide();
					$("#recruitment-page #position .arrow").css("transform","rotate(0deg)");
				});
			});
		});
	});
	
	// Slide of Customer Page
	var customer = new Swiper ('#customer-page .swiper-container', {
		slidesPerView: 1,
      	spaceBetween: 30,
		loop: true,
        pagination: {
	        el: '#customer-page .swiper-pagination',
	        clickable: true,
	    },
        speed: 1500,
	});
})
