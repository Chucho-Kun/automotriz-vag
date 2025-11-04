<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// $ruta = $_SERVER['REQUEST_URI']; 
// $ruta = $ruta.'/imagesApp/cetac.svg';
?>

<!DOCTYPE html>
<html class="nojs html" lang="es-MX">
<head>
	<meta name="msvalidate.01" content="A68DFB54153C4987F7430A4ECF61D38E" />
    <meta charset="UTF-8">
    <meta name="description"
        content="Omnibus de México compra en línea tus boletos de autobús y obtén 5% de descuento en viaje sencillo y 10% en viaje redondo más meses sin intereses ó pagos diferidos *Aplican restricciones*" />
    <meta name="keywords"
        content="Compra tus boletos de autobús, venta de boletos de autobús, boletos de autobús a guadalajara, boletos de autobús a monterrey, boletos de autobús a torreon, boletos de autobús a Aguascalientes, boletos de autobús a ciudad de mexico, boletos de autobús a Durango, boletos de autobús a Guanajuato, boletos de autobús a jalisco, boletos de autobús a Querétaro, boletos de autobús a Tamaulipas, boletos de autobús a Veracruz, boletos de autobús a Zacatecas">
    <meta name="generator" content="2015.1.2.344" />

    <meta property="og:title" content="Omnibus de México | Boletos de Autobús con Descuento" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://odm.com.mx/imagen/portadaODM.jpg" />
    <meta property="og:image:width" content="526" />
    <meta property="og:image:height" content="275" />
    <meta property="og:url" content="https://odm.com.mx/" />
    <meta property="fb:app_id" content="924618924312226" />
    <meta property="og:description"
        content="Omnibus de México compra en línea tus boletos de autobús y obtén 5% de descuento en viaje sencillo y 10% en viaje redondo más meses sin intereses ó pagos diferidos *Aplican restricciones*" />

	<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />

  	<title>Automotriz Mora</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TD3ZZ93');</script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="<?php echo $ruta; ?>css/style.css?12">
    </head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TD3ZZ93"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript" src="<?php echo $ruta; ?>js/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="<?php echo $ruta; ?>css/select2.css">
<script type="text/javascript" src="<?php echo $ruta; ?>buscador/js/select2.js"></script>

<link rel="stylesheet" href="<?php echo $ruta; ?>css/calendario.css">
<script type="text/javascript" src="<?php echo $ruta; ?>datepicker/jquery-ui.js"></script>


<?php include('componentes/nav.php'); ?>

<div id="" class="superContent">

<script type="text/javascript">

function cargaOrigen(){

    let html = '<option selected="selected" disabled>¿De dónde sales?</option>';
    $.getJSON('rutas/origen.json', function(origenes) {
        for (var i = 0; i < origenes.length; i++) {
            let id = origenes[i].id;
            let val = origenes[i].value;
            html += `<option value=${id}>${val}</option>`;
            let a = origenes.length;let b = i;
            if((a-1) == b){ document.getElementById('origen').innerHTML = html; document.getElementById('origenWeb').innerHTML = html;}
        }

    });
    
}

</script>

