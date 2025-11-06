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

                            <table>
                                <tr>
                                    <td>
                                        <a href="tel:5576055940" target="_blank">
                                            <div class="conTelefono rssBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="tel:5587178827" target="_blank">
                                            <div class="conTelefono rssBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
						<td>

                            <table>
                                <tr>
                                    <td>
                                        <a href="tel:5575941185" target="_blank">
                                            <div class="conTelefono rssBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="tel:5541806214" target="_blank">
                                            <div class="conTelefono rssBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            </table>

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

