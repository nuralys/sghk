<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $title_for_layout ?>
	</title>

	<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
	<?php endif; ?>
	<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
	<?php endif; ?>
	<?php
		

		echo $this->Html->css(array('style', 'jquery.fancybox.css?v=2.1.5', 'jquery.fancybox-buttons.css?v=1.0.5', 'jquery.fancybox-thumbs.css?v=1.0.7'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script(array('jquery-2.1.4', 'jquery.mousewheel-3.0.6.pack', 'jquery.fancybox.js?v=2.1.5', 'jquery.fancybox-buttons.js?v=1.0.5', 'jquery.fancybox-media.js?v=1.0.6', 'slick.min','script'));
	?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
</head>
<body>
		<div class="main">
			<?php echo $this->element('header') ?>
			<?php echo $this->fetch('content') ?>
			<?php echo $this->element('footer') ?>	
		</div>
		<div class="mob_part">
				<ul class="mob_ul">
					<li class="active"><a href="/">Главная</a></li>
					<li><a href="news.html">Новости</a></li>
					<li class="m_sub">
						<a href="#">Предприятия</a>
						<ul class="m_undersub">
							<li><a href="principles.html">Руководство</a></li>
							<li><a href="sertificates.html">Лицензии и сертификаты</a></li>
							<li><a href="vacancy.html">Вакансии</a></li>
							<li><a href="history.html">История</a></li>
						</ul>
					</li>
					<li><a href="#">Продукция</a></li>
					<li><a href="#">Клиенты</a></li>
					<li class="sub"><a href="#">Галерея</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<div class="mob_close"></div>
			</div>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">
		 $(document).ready(function() {
			$('.multiple-items').slick({
			  infinite: true,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			   responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			});			
			$('.awards_c').slick({
			  infinite: true,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			   responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2

			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 2

			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 450,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			});
			$('.partners-items').slick({
			  infinite: true,
			  slidesToShow: 5,
			  slidesToScroll: 2,
			  responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 4
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1

			      }
			    },
			    {
			      breakpoint: 450,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    ]
			});	
			$('.sertificates-items	').slick({
			  infinite: true,
			  slidesToShow: 8,
			  slidesToScroll: 2,
			  responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 6,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 2

			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1

			      }
			    },
			    {
			      breakpoint: 450,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    }
			    ]
			});						
		 })
		</script>
	</body>
</html>