<!-- FORMULARIO DE ESCRITORIO -->
<table class="verEsc" width="100%" border="0">
<tr>
          <td width="50%" valign="middle">

          	<table border="0" width="100%">
          		<tr>
          			<td width="50%">
          				<div class="labels anime1"> <label for="origenWeb">ORIGEN</label> </div>        
					    <div class="ladoA origenCont formato">        
					            <select style="opacity: 0;" class="valores origen_" name="destinoWeb" id="origenWeb" style="width: 120px;"></select>
					    </div>
          			</td>
          			<td width="50%">
          				<div class="labels anime1"><label for="destinoWeb">DESTINO</label></div>
				        <div class="ladoB destinoCont formato">
				            
				            <select style="opacity: 0;" class="valores destino_" id="destinoWeb" name="fechSalidaWeb" style="width: 120px;">
				                <option selected="selected" disabled>¿A dónde viajas?</option>
				            </select>
				        </div>
          			</td>
          		</tr>
          	</table>

      </td>
      <td width="25%" valign="middle">

      	<table border="0" width="100%">
          		<tr>
          			<td width="50%">
          				<table border="0" style="border-collapse:collapse;position: relative;left: -15px;">
          					<tr>
          						<td>
          							<div class="labels anime3"> <label for="abreSalidaWeb">FECHA SALIDA</label> </div>
          					</tr>
          				</table>
          				
				        <div class="ladoA salidaCont formato" style="margin-top: -2px;">
				            <input id="abreSalidaWeb" class="valoresB fechSalidaWeb" type="text" value="Salida" name="fechSalida"/>
				        </div>
          			</td>
          			<td width="50%">
          				<table border="0" style="border-collapse:collapse;">
          					<tr>
          						<td>
          							<div class="labels anime3"> <label for="fechRegresoWeb">FECHA REGRESO</label> </div>
                                    <label for="validaCampo_" style="position: absolute;color: white;">x</label>
                                </td>
          						<td>
          							<input id="validaCampo_" class="validaCampo" type="checkbox" name="fechRegresoWeb" checked="checked" />
          						</td>
          					</tr>
          				</table>
          				
				        <div class="ladoB regresoCont formato" style="margin-top: -2px;">
				            <input id="fechRegresoWeb" class="valoresB fechRegresoWeb" type="text" value="Regreso" name="fechRegreso"/>
				        </div>
          			</td>
          		</tr>
          	</table>

      </td>
    	<td width="10%" valign="middle">
    					<div class="labels anime4"> <label for="pasaj">PASAJEROS</label> </div>
				        <div class="salidaCont formato">
				            <input readonly="readonly" id="pasaj" class="valoresC pasaj tips" type="text" value="1 Pasajero" name="pasajeros"/>

				            <div class="tablaPasajeros" style="display:none;">
				            	<table id="pasajerosWeb" border="0" width="100%" style="border-collapse: collapse;"> 
				            		<tr>
				            			<td class="linea-bottom">
				            				<div class="titulo"> <label for="A_">Adultos</label> </div><div class="subTitulo">12 años en adelante</div>
				            			</td>
				            			<td class="linea-bottom">
				            				<select id="A_" name="A" style="color: black;" class="btnPasajeros">
							                    <option value="0">0</option>
							                    <option selected="selected" value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>
							                    <option value="9">9</option>
							                    <option value="10">10</option>
							                </select>
				            			</td>
				            		</tr>
				            		<tr>
				            			<td class="linea-bottom">
				            				<div class="titulo"> <label for="M_">Menores</label> </div><div class="subTitulo">de 6 a 11 años</div>
				            			</td>
				            			<td class="linea-bottom">
				            				<select id="M_" name="M" style="opacity: 1;margin-top:20px;" class="btnPasajeros anime6">
							                    <option selected="selected" value="0">0</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>
							                    <option value="9">9</option>
							                    <option value="10">10</option>
							                </select>
				            			</td>
				            		</tr>
				            		<tr>
				            			<td class="linea-bottom">
				            				<div class="titulo"> <label for="I_">INSEN</label> </div><div class="subTitulo">Mayores de 60 presentar documentacion oficial</div>
				            			</td>
				            			<td class="linea-bottom">
				            				<select id="I_" name="I" style="opacity: 1;margin-top:20px;" class="btnPasajeros anime7">
							                    <option selected="selected" value="0">0</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                </select>
				            			</td>
				            		</tr>
				            		<tr>
				            			<td class="linea-bottom E">
				            				<div class="titulo"> <label for="E_">Estudiantes</label> </div><div class="subTitulo">Presentar credencial vigente</div>
				            			</td>
				            			<td class="linea-bottom E">
							                <select id="E_" name="E" style="opacity: 1;margin-top:20px;" class="btnPasajeros anime8 E">
							                    <option selected="selected" value="0">0</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>
							                </select>
				            			</td>
				            		</tr>
				            		<tr>
				            			<td class="linea-bottom P">
				            				<div class="titulo"> <label for="P_">Profesores</label> </div><div class="subTitulo">Presentar credencial vigente</div>
				            			</td>
				            			<td class="linea-bottom P">
				            				<select id="P_" name="P" style="opacity: 1;margin-top:20px;" class="btnPasajeros anime9 P">
							                    <option selected="selected" value="0">0</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                </select>
				            			</td>
				            		</tr>
				            	</table>
				            </div>
				        </div>
    	</td>
    <td rowspan="2" width="50%" valign="middle">

        <table height="150" border="0">
            <tr>
                <td> <div onclick="validar('web')" class="btnComprar comprar anime5">Comprar</div> </td>
            </tr>
            <tr>
                <td>
                    <a href="https://venta.odm.com.mx/odm/intercambio/filtro.aspx" target="blank_">
                        <div class="btnIntercambiar anime6">
                            <div>Intercambiar</div>    
                            <div>Boleto Abierto</div>   
                        </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td> 
                    <div class="info anime7" onclick="info()" style="display: flex; align-items: center; gap:2px;">
                        <div style="width: 20px;height: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                        </div>
                        <div>¿Qué es intercambio?</div>
                    </div> 
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
	<td colspan="3">
		
		<div>
            <div class="carrusel" style="background-color:white;">
			        <div class="carrusel-contenedor carruselEsc">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/210012.svg" loading="lazy" alt="BBVA">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110014.svg" loading="lazy" alt="Santander">
			            <!-- <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110021.svg" loading="lazy" alt="HSBC"> -->
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/falabella.svg" alt="Falabella">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110127.svg" loading="lazy" alt="Banco Azteca">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110058.svg" loading="lazy" alt="Banregio">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110030.svg" loading="lazy" alt="Banbajio">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110072.svg" loading="lazy" alt="Banorte">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110044.svg" loading="lazy" alt="Scotiabank">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/116014.svg" loading="lazy" alt="Liverpool">

			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/210012.svg" loading="lazy" alt="BBVA">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110014.svg" loading="lazy" alt="Santander">
			            <!-- <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110021.svg" loading="lazy" alt="HSBC"> -->
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/falabella.svg" loading="lazy" alt="Falabella">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110127.svg" loading="lazy" alt="Banco Azteca">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110058.svg" loading="lazy" alt="Banregio">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110030.svg" loading="lazy" alt="Banbajio">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110072.svg" loading="lazy" alt="Banorte">
                        <img width="50" src="https://odm.com.mx/formatoAPI/bancos/110044.svg" loading="lazy" alt="Scotiabank">
			            <img width="50" src="https://odm.com.mx/formatoAPI/bancos/116014.svg" loading="lazy" alt="Liverpool">
			        </div>
			    </div>
        </div>
        <div style="text-align:left;">
            <img width="737" src="imagesApp/banner-promos.svg" loading="lazy" fetchpriority=high alt="promociones">
        </div>

	</td>
</tr>

</table>

<!-- FORMULARIO DE MOBIL -->
<table class="verMobil" width="100%" border="0" style="max-width: 400px;background-color: white;border-radius: 12px;opacity: 1;margin: 0px 5px;">
  <tbody>

    <tr>
      <td width="50%" valign="middle">

    <div class="labels anime1"> <label for="origen">ORIGEN</label> </div>        
    <div class="ladoA origenCont formato">        
            <select style="opacity: 0;" class="valores origen_" name="destino" id="origen"></select>
    </div>

      </td>
      <td width="50%" valign="middle">
        
