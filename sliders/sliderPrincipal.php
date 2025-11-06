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
	<div id="slider" style="width:1000px;height:488px;margin:0 auto;box-shadow:0px 4px 3px -5px rgba(0,0,0,0.25) inset;">
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
				<img width="1000" height="488" src="imgSlider/principal-fondo.jpg" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
				<img width="1000" height="488" src="imgSlider/principal-texto.png" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:180; offsetxout:-80; durationout:400; parallaxlevel:0;">
				<img width="1000" height="488" src="imgSlider/principal-btn.png" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:280; offsetxout:-80; durationout:400; parallaxlevel:0;">
		</div>

		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
			<a target="_blank" href="https://bit.ly/4gQMRDI"> 
				<img width="1000" height="488" src="imgSlider/encuesta.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
			</a>
		</div>
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
			<a target="_blank" href="tel:5551414300"> 
				<img width="1000" height="488" src="imgSlider/link-pago.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
			</a>
		</div>
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
				<img width="1000" height="488" src="imgSlider/flexibilidad.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
		</div>
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
				<img width="1000" height="488" src="imgSlider/aifa.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
		</div>
		
		<div class="ls-slide" data-ls="duration:4000; transition2d:1; kenburnsscale:1.2;">
				<img width="1000" height="488" src="imgSlider/boleto-abierto.webp" class="ls-l" alt="" style="top:0px; left:0px;" data-ls="offsetxin:80; offsetxout:-80; durationout:400; parallaxlevel:0;">
		</div>
	
	</div>


	<!-- Initializing the slider -->
	<script type="text/javascript">

		$(document).ready(function() {

			
			$('#slider').layerSlider({
				sliderVersion: '6.0.0',
				type: 'fullwidth',
				responsiveUnder: 540, //671
				maxRatio: 1,
				slideBGSize: 'auto',
				skin: 'v5',
				globalBGColor: 'transparent',
				navPrevNext: true,
				thumbnailNavigation: 'disabled',
				allowRestartOnResize: true,
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


