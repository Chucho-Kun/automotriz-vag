<?php 
include('router.php');

$rutasHeader = [
    ["ruta" => "nosotros", "url" => "/nosotros/"],
    ["ruta" => "servicios", "url" => "/servicios/"],
    ["ruta" => "refacciones", "url" => "/refacciones/"],
    ["ruta" => "galeria", "url" => "/galeria/"],
    ["ruta" => "atencion-a-flotillas", "url" => "/atencion-a-flotillas/"]
];

?>
<?php

echo '<nav style="text-align: center;background-color: white;">

	<table class="navHeader menuEsc" border="0" width="100%">
		<tr>
			<td style="width:20%"> <a href="../"> <img width="135" height="60" alt="logo Automotriz Mora" class="logos" src="'.$servidor.'/imagesApp/logo.webp" /> </a></td>
			<td id="'.$rutasHeader[0]["ruta"].'"> <a class="rssBtn spc" href="'.$servidor.$rutasHeader[0]["url"].'" >'.$rutasHeader[0]["ruta"].'</a></td>
			<td id="'.$rutasHeader[1]["ruta"].'"> <a class="rssBtn spc" href="'.$servidor.$rutasHeader[1]["url"].'" >'.$rutasHeader[1]["ruta"].'</a></td> </td>
			<td id="'.$rutasHeader[2]["ruta"].'"> <a class="rssBtn spc" href="'.$servidor.$rutasHeader[2]["url"].'" >'.$rutasHeader[2]["ruta"].'</a></td> </td>
			<td id="'.$rutasHeader[3]["ruta"].'"> <a class="rssBtn spc" href="'.$servidor.$rutasHeader[3]["url"].'" >'.$rutasHeader[3]["ruta"].'</a></td> </td>
			<td id="'.$rutasHeader[4]["ruta"].'"> <a class="rssBtn spc" href="'.$servidor.$rutasHeader[4]["url"].'" >'.$rutasHeader[4]["ruta"].'</a></td> </td>
			
		</tr>
	</table>

	<table class="navHeader menuMobil" border="0" width="100%">
		<tr>
			<td width="20%"> <a href="/"> <img width="135" height="60" alt="logo Automotriz Mora" class="logos logoMobil_" src="'.$servidor.'/imagesApp/logo.webp" /> </a></td>
		</tr>
	</table>

	<!-- menu desplegable lateral en caso de requerirse subpaginas -->
<div class="menuLateral">
  <!-- <table style="width: 80%;">
    <tr>
      <td>
        <div class="categoSec">
          <table><tr><td style="text-align: left;">🏠  Inicio</td></tr></table>
        </div>
        <div class="categoSec">
          <table><tr><td style="text-align: left;">🎦  Nuevos</td></tr></table>
        </div>
        <div class="categoSec">
          <table><tr><td style="text-align: left;">⭐  Populares</td></tr></table>
        </div>
        <div class="categoSec">
          <table><tr><td style="text-align: left;">👍  Favoritos</td></tr></table>
        </div>
        <div class="categoSec">
          <table><tr><td style="text-align: left;">🕐  Historial</td></tr></table>
        </div>
      </td>
    </tr>
  </table> -->
  <a href="'.$servidor.$rutasHeader[0]["url"].'" target="_self"><p class="subMenu">'.$rutasHeader[0]["ruta"].'</p></a>
  <a href="'.$servidor.$rutasHeader[1]["url"].'" target="_self"><p class="subMenu">'.$rutasHeader[1]["ruta"].'</p></a>
  <a href="'.$servidor.$rutasHeader[2]["url"].'" target="_self"><p class="subMenu">'.$rutasHeader[2]["ruta"].'</p></a>
  <a href="'.$servidor.$rutasHeader[3]["url"].'" target="_self"><p class="subMenu">'.$rutasHeader[3]["ruta"].'</p></a>
  <a href="'.$servidor.$rutasHeader[4]["url"].'" target="_self"><p class="subMenu">'.$rutasHeader[4]["ruta"].'</p></a>
  
    
</div>
<div class="menuBTNflotante"><img alt="menu movil" onclick="menuLateral()" width="45" height="45" src="/imagesApp/menuMobile.svg" /></div>

</nav>';

?>