<div class="labels anime1"> <label for="destino">DESTINO</label> </div>
        <div class="ladoB destinoCont formato">
            
            <select style="opacity: 0;" class="valores destino_" id="destino" name="fechSalida">
                <option selected="selected" disabled>¿A dónde viajas?</option>
                
            </select>
        </div>

      </td>
    </tr>

    <tr>
      <td width="50%" valign="middle">
        <table border="0" style="border-collapse:collapse;">
          					<tr>
          						<td><div class="labels anime3" style="margin-top: 4px;margin-right:105px;"> <label for="abreSalida">FECHA SALIDA</label> </div></td>
          					</tr>
          				</table>
        <div class="ladoA salidaCont formato" style="height: 37px;">
            

           
            <input id="abreSalida" class="valoresB fechSalida" type="text" value="Salida" name="fechSalida"/>
        </div>
      </td>
      <td width="50%" valign="middle">
        <table border="0" style="border-collapse:collapse;">
          					<tr>
          						<td>
                                      <div class="labels anime3" style="margin-top: 4px;margin-right:42px;"> <label for="fechRegreso">FECHA REGRESO</label> </div>
                                      <label for="validaCampo" style="position: absolute;color: white;">x</label>
                                </td>
          						<td>
          							<input id="validaCampo" class="validaCampo" type="checkbox" name="fechRegreso" checked="checked" />
          						</td>
          					</tr>
          				</table>
        <div class="ladoB regresoCont formato" style="height: 37px;">
            <input id="fechRegreso" class="valoresB fechRegreso" type="text" value="Regreso" name="fechRegreso"/>
        </div>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center" valign="middle">
        
        <div id="pasajerosMobil" class="" style="padding: 0px 0px 10px 0px;margin: 0px;text-align: center;">
            <table class="pasaj anime5" width="100%" border="0" style="opacity: 1;margin-top:20px;"><tbody>
            <tr>
            <td align="center" valign="middle"> <label for="A">Adultos</label> </td>
            </tr>
            <tr>
            <td align="center" valign="middle">
                <select id="A" name="A" style="color: black;" class="btnPasajeros">
                    <option value="0">0</option>
                    <option selected="selected" value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td>
            </tr>
            </tbody></table>

            <table class="pasaj anime6" width="100%" border="0" style="opacity: 1;margin-top:20px;"><tbody>
            <tr>
            <td align="center" valign="M"> <label for="M">Menores</label></td>
            </tr>
            <tr>
            <td align="center" valign="middle">
                <select id="M" name="M" style="opacity: 0;margin-top:20px;" class="btnPasajeros anime6">
                    <option selected="selected" value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td>
            </tr>
            </tbody></table>

            <table class="pasaj anime7" width="100%" border="0" style="opacity: 1;margin-top:20px;"><tbody>
            <tr>
            <td align="center" valign="middle"> <label for="I">INSEN</label> </td>
            </tr>
            <tr>
            <td align="center" valign="middle">
                <select id="I" name="I" style="opacity: 0;margin-top:20px;" class="btnPasajeros anime7">
                    <option selected="selected" value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            </tr>
            </tbody></table>

            <table class="pasaj anime8 E" width="100%" border="0" style="opacity: 1;margin-top:20px;"><tbody>
            <tr>
            <td align="center" class="E" valign="middle"> <label for="E">Estudiantes</label> </td>
            </tr>
            <tr>
            <td align="center" valign="middle">
                <select id="E" name="E" style="opacity: 0;margin-top:20px;" class="btnPasajeros anime8 E">
                    <option selected="selected" value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </td>
            </tr>
            </tbody></table>

            <table class="pasaj anime9 P" width="100%" border="0" style="opacity: 1;margin-top:20px;"><tbody>
            <tr>
            <td align="center" valign="middle"> <label for="P">Profesores</label> </td>
            </tr>
            <tr>
            <td align="center" valign="middle">
                <select id="P" name="P" style="opacity: 0;margin-top:20px;" class="btnPasajeros anime9 P">
                    <option selected="selected" value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </td>
            </tr>
            </tbody></table>
            
        </div>
      </td>
    </tr>
    <td colspan="2" valign="middle">
        <div style="width: 100%;text-align: center;">
            <div class="tips anime4" style="font-family: Arial;width: 90%;background-color: #efefef;display: inline-block;padding: 15px;font-size: 14px;margin-top: 2px;opacity: 0;"></div>
        </div>
    </td>
    <tr>
        <td colspan="2">
                     
                <div style="text-align:center;">
                      <div class="carrusel-mobil" style="display:inline-table;">

                      <table style="border-collapse:collapse;">
                        <tr>
                            <td>
                                <div class="carrusel-contenedor-mobil carruselMob">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/210012.svg" loading="lazy" alt="BBVA">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110014.svg" loading="lazy" alt="Santander">
                                    <!-- <img src="https://odm.com.mx/formatoAPI/bancos/110021.svg" loading="lazy" alt="HSBC"> -->
                                    <img src="https://odm.com.mx/formatoAPI/bancos/falabella.svg" loading="lazy" alt="Falabella">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110127.svg" loading="lazy" alt="Banco Azteca">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110058.svg" loading="lazy" alt="Banregio">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110030.svg" loading="lazy" alt="Banbajio">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110072.svg" loading="lazy" alt="Banorte">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110044.svg" loading="lazy" alt="Scotiabank">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/116014.svg" loading="lazy" alt="Liverpool">

                                    <img src="https://odm.com.mx/formatoAPI/bancos/210012.svg" loading="lazy" alt="BBVA">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110014.svg" loading="lazy" alt="Santander">
                                    <!-- <img src="https://odm.com.mx/formatoAPI/bancos/110021.svg" loading="lazy" alt="HSBC"> -->
                                    <img src="https://odm.com.mx/formatoAPI/bancos/falabella.svg" loading="lazy" alt="Falabella">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110127.svg" loading="lazy" alt="Banco Azteca">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110058.svg" loading="lazy" alt="Banregio">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110030.svg" loading="lazy" alt="Banbajio">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110072.svg" loading="lazy" alt="Banorte">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/110044.svg" loading="lazy" alt="Scotiabank">
                                    <img src="https://odm.com.mx/formatoAPI/bancos/116014.svg" loading="lazy" alt="Liverpool">
                                </div>
                            </td>
                        </tr>
                      </table>
                        
                    </div>
                </div>
          
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div> <img width="300" src="imagesApp/banner-promos-mobil.svg" fetchpriority="high" alt="promociones"> </div>
        </td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle">
        <div onclick="validar('mobil')" class="btnComprar comprar anime5">Comprar</div>
        <a href="https://venta.odm.com.mx/odm/intercambio/filtro.aspx" target="blank_">
            <div class="btnIntercambiar anime11">
                <div>Intercambiar</div>    
                <div>Boleto Abierto</div>    
            </div>
        </a>
      </td>
    </tr>
    <tr>
    	<td colspan="2"><div class="info anime6" onclick="info()" >¿Qué es intercambio?</div></td>
    </tr>
    <tr>
    	<td colspan="2">

    	</td>
    </tr>
  </tbody>
