<?php include('../header.php'); ?>

<title>Servicios</title>

</head>

<body>

<?php include('../nav.php'); ?>

<div class="secciones">

    <table width="100%" border="0">
        <tr>
            <td><p class="seccion">nuestros servicios</p></td>
        </tr>
        <tr>
            <td>
                    <table width="100%" style="max-width: 1200px;" border="0">
                        <tr>
                            <td id="listaServ"></td>
                        </tr>
                    </table>

            </td>
        </tr>
    </table>

<script type="text/javascript" src="../js/servicios.js?1"></script>
<script>

    const serv = portadaServ.concat(servicio1x).concat(servicio2x);
    document.getElementById("listaServ").innerHTML = armaServicios(serv);
    flechas();

</script>

<?php include('../footer.php'); ?>

</div>

</body>
</html>

