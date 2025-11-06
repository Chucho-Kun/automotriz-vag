<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Omnibus de México</title>

	<!-- LayerSlider CSS -->
	<link rel="stylesheet" href="../layerslider/css/layerslider.css">
	
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Oswald:300,regular,700|Yanone+Kaffeesatz:300">
	
	<!-- External libraries: jQuery & GreenSock -->
	<script src="../layerslider/js/jquery.js"></script>
	<script src="../layerslider/js/greensock.js"></script>

	<!-- LayerSlider script files -->
	<script src="../layerslider/js/layerslider.transitions.js"></script>
	<script src="../layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	
</head>
<body>

	<!-- Slider HTML markup -->
	<div id="slider" style="width:1000px;height:349px;margin:0 auto;box-shadow:0px 4px 3px -5px rgba(0,0,0,0.25) inset;">

		<div class="ls-slide" data-ls="duration:8000; transition2d:1; kenburnsscale:1.2;">
			<img width="1000" height="349" src="imgSlider/1.jpg" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:200; parallaxlevel:0;">
			<img width="1000" height="349" src="imgSlider/2.png" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="durationin:2500; delayin:500; easingin:easeInOutQuart; rotatexin:-90; transformoriginin:50% 100% 0; offsetxout:-80; durationout:400; parallaxlevel:0;">
			<a target="_blank" href="/"> 
				<img width="1000" height="349" src="imgSlider/3.png" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="durationin:2500; delayin:1000; easingin:easeInOutQuart; rotatexin:-90; transformoriginin:50% 100% 0; offsetxout:-80; durationout:400; parallaxlevel:0;">
			</a>
			</div>
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
			<a target="_blank" href="https://omexvip.com.mx/"> 
				<img width="1000" height="349" src="imgSlider/omevxvip-tucson.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
			</a>
		</div>
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
			<a target="_blank" href="https://noreste.com.mx/"> 
				<img width="1000" height="349" src="imgSlider/noreste-san-luis.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
			</a>
		</div>

		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
			<a target="_blank" href="https://omexvip.com.mx/"> 
				<img width="1000" height="349" src="imgSlider/omevxvip-houston.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
			</a>
		</div>		
	
	</div>


	<!-- Initializing the slider -->
	<script type="text/javascript">

		$(document).ready(function() {

			
			$('#slider').layerSlider({
				sliderVersion: '6.0.0',
				type: 'fullwidth',
				maxRatio: 1,
				slideBGSize: 'auto',
				skin: 'v5',
				globalBGColor: 'transparent',
				navPrevNext: false,
				thumbnailNavigation: 'disabled',
				allowRestartOnResize: true,
				navStartStop: false,
				navButtons: false,
				skinsPath: '../layerslider/skins/'
			});

			$('#slider img').on('dblclick', function(e) {
				e.preventDefault();
				e.stopPropagation();
				return false;
			});
		});

	</script>
</body>
</html>