</table>


<!-- INICIA SLIDER DE BANNERS -->
<div class="slider" style="position: relative;margin-top:25px">
    <div>
        <iframe class="iframeMovil" title="slider principal" src="" loading="lazy" scrolling="no" frameborder="0" style="width: 100%;max-width:1000px;height:490px;"></iframe>
    </div>
</div>

<!-- TERMINA SLIDER DE BANNERS -->

<form class="fichaViaje" method="post" action="https://venta.odm.com.mx/odm/PASO1/paso1.aspx" name="fichaViaje">

	<input type="hidden" name="origenCode" value="">
	<input type="hidden" name="destinoCode" value="">
	<input type="hidden" name="fechSalida" value="">
	<input type="hidden" name="fechRegreso" value="">

	<input type="hidden" name="adultos" class="adultos" value="">
	<input type="hidden" name="menores" class="menores" value="">
	<input type="hidden" name="senectud" class="senectud" value="">
	<input type="hidden" name="estudiantes" class="estudiantes" value="">
	<input type="hidden" name="profesores" class="profesores" value="">

	<input type="hidden" name="origenText" value="">
	<input type="hidden" name="destinoText" value="">
	
	<input type="hidden" name="viajeredondo" value="1">

	<input type="hidden" name="version" value="">

	<input type="hidden" name="marca" value="ODM">
	<input type="hidden" name="promociones" value="1">

	<input type="hidden" name="reservacionText" value="_">
</form>


</div>

<div style="background-color:white;text-align: center;">

    <div>
    	<table width="100%">
    		<tr>
			<td>
                
                <div>
                    <iframe class="sliderMarcas" title="slider marcas" src="" loading="lazy" scrolling="no" frameborder="0" style="width: 100%;max-width:1000px;height:350px;"></iframe>
                </div>
			
            </td>
		</tr>
    	</table>
    </div>
	<div>
<script>
    $("#noresteLink").click(function(e) {
            e.preventDefault();
            window.open("https://noreste.com.mx/", "_blank");
        });
</script>

	<div class="reservacionesTxt">Lo mejor de nuestros destinos</div>

    <div id="articulos"> </div>

</div>
<div>
	<table>
		<tr>
			<td><div class="reservacionesTxt">Paga tus reservaciones en:</div></td>
		</tr>
		<tr>
			<td>
				<img class="imgReservaciones" width="100%" loading="lazy" style="max-width: 820px;display: inline-block;padding: 15px 0px;" alt="cadenas participantes pago de reservaciones" src="">
			</td>
		</tr>
	</table>
</div>

<?php include('componentes/footer.php'); ?>

</div>

<script type="text/javascript">
    cargaOrigen();
</script>

<script>
var medida = 0.99;
function ajustaAlturaB(){
let ancho = $(window).width();
    if( ancho < 540 ){
        let nuevoAlto = ancho * medida;
        let nuevoAlto_ = nuevoAlto - 110;
       $('.iframeMovil').css('height',nuevoAlto+'px');
       $('.sliderMarcas').css('height',nuevoAlto_+'px');
    }
}

$(window).resize(function(event){ ajustaAlturaB(); });
ajustaAlturaB();
</script>

<script type="text/javascript">
 
// INICIA LOS CAMPOS DEL CUADRO DE VENTA
	$("#origen").select2();
  	$("#destino").select2();
  	$("#origenWeb").select2();
  	$("#destinoWeb").select2();

// CONTROL DE DESCUENTOS EN EVENTO DE AGUASCALIENTES
function antesdeFecha(fecha1, fecha2){let [dia1, mes1, año1] = fecha1.split('/').map(Number);let fechaObj1 = new Date(año1, mes1 - 1, dia1);let [dia2, mes2, año2] = fecha2.split('/').map(Number);let fechaObj2 = new Date(año2, mes2 - 1, dia2);return fechaObj1 <= fechaObj2;}

const fechaLimite = '12/05/2025';

    let origen_ = false;
    let destino_ = false;
    let fechaSalida = '<?php echo date("d/m/Y");?>';
    let peticion = ['AGU','PAG','AGU2'];

    function descuentosControl() {
       
        let resp = antesdeFecha(fechaSalida,fechaLimite);
        
        //if(resp){
            if( origen_ || destino_){

                    if(resp){
                        $('.E,.P').fadeIn();
                    }else{
                        resetDesc();
                    }
                

            }
        //}
        
    }

    function resetDesc(){

        let resp = antesdeFecha(fechaSalida,fechaLimite);

        $('.E,.P').fadeOut();
        $('#pasajerosMobil').find('#E').val('0'); $('#pasajerosWeb').find('#E').val('0');
        $('#pasajerosMobil').find('#P').val('0'); $('#pasajerosWeb').find('#P').val('0');

            if(origen_ || destino_){
                if(!resp){
                    miAlert( `Los descuentos de Estudiante y Profesor solo aplicarán hasta el ${fechaLimite}`);
                }
                
            }
        
        
    }

//ORIGEN
let ori_,dest_;
$('.origen_').change(function(event){

let idSelect = $(this).attr('id');
let destinoSelect = $(this).attr('name');

var nom = $(this).val();ori_ = nom;
origen_ = peticion.includes(nom);
//descuentosControl();
var OriEleg = $('#'+idSelect+' option:selected').text();

$('input[name="origenText"]').attr('value', OriEleg);

//console.warn("origenText",OriEleg);

$("#"+destinoSelect).next('span').find('#select2-'+destinoSelect+'-container').text('Buscando destinos...').css('color', 'gray');
	
//setTimeout(function(){
			$.getJSON('rutas/destinos/'+nom+'.json', function(json, textStatus) {

			$("#"+destinoSelect).next('span').find('#select2-'+destinoSelect+'-container').css('color', 'black');
		    $('#'+destinoSelect).html('<option selected="selected" disabled>Seleccione un destino</option>');
			    $.each(json, function(i, val){
			      var id = json[i].id ;
			      var valor = json[i].value ;
			      $('#'+destinoSelect).append('<option value='+id+'>'+valor+'</option>');
			    });
			 });

	//},300);


});

