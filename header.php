<?php
	
	require 'deck34admin/util/connect.php';
	require 'deck34admin/util/appvars.php';
	require 'deck34admin/funcoes.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="banner_cartaz/css/global.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="banner/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="tooltips/tooltips.css">
<link rel="stylesheet" type="text/css" href="lightbox/lightbox/lightbox.css">




<script src="banner_cartaz/js/jquery.googleapis.min.js"></script>


<script src="banner_cartaz/js/slides.min.jquery.js"></script>


<script type="text/javascript" src="lightbox/lightbox/lightbox-full.js"></script>

<script type="text/javascript" src="form_vali/form_vali.js"></script>

<script type="text/javascript" language="javascript" src="banner/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.skitter.min.js"></script>

<link rel="shortcut icon" type="image/png" href="estru/favicon.png">
<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">

<title><?php echo $title; ?></title>

<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: false, 
				dots: true, 
				animation: 'fade',
				label: false,
				preview: false
				
			});
		});
	</script>


<script type="text/javascript">
hs.graphicsDir = 'lightbox/lightbox/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.fadeInOut = true;
hs.dimmingOpacity = 0.8;
/*hs.outlineType = 'rounded-white';*/
hs.outlineType = 'glossy-dark';
hs.wrapperClassName = 'dark';
hs.captionEval = 'this.thumb.alt';
hs.marginBottom = 105; // make room for the thumbstrip and the controls
hs.numberPosition = 'caption';
hs.outlineWhileAnimating = true;


// Add the slideshow providing the controlbar and the thumbstrip
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	overlayOptions: {
		className: 'text-controls',
		position: 'bottom center',
		relativeTo: 'viewport',
		offsetY: -60
	},
	thumbstrip: {
		position: 'bottom center',
		mode: 'horizontal',
		relativeTo: 'viewport'
	}
});
</script>

<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'banner_cartaz/img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>



<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if lt IE 9]>
 <style type="text/css">
 
 header, nav, section, article, aside, footer {
   display:block;
}
 
</style
<![endif]-->


</head>
