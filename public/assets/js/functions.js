
//Loading 
$(window).on('load', function() { 
	$('.loader-effect, .loader-effect img').fadeOut();	
	$('#layout-loading').fadeOut('slow');

});


$(document).ready(function() {
    
    'use strict';

	/********** Home animation****** */
	$('.h-side-imgs, .masbar-animate').addClass('animate');

	//Home animation
	setTimeout(
		function() 
		{
			$('.part6, .part4, .part10').addClass('animated-up-down');
		
		}, 1000
	);
	setTimeout(
		function() 
		{
			$('.part5, .part7').addClass('animated-up-down');
		
		}, 1500
	);
	setTimeout(
		function() 
		{
			$('.part1, .part9, .part11').addClass('animated-up-down');
		
		}, 2000
	);	
	//mujib animation
	setTimeout(
		function() 
		{
			$('.mujib-animate .mujib3').addClass('animated-up-down');
		
		}, 2000
	);
	
	//toggle menu
	$('.navigation').on('click','#toggle-menu', function(e) {
		$(this).addClass('open');
		$('#menu-content').css('display','flex');
		$('body').toggleClass('menu-opend');
	});
	// $('.open-menu').on('click', function(e) {
	// 	e.preventDefault();
	// 	$('#toggle-menu').addClass('open');
	// 	$('#menu-content').css('display','flex');
	// 	$(document).scrollTop('');
	// 	$('body').toggleClass('menu-opend');
	// 	var index = $(this).index() + 2;
	// 	$('.menu-list > ul > li').removeClass('active');
	// 	$('.menu-list > ul > li:nth-child('+index+')').addClass('active');
	// });
	$('.navigation').on('click','#toggle-menu.open', function(e) {
		$(this).removeClass('open');
		$('#menu-content').fadeOut()
	})
	//
	$('.menu-list > ul > li').on('click', function(e) {
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
	});
	//toggle list in menu
	$('.has-menu').on('click', function(e) {
		// e.preventDefault();
		e.stopPropagation()
		$('.sub-menu').hide();
		$(this).find('.sub-menu').show();
	});
	
	//vertical slider Header
	$(".vertical-slider").slick({
		dots: true,
		autoplay: true,
		autoplaySpeed: 4000,
        vertical: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1
	  });
	  
	  //services slider
	  $(".regular").slick({
		autoplay: true,
		autoplaySpeed: 2500,
        slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			breakpoint: 767,
			settings: {
			  slidesToShow: 2
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 1
			}
		}

		]
      });
	 
	//Product slider
	  $('.slider-for').slick({
		autoplay: true,
		autoplaySpeed: 3500,
		dots: false,
        slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		asNavFor: '.slider-nav'
	  });
	  $('.slider-nav').slick({
		autoplay: true,
		autoplaySpeed: 3500,
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		arrows: true,
		dots: false,
		focusOnSelect: true
	  });


	  //Parteners slider
	  $(".partener").slick({
		autoplay: true,
		autoplaySpeed: 2000,
        slidesToShow: 6,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 991,
				settings: {
				  slidesToShow: 5
				}
			  },
			{
			breakpoint: 768,
			settings: {
			  slidesToShow: 4
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 3
			}
		}

		]
	  });
	  
	  //Clients slider
	  $(".client").slick({
		autoplay: true,
		autoplaySpeed: 2400,
        slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 991,
				settings: {
				  slidesToShow: 5
				}
			  },
			{
			breakpoint: 768,
			settings: {
			  slidesToShow: 4
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 3
			}
		}

		]
      });
	  
	  
	  //fixedslider 
	  /*-----------------------------
		SMOOTH SCROLL JS  
		-------------------------------*/
		var sections = $('.scroll')
		, nav = $('.fixedslider')
		, nav_height = nav.outerHeight();


		var cur_pos = $(this).scrollTop('');
		sections.each(function() {
			var top = $(this).offset().top - nav_height,
				bottom = top + $(this).outerHeight();
			if (cur_pos >= top && cur_pos <= bottom) {
				nav.find('a').removeClass('active');
				sections.removeClass('active');
			
				$(this).addClass('active');
				nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
			}
		});	
		$(window).on('scroll', function () {
			var cur_pos = $(this).scrollTop();
			sections.each(function() {
				var top = $(this).offset().top - nav_height,
					bottom = top + $(this).outerHeight();
				if (cur_pos >= top && cur_pos <= bottom) {
					nav.find('a').removeClass('active');
					sections.removeClass('active');
				
					$(this).addClass('active');
					nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
				}
			});	
		});	

		$(function() {
			$('.fixedslider a').on('click', function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 800);
						return false;
					}
				}
			});
		});

	/** footer drop down **/
	$('.footer-drp .opendrp').click(function(){
		$(this).parent().find('.dropmenu').toggleClass('show-dropmenu');
	});

	$('.scroll-next').on('click', function(e) {
		$('html , body').animate({
			scrollTop: $('.' + $(this).data('scroll')).offset().top 		
		},800);
	});

});    