//DESTINO

$('.destino_').change(function(event){

let idSelect = $(this).attr('id');
let fechaSelect = $(this).attr('name');
//console.log({fechaSelect});

var nom = $(this).val();dest_=nom;
destino_ = peticion.includes(nom);
//descuentosControl();
var ciudad = $('#'+idSelect+' option:selected').text();

$('input[name="destinoText"]').attr('value', ciudad);

//console.warn("destinoText",ciudad);

setTimeout(function(){$("."+fechaSelect).focus();},500);

let tramo = ori_ + '-' + dest_;
viajesSencillos(tramo);

});


</script>
<script type="text/javascript">
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '<Ant',
 nextText: 'Sig>',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);

    function hideKeyboard(element) {
    element.attr('readonly', 'readonly');
    //element.attr('disabled', 'true'); 
}

var fechSal = $('.fechSalida');
var fechReg = $('.fechRegreso');
var fechSalWeb = $('.fechSalidaWeb');
var fechRegWeb = $('.fechRegresoWeb');
var orig = $('#origen');
var dest = $('#destino');

fechSal.datepicker({minDate:"+0D",duration:"normal",showAnim:"drop",showOptions:{direction:"down"}});
fechReg.datepicker({minDate:"+0D",duration:"normal",showAnim:"drop",showOptions:{direction:"down"}});
fechSalWeb.datepicker({minDate:"+0D",duration:"normal",showAnim:"drop",showOptions:{direction:"down"}});
fechRegWeb.datepicker({minDate:"+0D",duration:"normal",showAnim:"drop",showOptions:{direction:"down"}});
hideKeyboard(fechSal);
hideKeyboard(fechReg);
hideKeyboard(fechSalWeb);
hideKeyboard(fechRegWeb);
hideKeyboard(orig);
hideKeyboard(dest);

var textfecha = '_';textfecha2 = '_';

fechSal.on("change",function(){var selected = $(this).val();textfecha = selected;});
fechReg.on("change",function(){var selected = $(this).val();textfecha2 = selected;});
fechSalWeb.on("change",function(){var selected = $(this).val();textfecha = selected;});
fechRegWeb.on("change",function(){var selected = $(this).val();textfecha2 = selected;});
</script>
<script type="text/javascript">


let bolsaPasajeros = [{"pasaj":"A","total":"1"},{"pasaj":"M","total":"0"},{"pasaj":"I","total":"0"},{"pasaj":"E","total":"0"},{"pasaj":"P","total":"0"}];
function sumarTotales(array) {
    return array.reduce((suma, item) => {
        return suma + parseInt(item.total, 10);
    }, 0);
}
function resumenPasajeros(tipo, total){

	for (var i = 0; i < bolsaPasajeros.length; i++) {

		if(bolsaPasajeros[i].pasaj == tipo){ bolsaPasajeros[i].total = total; }
		
	}

	let totalPasajeros = sumarTotales(bolsaPasajeros);
	let pronom = (totalPasajeros == 1) ? 'Pasajero' : 'Pasajeros' ;
	let linea = totalPasajeros+' '+pronom;
	$('#pasaj').val(linea);
}


var primero = '<b>Adultos:</b> 12 años en adelante';
$('.tips').html(primero);
$('.btnPasajeros').change(function(event){

var eleg = $(this).val();
var miId = $(this).attr('name');

resumenPasajeros(miId, eleg);

var color = (eleg == "0")? 'gray': 'black';
$(this).css('color', color);



if(eleg !== "0"){
	switch(miId){
    case "A":
      descripcion = "<b>Adultos:</b> 12 años en adelante";
      break;
    case "M":
      descripcion = "<b>Menores:</b> de 6 a 11 años";
      break;
    case "I":
      descripcion = "<b>Senectud:</b> Mayores de 60 presentar documentacion oficial";
      break;
    case "E":
      descripcion = "<b>Estudiantes:</b> Presentar credencial vigente";
      break;
    case "P":
      descripcion = "<b>Profesores:</b> Presentar credencial vigente";
      break;
      }
}else{descripcion = primero}

$('.tips').html(descripcion);

});

</script>
<script type="text/javascript">
setTimeout(function(){$('.anime1').animate({'opacity': '1','margin-top': '0'},500);},800);
setTimeout(function(){$('.anime2').animate({'opacity': '1','margin-top': '0'},500);},1000);
setTimeout(function(){$('.anime3').animate({'opacity': '1','margin-top': '0'},500);},1200);
setTimeout(function(){$('.anime4').animate({'opacity': '1','margin-top': '0'},500);},1400);
setTimeout(function(){$('.anime5').animate({'opacity': '1','margin-top': '0'},500);},1600);
setTimeout(function(){$('.anime6').animate({'opacity': '1','margin-top': '0'},500);},1800);
setTimeout(function(){$('.anime7').animate({'opacity': '1','margin-top': '0'},500);},2000);
setTimeout(function(){$('.anime8').animate({'opacity': '1','margin-top': '0'},500);},2200);
setTimeout(function(){$('.anime9').animate({'opacity': '1','margin-top': '0'},500);},2400);
setTimeout(function(){$('.anime10').animate({'opacity': '1'},500);},2800);
setTimeout(function(){$('.anime11').animate({'opacity': '1'},500);},3200);
</script>
<script type="text/javascript">

function msn(msn){let msnFinal = (!msn) ? 'Comprar/Reservar' : 'Enviando...' ;$('.comprar').html(msnFinal);}

