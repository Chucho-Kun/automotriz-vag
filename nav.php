<?php 
$servidor = "/nuevowebsite/";
?>
<?php

$enviosODM = 'https://odm.com.mx/envios/dist/';
$puntosdeventa = '/nuevowebsite/puntos-de-venta';
$servicios = '/nuevowebsite/servicios';

echo '<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TD3ZZ93"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
    <div style="text-align: center;background-color: white;">

	<table class="navHeader menuEsc" border="0" width="100%">
		<tr>
			<td style="width:10%"> <a href="https://odm.com.mx/nuevowebsite/"> <img width="200" height="60" alt="logo Omnibus de Mexico" class="logos" src="'.$servidor.'/imagesApp/logoODM.webp" /> </a></td>
			<td > <a href="'.$enviosODM.'" target="_blank" title="envios odm">Envios ODM</a></td>
			<td > <a href="'.$puntosdeventa.'" target="_self">Puntos de Venta</a></td> </td>
			<td > <a href="'.$servicios.'">Servicios</a></td> </td>
			<td > <a href="https://venta.odm.com.mx/FacturacionElectronica/IndexFacturaElec.html" target="_blank">Facturación</a></td> </td>
			<td style="width:30%"> 
        <a href="tel:5551414300"><img width="160" height="44" alt="CETAC" loading="lazy" class="logos" src="'.$servidor.'/imagesApp/cetac.svg?123" /></a> 
        <a target="_blank" href="https://odm.com.mx/app.html"><img width="160" height="44" loading="lazy" alt="APP DE OMNIBUS DE MEXICO" class="logos" src="'.$servidor.'/imagesApp/descarga-la-app.svg" /></a> 
      </td>
		</tr>
	</table>

	<table class="navHeader menuMobil" border="0" width="100%">
		<tr>
			<td width="50%"> <a href="https://odm.com.mx/"> <img width="150" height="44" alt="logo Omnibus de Mexico" class="logos logoMobil_" src="'.$servidor.'/imagesApp/logoODM.webp" /> </a></td>
      <td width="50%">
        <div style="display: flex; gap: 5px;">
          <a href="tel:5551414300"><img width="100" height="50" alt="CETAC" class="logos" src="'.$servidor.'/imagesApp/cetac_.svg?123" /></a>   
          <a target="_blank" href="https://odm.com.mx/app.html"><img width="100" height="50" alt="APP DE OMNIBUS DE MEXICO" class="logos" src="'.$servidor.'/imagesApp/descarga-la-app_.svg?123" /></a> 
        </div>
      </td>
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
  <a href="'.$enviosODM.'" target="_blank" title="envios odm"><p class="subMenu">Envios ODM</p></a>
  <!-- <a href="https://odm.com.mx/cobertura" target="_self"><p class="subMenu">Cobertura</p></a> -->
  <a href="'.$puntosdeventa.'" target="_self"><p class="subMenu">Puntos de Venta</p></a>
  <a href="'.$servicios.'" target="_self"><p class="subMenu">Servicios</p></a>
  <a href="https://venta.odm.com.mx/FacturacionElectronica/IndexFacturaElec.html" target="_blank"><p class="subMenu">Facturación</p></a>
  
    
</div>
<div class="menuBTNflotante"><img alt="menu movil" onclick="menuLateral()" width="45" height="45" class="logos" src="'.$servidor.'/imagesApp/menuMobile.svg" /></div>

</div>';

?>