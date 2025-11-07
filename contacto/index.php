<?php include('../header.php'); ?>

<title>Contacto</title>

</head>

<body>

<?php 

include('../nav.php'); 

function telefono($numero) {
    $numero = preg_replace('/\D/', '', $numero);

    $parte1 = substr($numero, 0, 2);
    $parte2 = substr($numero, 2, 4);
    $parte3 = substr($numero, 6, 4);

    return "$parte1 $parte2 $parte3";
}
?>

<style>

.fichaDireccion{
    background-color: #0099cc;
    max-width: 350px;
    text-align: left;
    color: white;
    padding: 6px;
    border-radius: 8px;
    vertical-align: top;
    margin: 5px;
}

.icono{
    width: 20px;
    height: 20px;
    padding: 10px;
    color: white;
}

.tableFrame{
    width: 100%;
    max-width:500px;
}

iframe{
    border-radius: 15px;
}

</style>

<div class="secciones">

    <table width="100%" border="0">
        <tr>
            <td><p class="seccion">mora automotríz centenario</p></td>
        </tr>
        <tr>
            <td>

                <?php 
                $direccion = 'Av. Centenario #607 Colonia Lomas de Tarango Delegación Álvaro Obregón CDMX 01620 México';
                $tel1 = '5575941185';
                $tel2 = '5541806214';
                $email = 'contacto@automotrizmora.com';
                $website = 'https://automotrizmora.com';
                include('ficha.php')
                ?>

                <table class="tableFrame" border="0">
                  <tr>
                    <td>
                        <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30112.72283064178!2d-99.217358!3d19.36524!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fec25c195691%3A0x2552fe0703f0cb7e!2sMora%20Automotriz!5e0!3m2!1ses!2sus!4v1762472220876!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                  </tr>
                </table>

            </td>
        </tr>
        <tr>
            <td><p class="seccion">mora automotríz águilas</p></td>
        </tr>
        <tr>
            <td>

                <?php 
                $direccion = 'Calzada las Águilas # 1349 Puente Colorado Álvaro Obregón CDMX 01730 México.';
                $tel1 = '5576055940';
                $tel2 = '5587178827';
                $email = 'contacto@automotrizmora.com';
                $website = 'https://automotrizmora.com';
                include('ficha.php')
                ?>

                <table class="tableFrame" border="0">
                  <tr>
                    <td>
                        <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7528.967616614482!2d-99.231447!3d19.348193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20062fd55f2cf%3A0x6adfd27ef01579c9!2sCalz.%20de%20las%20%C3%81guilas%201349%2C%20Puente%20Colorado%2C%20%C3%81lvaro%20Obreg%C3%B3n%2C%2001730%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1762472239110!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                  </tr>
                </table>

            </td>
        </tr>
    </table>

<?php include('../footer.php'); ?>

</div>

</body>
</html>