function validar(tipo){

  $('.tablaPasajeros').fadeOut(); msn(true);

  $('input[name="fechasalida"]').attr('value', textfecha);
  $('input[name="fecharegreso"]').attr('value', textfecha2);

  let tipoOrigen = (tipo == 'web') ? 'origenWeb' : 'origen' ;
  let tipoDestino = (tipo == 'web') ? 'destinoWeb' : 'destino' ;
  let cont = (tipo == 'web') ? 'pasajerosWeb' : 'pasajerosMobil' ;
  
  var origenCode = $('#'+tipoOrigen).val();
  var destinoCode = $('#'+tipoDestino).val();

  var adultos = $('#'+cont).find('[name="A"]').val();
  var menores = $('#'+cont).find('[name="M"]').val();
  var senectud = $('#'+cont).find('[name="I"]').val();
  var estudiantes = $('#'+cont).find('[name="E"]').val();
  var profesores = $('#'+cont).find('[name="P"]').val();

  var pasajTotal = (parseInt(adultos)+parseInt(menores)+parseInt(senectud)+parseInt(estudiantes)+parseInt(profesores));

  if(textfecha2 !== "_"){

  var dia1 = textfecha.split("/");
  var dia2 = textfecha2.split("/");
  var d1 = parseInt(dia1[0]);var d2 = parseInt(dia2[0]);var m1 = parseInt(dia1[1]);var m2 = parseInt(dia2[1]);var y1 = parseInt(dia1[2]);var y2 = parseInt(dia2[2]);var mescorrecto = true;

  if(y1 < y2){mescorrecto = true;
  }else if(y1 == y2){if(m1 > m2){mescorrecto = false;
}else if(m1 == m2){if(d1 > d2){mescorrecto = false; }
}else{if(d1 > d2){}else{ mescorrecto = true;}
}}else{mescorrecto = false;}
 }else{
  mescorrecto = true;
 }

if(origenCode == undefined || origenCode == '¿De dónde sales?'){ miAlert("Favor de seleccionar un origen");return false ; } 
if(destinoCode == undefined){ miAlert("Favor de seleccionar un Destino");return false ; } 
if(textfecha == "_"){miAlert("Favor de seleccionar una fecha de Salida");return false;}
if(origenCode !== undefined && origenCode == destinoCode){ miAlert("El Origen y destino es el mismo"); return false ; } 

if(textfecha2 === "FECHA ABIERTA"){mescorrecto = true;};
if(mescorrecto == false){ miAlert("La fecha de regreso es anterior a la de salida") ; return false ; }

/// VALIDACION PARA MENORES DE EDAD Y ESTUDIANTE  
if((adultos==0)&&(senectud==0)&&(profesores==0)&&(estudiantes==0)&&(menores>0)){miAlert('No pueden viajar Menores sin un Adulto');return false;} 

//No se puede hacer una compra de mas de 10 pasajeros//---
    if(pasajTotal > 10){ miAlert('No se puede hacer una compra de más de 10 pasajeros'); return false ; }
    if(pasajTotal == 0){ miAlert('Debe seleccionar al menos un pasajero'); return false ; } 

$('input[name="origenCode"]').attr('value', origenCode);
$('input[name="destinoCode"]').attr('value', destinoCode);

$('input[name="fechSalida"]').attr('value', textfecha);
$('input[name="fechRegreso"]').attr('value', textfecha2);

$('input[name="adultos"]').attr('value', adultos);
$('input[name="menores"]').attr('value', menores);
$('input[name="senectud"]').attr('value', senectud);
$('input[name="estudiantes"]').attr('value', estudiantes);
$('input[name="profesores"]').attr('value', profesores);


if((adultos == 0) && (senectud == 0)  && (profesores == 0) && (estudiantes > 0) && (menores == 0)){ 
	return avisoEstudiante(estudiantes);
}else if((adultos == 0) && (senectud == 0)  && (profesores == 0) && (estudiantes > 0) && (menores > 0)){ 
	return avisoEstudiante(estudiantes);
}

$('.fichaViaje').submit();

//RESUMEN DE DATOS ENVIADOS
let origenText = $('input[name="origenText"]').attr('value');
let destinoText = $('input[name="destinoText"]').attr('value');

let variablesEnviadas = {origenText,origenCode,destinoText,destinoCode,textfecha,textfecha2,adultos,menores,senectud,estudiantes,profesores};

	console.table(variablesEnviadas);

  return true;
} 

// function miAlert(text){alert(text);msn(false);}


   var anchoversion = $( window ).width();
   if(anchoversion <= 401){
setTimeout(function(){
      $('input[name="version"]').attr('value','telefono');
    },500);
   }else if((anchoversion >= 402) && (anchoversion <= 800)){

setTimeout(function(){
      $('input[name="version"]').attr('value','tableta');
    },500);
   }else if(anchoversion >= 801){
setTimeout(function(){
      $('input[name="version"]').attr('value','escritorio');
    },500);
   }

var actual;

$('.validaCampo').click(function(event) {

let tipoRegreso = $(this).attr('name');

console.log({tipoRegreso});

 if($(this).prop('checked')){

  }else{
   
  	$('.'+tipoRegreso).val('Regreso');
  	textfecha2 = "_";
  }

});
</script>

