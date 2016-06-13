/*
	调用接口和自己写的javascript
*/

$(window).load(function() {
	/*轮播图基本*/
	// PORTFOLIO SLIDES //
	$('#slides').slides({
		preload: true,
		preloadImage: 'images/nivo-preloader.gif',
		play: 0,
		pause: 0,
		effect: 'fade',
		autoHeight: true,
		effects: {
		 navigation: 'fade',  // [String] Can be either "slide" or "fade"
		 pagination: 'fade' // [String] Can be either "slide" or "fade"
		},
		hoverPause: true
	});
});


	// 首页轮播 //
	var api;
	var api2;
	
jQuery(document).ready(function() {
	api =  jQuery('.fullwidthbanner').revolution(
		{
			delay:9000,
			startheight:450,
			startwidth:1120,

			hideThumbs:200,

			thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
			navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
			navigationStyle:"round",				//round,square,navbar

			touchenabled:"on",						// Enable Swipe Function : on/off
			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

			navOffsetHorizontal:0,
			navOffsetVertical:0,

			stopAtSlide:-1,
			stopAfterLoops:-1,

			shadow:0,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
			fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
		});
		
	api2 =  jQuery('.banner').revolution(
		{
			delay:9000,
			startheight:450,
			startwidth:1120,

			hideThumbs:200,

			thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
			navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
			navigationStyle:"round",				//round,square,navbar

			touchenabled:"on",						// Enable Swipe Function : on/off
			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

			navOffsetHorizontal:0,
			navOffsetVertical:0,

			stopAtSlide:-1,
			stopAfterLoops:-1,

			shadow:0,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
			fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
		});		
		
	
	// 文章页的轮播 //
	$('.blog-slides').slides({
		preload: true,
		preloadImage: 'images/nivo-preloader.gif',
		play: 5000,
		pause: 2500,
		effect: 'slide',
		autoHeight: false,
		effects: {
		 navigation: 'fade',  // [String] Can be either "slide" or "fade"
		 pagination: 'fade' // [String] Can be either "slide" or "fade"
		},
		hoverPause: true
		
	});

	
	// 轮播的渐变效应 //
	$(".blog-slides .next, #slides .next, .post .next").hide();
	$(".blog-slides .prev, #slides .prev, .post .prev").hide();
	
	$(".blog-slides, #slides").hover(function() {
			$(".next").stop(true, true).fadeIn();
			$(".prev").stop(true, true).fadeIn();
			}, function() {
			$(".next").fadeOut();
			$(".prev").fadeOut();
	});
	
	// 客户端渐变 //
	$(".clients li").hover(function() {
		$(this).children('a').animate({opacity:"0.8"},{queue:false,duration:200}) },
		function() {
			$(this).children('a').animate({opacity:"0.4"},{queue:false,duration:200})
			});	
	
	// 推荐 //
	$('#testimonials').cycle({
		fx: 'fade',
		timeout:       4000,   // milliseconds between slide transitions (0 to disable auto advance) 
		speed:         1000	
	});			


	// 旋转的输入和输出//
	$('.item-on-hover, .item-on-hover-white').hover(function(){		 		 
		$(this).animate({ opacity: 1 }, 200);
		$(this).children('.hover-link, .hover-image, .hover-video').animate({ opacity: 1 }, 200);
	}, function(){
		$(this).animate({ opacity: 0 }, 200);
		$(this).children('.hover-link, .hover-image, .hover-video').animate({ opacity: 0 }, 200);
	});
	
	// PORTFOLIO GRID IN AND OUT EFFECT //
	$('.grid-item-on-hover').hover(function(){
		$(this).animate({ opacity: 0.9 }, 200);
	}, function(){
			$(this).animate({ opacity: 0 }, 200);
		});

	// isotope插件的使用——筛选排版插件//
	var $container = $('.grid');
	var $blog_container = $('#masonry-blog');
	var $portfolio_container = $('.portfolio-gallery');
	var $gallery_container = $('.gallery-page');
	var $four_container = $('.four-columns, .three-columns, .two-columns');

		// 文章网格布局
		$blog_container.imagesLoaded( function(){
		  $blog_container.isotope({
				itemSelector: '.masonry-post',
				animationEngine: 'jquery',	
				gutterWidth: 20	
		  });
		});	
		
		// 图片布局
		$gallery_container.imagesLoaded( function(){
		  $gallery_container.isotope({
				itemSelector: 'li',
				animationEngine: 'jquery',	
				gutterWidth: 20	
		  });
		});			

		// 组合图像的排版选项
		$portfolio_container.imagesLoaded( function(){
		  $portfolio_container.isotope({
				itemSelector: 'a',
				animationEngine: 'jquery',	
				gutterWidth: 20	
		  });
		});
		
		// 组合网络布局和过滤
		$container.isotope({
			itemSelector: 'li',
			animationEngine: 'jquery',
			masonry: {
				columnWidth: 5
			}
		});
		
		// 组合过滤
		$four_container.isotope({
			itemSelector: 'li',
			animationEngine: 'jquery'
		});	  
		  
		var $optionSets = $('#options .option-set'),
			$optionLinks = $optionSets.find('a');

		$optionLinks.click(function(){
			var $this = $(this);
			// 如果已经选定则不进行动作
			if ( $this.hasClass('selected') ) {
				return false;
			}
			var $optionSet = $this.parents('.option-set');
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');
	  
			// 动态选择对象
			var options = {},
				key = $optionSet.attr('data-option-key'),
				value = $this.attr('data-option-value');
			// parse 'false' as false boolean
			value = value === 'false' ? false : value;
			options[ key ] = value;
			if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
			  // changes in layout modes need extra logic
			  changeLayoutMode( $this, options )
			} else {
			  // otherwise, apply new options
			  $container.isotope( options );
			  $four_container.isotope( options );
			}
			
			return false;
		});





	//TRANSFORM MENU INTO SELECT FOR RESPONSIVE LAYOUT //
	$('#mainnav').mobileMenu({
		defaultText: 'Navigate to...',
		className: 'select-menu',
		subMenuDash: '&ndash;'
	});

	
	// PRELOAD IMAGES //
	$("#portfolio-carousel, #homeblog-carousel, .post-thumbnail, .portfolio li").preloadify();

	
	// MENU SUBNAV HACKS //
	$('ul#mainnav').superfish({
		delay: 100,
		autoArrows: false,
		animation: {opacity:'show',opacity:'show'}, 
           speed: 'fast' 
	});
	
	$("ul#mainnav li").css({ "overflow":"visible"});

	$("ul#mainnav li ul li:last-child").addClass('nav-last-item');
	$("ul#mainnav li ul li:first-child").addClass('nav-first-item');
	
	var $thisis;
	$("#mainnav > li").each(function(){
		$thisis = $(this);
		if(($thisis.find("> a.current").length) || ($thisis.find("> ul > li > a.current").length)) {
			$thisis.addClass("current-item item-active");		
			$(this).prev().addClass('prev-item');
		  }
	});	

	$('#mainnav > li').hover(
		function(){ $(this).prev().addClass('previ-item') },
		function(){ $(this).prev().removeClass('previ-item') }
	)	
	
	
	// TWITTER WIDGET //
	$(".tweet").tweet({
	  join_text: "auto",
	  username: "deliciousthemes",
	  count: 1,
	  template: "{join}{text}{time}{reply_action}{retweet_action}",
	  auto_join_text_reply: null,
      auto_join_text_default: null,        // [string]   auto text for non verb: "i said" bullocks
      auto_join_text_ed: null,                   // [string]   auto text for past tense: "i" surfed
      auto_join_text_ing: null,               // [string]   auto tense for present tense: "i was" surfing
      auto_join_text_reply: null,     // [string]   auto tense for replies: "i replied to" @someone "with"
      auto_join_text_url: null, 
	  loading_text: "loading tweets..."
	});	

	
	// FLICKR WIDGET //
	$('#flickr').jflickrfeed({
		limit: 10,
		qstrings: {
			id: '58842866@N08',
			tags: 'architecture'
		},
		itemTemplate: 
		'<li>' +
			'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
		'</li>' 
	});	


	
	// FIXES THE BACKGROUND IMAGE WHEN ADDED //
	$(window).load(function() {    

		var theWindow        = $(window),
			$bg              = $("#bg"),
			aspectRatio      = $bg.width() / $bg.height();
									
		function resizeBg() {
			
			if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
				$bg
					.removeClass()
					.addClass('bgheight');
			} else {
				$bg
					.removeClass()
					.addClass('bgwidth');
			}
						
		}
									
		theWindow.resize(function() {
			resizeBg();
		}).trigger("resize");

	});	

	
	// PRETTYPHOTO //
	$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});

	
	// Z-INDEX FOR HEADER IMAGES //
	var zIndexNumber = 1000;
		$('#top div').each(function() {
			$(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});	

		
	// HOMEBLOG CAROUSEL //
	$('#homeblog-carousel').jcarousel({
        vertical: false,
        rtl: false,
        start: 1,
        offset: 1,
        scroll: 1,
        animation: 'normal',
        easing: 'swing',
        auto: 0
	});			
		
		
	// 主页的旋转 //
	if (document.documentElement.clientWidth < 1000) {
		$('#portfolio-carousel').jcarousel({
			vertical: false,
			rtl: false,
			start: 1,
			offset: 1,
			scroll: 1,
			animation: 'normal',
			easing: 'swing',
			auto: 0
		});	
	}
		
	else {	$('#portfolio-carousel').jcarousel({
			vertical: false,
			rtl: false,
			start: 1,
			offset: 1,
			scroll: 4,
			animation: 'normal',
			easing: 'swing',
			auto: 0
	});	}
		
	
	// loading的阴影功能 //
	$(".home .top-shadow").hide().delay(1500).fadeIn(3000);
	$(".home .bottom-shadow").hide().delay(1500).fadeIn(3000);
	

	// TABS FUNCTION //
	$('.tabs-wrapper').each(function() {
		$(this).find(".tab-content").hide(); //Hide all content
		$(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(this).find(".tab-content:first").show(); //Show first tab content
	});
	$("ul.tabs li").click(function(e) {
		$(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(this).parents('.tabs-wrapper').find(".tab-content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$("li.tab-item:first-child").css("background", "none" );
		$(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
		e.preventDefault();
	});
	$("ul.tabs li a").click(function(e) {
		e.preventDefault();
	})
	$("li.tab-item:last-child").addClass('last-item');


	// ACCORDION FUNCTION //		
	$('.ac-btn').click(function() {	

		$('.ac-btn').removeClass('on');
		$('.ac-selected').slideUp('normal');
		$('.ac-content').removeClass('ac-selected');
		$('.ac-content').slideUp('normal');
		if($(this).next().is(':hidden') == true) {
			$(this).addClass('on');
			$(this).next().slideDown('normal');
		 }   
	 });
	$('.ac-btn').mouseover(function() {
		$(this).addClass('over');
	}).mouseout(function() {
		$(this).removeClass('over');										
	});	
	$('.ac-content').hide();		
	
	// 功能切换//
	$('#toggle-view li').click(function () {
        var text = $(this).children('div.panel');
        if (text.is(':hidden')) {
            text.slideDown('200');
            $(this).children('span').addClass('toggle-minus');     
            $(this).addClass('activated');     
        } else {
            text.slideUp('200');
			$(this).children('span').removeClass('toggle-minus'); 
            $(this).children('span').addClass('toggle-plus'); 
			$(this).removeClass('activated'); 			
        }
         
    });

	// 图标的html太牛充
	$('#topfooter').append('<div class="clear"></div>');

	$('.box-error').prepend('<i class="icon-minus-sign"></i>');
	$('.box-notice').prepend('<i class="icon-exclamation-sign"></i>');
	$('.box-success').prepend('<i class="icon-flag"></i>');
	$('.box-info').prepend('<i class="icon-info-sign"></i>');

	$('.check').prepend('<i class="icon-ok"></i>');

	$('.tick-list li').prepend('<i class="icon-ok"></i>');
	$('.play-list li').prepend('<i class="icon-caret-right"></i>');
	$('.star-list li').prepend('<i class="icon-star"></i>');
	$('.arrow-list li').prepend('<i class="icon-double-angle-right"></i>');

	
	// 音频播放器 //
	$("#audio_jplayer").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"../../../Public/Home/media/Nepal.mp3",
				ogg:"../../../Public/Home/media/audio.ogg"
			});
		},
		swfPath: "../../media",
		supplied: "mp3, ogg",
		wmode: "window"
	});
  
});

