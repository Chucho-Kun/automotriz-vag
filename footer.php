<?php

$year_footer = date("Y");
$servidor = "";

echo '
<script>
    const path = window.location.pathname;
    const seccion = path.split(\'/\').filter(Boolean)[0];
    $(\'#\'+seccion).css(\'border-bottom\', \'solid\');
</script>
<script>

mostrado = false;
function menuLateral(){

	if( mostrado ){
	  $(".menuLateral").animate({"right": "-320px"}, 500); mostrado = false;$(".fondoNegroB").fadeOut();
	}else{
	  $(".menuLateral").animate({"right": "+=300px"}, 500); mostrado = true;$(".fondoNegroB").fadeIn();
	}
  }
      function responsive(){
    	let anchoVentana = $(window).width();

    	let a = (anchoVentana < 903) ? \'.webDisplay\' : \'.mobilDisplay\' ;
    	let b = (anchoVentana < 903) ? \'.mobilDisplay\' : \'.webDisplay\' ;
    	let c = (anchoVentana < 903) ? \'.menuEsc\' : \'.menuMobil\' ;
    	let d = (anchoVentana < 903) ? \'.menuMobil\' : \'.menuEsc\' ;
		let e = (anchoVentana < 903) ? $(\'.menuBTNflotante\').css(\'display\', \'inline-block\') : $(\'.menuBTNflotante\').css(\'display\', \'none\');

    	$(a).css(\'display\', \'none\');
    	$(b).css(\'display\', \'inline-block\');

    	$(c).css(\'display\', \'none\');
    	$(d).css(\'display\', \'inline-table\');
    }

    $(window).resize(function(event) { responsive() });

    responsive();
</script>
<footer>
	<table width="100%" style="background-color:#000;color: white;">
		<tr>
			<td>
				<table class="footerTable">
					<tr>
						<td>
							<a  class="rssBtn" style="padding:5px" href="">Preguntas</a>
						</td>
						<td>
							<a  class="rssBtn" style="padding:5px" href="">Contacto</a>
						</td>
						<td>
							<a  class="rssBtn" style="padding:5px" href="">Blog</a>
						</td>						
					</tr>
				</table>
			</td>
		</tr>
        <tr>
			<td height="120"> 
                <a href="http://dsg.automotrizmora.com/">
                    <img alt="logo omnibus de mexico" class="rssBtn" width="250" style="display: inline-block;" src="'.$servidor.'/imagesApp/logoblanco.svg" >
                </a>
            </td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<a href="https://www.facebook.com/AutomotrizMoraVAGSpecialist/" target="_blank">
								<img alt="Facebook" class="facebook rssBtn" src="'.$servidor.'/imagesApp/facebook.svg" width="35" height="35">
							</a>
						</td>
						<td>
							<a href="https://api.whatsapp.com/send?phone=5215541806214" target="_blank">
								<img alt="Whatsapp" class="whatsapp rssBtn" src="'.$servidor.'/imagesApp/whatsapp.svg" width="35" height="35">
							</a>
						</td>
						<td>
							<a href="https://twitter.com/MoraAutomotriz" target="_blank">
								<img alt="X" class="x rssBtn" src="'.$servidor.'/imagesApp/twitter.svg" width="35" height="35">
							</a>
						</td>
						<td>
							<a href="https://www.instagram.com/automotrizmora/" target="_blank">
								<img alt="Instagram" class="instagram rssBtn" src="'.$servidor.'/imagesApp/instagram.svg" width="35" height="35">
							</a>
						</td>
						<td>
							<a href="contacto@automotrizmora.com" target="_blank">
								<img alt="Email" class="email rssBtn" src="'.$servidor.'/imagesApp/email.svg" width="35" height="35">
							</a>
						</td>
					</tr>
					
				</table>
			</td>
		</tr>
		<tr>
			<td height="50" class="footerTable">
				<table class="footer_aviso" border="0">
					<tr>
						<td>
                            <div>SUCURSAL ÁGUILAS</div>
                        </td>
						<td>
                            <div>SUCURSAL CENTENARIO</div>
                        </td>
					</tr>
					<tr>
						<td>

						<div>
							<a href="tel:5576055940" target="_blank">
								<div class="conTelefono rssBtn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2 minicon">
										<path fill-rule="evenodd" d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z" clip-rule="evenodd" />
									</svg>
									55 7605 5940
								</div>
							</a>
						</div>
						
						<div>
							<a href="tel:5587178827" target="_blank">
								<div class="conTelefono rssBtn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2 minicon">
										<path fill-rule="evenodd" d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z" clip-rule="evenodd" />
									</svg>
									55 8717 8827
								</div>
							</a>
						</div>

                        </td>
						<td>

						<div>
							<a href="tel:5575941185" target="_blank">
								<div class="conTelefono rssBtn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2 minicon">
										<path fill-rule="evenodd" d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z" clip-rule="evenodd" />
									</svg>
									55 7594 1185
								</div>
							</a>
						</div>
						
						<div>
							<a href="tel:5541806214" target="_blank">
								<div class="conTelefono rssBtn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2 minicon">
										<path fill-rule="evenodd" d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z" clip-rule="evenodd" />
									</svg>
									55 4180 6214
								</div>
							</a>
						</div>

                        </td>
					</tr>
				</table>
			
		</tr>
		<tr style="background-color:black;">
			<td class="footerTable" style="padding:20px 0px;"> © '.$year_footer.' Automotriz Mora. Todos los derechos reservados.</td>
		</tr>
	</table>
</footer>';

?>