<script type="text/javascript">
    //boleto abierto
    $('html').on('focusin', '#fechRegreso', function(event) {
        event.preventDefault();
        //console.log('detectado cambio');
        setTimeout(function() {


            $('.ui-datepicker-calendar').append(`<div style="background-color: white;width: 100%;position: absolute;right: 0px;border-radius: 0px 0px 8px 8px;">
            <table border="0">
        	<tbody><tr>
                <td style="text-align: center;">
                    <div id="boletoAbierto" style="font-weight: bold;font-size: 11px;margin-top: 0px;position: relative;background-color: #ad1c31;border-radius: 5px;cursor: pointer;text-align: center;padding: 12px 0px;color: white;width: 120px;display: inline-block;">Boleto Abierto</div>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;"><div style="color: #043366;font-weight: bold;font-size: 11px;">¿No conoces tu fecha de regreso?</div><div style="color: #043366;font-weight: bold;font-size: 11px;">Puedes dejar tu boleto abierto</div>
                </td>
             </tr>
        </tbody></table></div>s`);
        }, 100)

    });

    $('html').on('click', '#boletoAbierto', function(event) {
        event.preventDefault();

        let elegProf = $('#P').val();
        let elegEst = $('#E').val();

        if (elegProf !== '0' || elegEst !== '0') {
            miAlert('El boleto abierto solo se aplicará para Adulto, Menor e INAPAM');
        } else {
            var title = "Boleto Abierto:";
            var text = "Ahora usted cuenta con 180 días naturales a partir de su fecha de compra para intercambiar su boleto abierto.";
            info( title , text );
        }

        $(".fechRegreso").datepicker("hide");
        $(".fechRegresoWeb").datepicker("hide");
        $('.E').css('opacity', '0.5');
        $('.E').prop('disabled', true);
        $('.E').val('0');
        $('.P').css('opacity', '0.5');
        $('.P').prop('disabled', true);
        $('.P').val('0');
        $('input[name="fechRegreso"]').val('FECHA ABIERTA').prop('checked', true);$('input[name="fechRegresoWeb"]').val('FECHA ABIERTA').prop('checked', true);

        textfecha2 = 'FECHA ABIERTA';
        resumenPasajeros('E', '0');
		resumenPasajeros('P', '0');

        //$('.E').val();

    });

     $('.ritema').click(function(event) {

        let status = $(this).is(':checked');
        console.log({status});

    });


    $('.fechSalidaWeb').change(function(event) {
        let fecha = $(this).val();
        fechaSalida = fecha;
        //descuentosControl();
        $('input[name="fechSalidaWeb"]').val(fecha).prop('checked', true);
        $('input[name="fechSalida"]').val(fecha);

    });

    $('#fechRegreso').change(function(event) {
        let fecha = $('#fechRegreso').val()
        $('input[name="fechRegreso"]').val(fecha).prop('checked', true);
        $('input[name="fechRegresoWeb"]').val(fecha).prop('checked', true); 
    });

    $('input[name="fechRegreso"]').change(function(event) {
        let valor = $(this).val();
        if (valor.includes('/')) {
            $('.E').css('opacity', '1');
            $('.E').prop('disabled', false);
            $('.P').css('opacity', '1');
            $('.P').prop('disabled', false);
        }
    });

    $('#pasaj').click(function(event) {
    	$('.tablaPasajeros').fadeToggle();
    });
    $('.ladoA, .ladoB').click(function(event) {
    	$('.tablaPasajeros').fadeOut();
    });


    function responsive2(){
    	let anchoVentana = $(window).width();
    	
    	let f = (anchoVentana < 415) ? $('.verMobil').css('width', '300px') : $('.verMobil').css('width', '100%');
        let x = ( anchoVentana >= 1000 ) ? {clase:'.iframeEscritorio',url:'sliders/sliderPrincipal.php'} : {clase:'.iframeMovil',url:'sliders/sliderPrincipal.php'} ;
        //$(x.clase).attr('src',x.url);
    	if(anchoVentana < 415){
    		$('.destino_').next('span').css('width', '160px');
            $('.ladoA').css({'width':'180px', 'right': '0px'});
            $('.ladoB').css({'width':'160px', 'right': '6px','position':'relative','margin-right':'-5px'});
            $('.anime3').css('margin-right','15px');
            $('input#abreSalida').css('right','-4px');
        }
    	
    }
    $(window).resize(function(event) { responsive2() });
    responsive2();

    function viajesSencillos(tramo) {

    	//console.log({tramo});

        let origRaw = tramo.split('-');
        let orig = origRaw[0];
        let mensajeFinal ='Estimado Cliente, le informamos que por el momento no contamos con viaje de regreso para este viaje. Pero puede continuar con su compra en viaje sencillo. Gracias por su preferencia.';

        let soloSencillos = ['NOG-AHM', 'HET-AHM', 'HMO-AHM', 'TNY-APV', 'CLO-APV', 'CAC-APV', 'SAC-APV', 'MZT-APV',
            'FRE-AEG', 'ZCL-AEG', 'CLO-AEG', 'AGU-AEG', 'PAG-AEG', 'TNY-AEG', 'CGZ-AEG', 'MAM-AMON', 'REX-AMON',
            'GOP-AMON', 'TRC-AMON'
        ];
        let contador = 0;

        for (var i = 0; i < soloSencillos.length; i++) {
            let a = soloSencillos[i];
            if (tramo == a) {
                contador++;
            }
        }

        if (orig == 'SCA' || orig == 'PAG' || orig == 'AGU2') {
            /*$('#viajeRegreso').fadeOut(function() {
                $('#fecharegreso').val('_');
                alert(mensajeFinal);
            });*/miAlert(mensajeFinal);
        } else {
            if (!contador) {
                /*$('#viajeRegreso').fadeIn();*/
            } else {
                /*$('#viajeRegreso').fadeOut(function() {
                    $('#fecharegreso').val('_');
                    alert(mensajeFinal);
                });*/miAlert(mensajeFinal);
            }
        }

    }


    $(document).ready(function() {
        let currentIndex = 0;
        const slides = $(".slide-cintillo");
        const slideCount = slides.length;

        function showNextSlide() {
            $(slides[currentIndex]).fadeOut(1000, function() {

                currentIndex = (currentIndex + 1) % slideCount;

                $(slides[currentIndex]).fadeIn(1000);
            });
        }
        setInterval(showNextSlide, 5000);
    });

    function preventaVacacional(status){if(!status){$('.E').css('display', 'none');$('.P').css('display', 'none');}}

    preventaVacacional(true);
</script>

<script>

	//control carrusel de logos de banco 

$(document).ready(function () {

    function animarCarrusel( selector ){
        const $carrusel = $(selector); // Contenedor de logos
        const $imagenes = $(`${selector} img`);
        const logoWidth = $imagenes.outerWidth(true);
        const totalLogos = $imagenes.length;
        let currentIndex = 0;

        setInterval(() => {
            currentIndex++;
            if (currentIndex > totalLogos - 8) {
                //$carrusel.animate({ scrollLeft: 0 }, 15000); // Suaviza el reinicio al principio del carrusel
            } else {
                const offset = currentIndex * logoWidth;
                $carrusel.animate({ scrollLeft: offset }, 500);
                $('.carruselEsc img').animate({ scrollLeft: 500 }, 500);
            }
        }, 3000);
    }

    animarCarrusel( '.carruselEsc' );
    animarCarrusel( '.carruselMob' );
});

</script>

<link href="<?php echo $ruta; ?>css/sweetalert2.min.css" rel="stylesheet">
<script src="<?php echo $ruta; ?>js/sweetalert2.all.min.js"></script>
<script>
// SECCIION DE SWEET ALERT 2
function miAlert( text ){
    Swal.fire({
        text,
        icon: "warning",
        confirmButtonColor: "#003368"
    });
    msn(false);
}

function avisoEstudiante(numero){
    var text = (numero > 1)? '¿Los estudiantes son mayores de edad?' : '¿El estudiante es mayor de edad?' ;
    Swal.fire({
        text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#003368",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, es mayor de edad",
        cancelButtonText:"No, cancelar"
    }).then((result) => {
        
        if(result.isConfirmed){
            setTimeout(function(){ $('.fichaViaje').submit(); },800);
        }else{
            msn(false);
        }
    }); 
}

function info( title="¿Qué es intercambio?", text="Ahora ya puedes comprar tus boletos de regreso con fecha abierta y confirmarla después (aplican restricciones)"){
    Swal.fire({
        title,
        text,
        icon: "info",
        confirmButtonColor: "#003368"
    });
}
</script>

<script type="text/javascript">

	/// CONTROL BLOG FEED
    // RUTA BLOG FEED JSON https://odmblog.com.mx/wp-json/wp/v2/posts

        async function cargarArticulos() {
            //console.log('buscando articulos...');

            let html = document.getElementById("articulos");
            html.innerHTML = '<img alt="loader" class="loader" width="80" height="80" src="imagesApp/working.svg" style="display: inline-block;margin-top: 80px;">';

            try {
                
                fetch("feed/blog.json", {method: "GET",headers: { "Content-Type": "application/json" }
                    })
                    .then( resp => { return resp.json() })
                    .then( blog => {

                        const articulos = document.getElementById("articulos");
                        const li = document.createElement('div'); li.classList.add('resultado');

                        for (var i = 0; i < 8; i++) {

                            let title = blog[i].title.rendered;

                            let portadaRaw = blog[i].jetpack_featured_media_url;
                            let portada_ = portadaRaw.split('?');
                            let portada = portada_[0]+"?fit=300%2C799&ssl=1";

                            let descRaw = blog[i].excerpt.rendered;
                            let desc = descRaw.substr(0,173);

                            let categoriaRaw = blog[i].class_list;
                            let categoria_ = categoriaRaw.at(-1);
                            let catego = categoria_.split('-');
                            let cat = catego[1];

                            let url = blog[i].link;
                        
                            li.innerHTML += `<a href="${url}" target="blank_">
                                                    <table class="tablaRes" width="300" border="0">
                                                    <tbody>
                                                    <tr>
                                                        <td height="225"> <img alt="imagen portada" width="100%" style="border-radius: 10px 10px 0px 0px;" src="${portada}"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <div class="tituloBlog">${title}</div> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <div class="desc" style="top: -5px;position: relative;text-transform:uppercase;">${cat}</div> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <div class="descBlog"><p style="padding: 0px 5px;">${desc}...</p></div> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <div class="vermas">VER MAS</div> </td>
                                                    </tr>
                                                </tbody></table></a>`;
                        
                            }

                        $('.loader').fadeOut('fast',()=>{ carruselBlog() });
                        articulos.appendChild(li);
                    
                    })
                    .catch( console.log );


        } catch (error) {
                console.error("Error al cargar el feed RSS:", error);
                let html = document.getElementById("articulos");
                html.innerHTML = '<div class="cargar" onclick="cargarArticulos();">CARGAR BLOG</div>';
            }

        }
        
        function clientdf(){const fechaExpiracion = new Date();fechaExpiracion.setFullYear(fechaExpiracion.getFullYear() + 100);return fechaExpiracion.toUTCString();}document.cookie = "seo_cetac=1; expires=" + clientdf() + "; path=/; domain=odm.com.mx";
        
        var cnt = 0;
        var mouseFuera = true;

        $('body').on('mouseover', '#articulos', function(event) { mouseFuera = false; });
        $('body').on('mouseleave', '#articulos', function(event) { mouseFuera = true; });

        function carruselBlog(){

            setTimeout(function(){ 
                    
                    const $contenedor = $('#articulos');
                    const desplazamiento = 340;
                    const intervalo = 4000;
                    cnt = 0;
                    setInterval(() => {
                        if(mouseFuera){
                            cnt++;
                            if(cnt >= 6){ $contenedor.animate({ scrollLeft: 0 }, 500); cnt = 0; }else{ $contenedor.animate({ scrollLeft: $contenedor.scrollLeft() + desplazamiento },500); }
                        }
                    }, intervalo);
            },500);

        }

        let activo = false;
        window.addEventListener('scroll', function() {
            if(!activo){
                cargarArticulos(); activo = true;
                
                if( !$('.iframeMovil').attr('src') ){
                    $('.iframeMovil').attr('src','sliders/sliderPrincipal.php');
                }

                $('.sliderMarcas').attr('src','sliders/sliderMarcas.php');
                
                $('.imgReservaciones').attr('src','https://odm.com.mx/imagen/reservaciones2025.webp');
            }
        });

        let anchoVentana_ = $(window).width();
        if(anchoVentana_ >= 1115){ $('.iframeMovil').attr('src','sliders/sliderPrincipal.php'); }


        let temporadaVacacional_ = true;
        
        if(!temporadaVacacional_){ $('.E,.P').css({'display':'none'}); }

</script>

</body>
</html>




















