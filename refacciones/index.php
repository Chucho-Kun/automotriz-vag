<?php include('../header.php'); ?>

<title>Refacciones</title>

</head>

<style>
    .btn{
        background-color: #cc0938;
        color: white;
        text-transform: uppercase;
        padding: 14px 72px;
        border: none;
        font-weight: bold;
    }
    select{
        width: 200px;
    }
    .contenedor{
        width: 100%;
        max-width: 412px;
    }
</style>

<body>

<?php include('../nav.php'); ?>

<div style="background-color:white;text-align: center;">

    <table width="100%" border="0">
        <tr>
            <td><p class="seccion">Refacciones</p></td>
        </tr>
        <tr>
            <td>

                <table class="contenedor" border="0">
                  <tr>
                    <td>
                        <div style="text-align: left;">
                            <label for="buscadorGarantias" style="font-weight:bold;">BUSCAR GARANTÍAS</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <select id="buscadorGarantias">
                            <option selected="selected" disabled>GARANTIAS</option>   
                            <option value="Garantia 1">Garantia 1</option>
                            <option value="Garantia 2">Garantia 2</option>
                            <option value="Garantia 3">Garantia 3</option>
                            <option value="Garantia 4">Garantia 4</option>
                        </select>
                        <button class="btn">buscar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        RESULTADOS
                    </td>
                  </tr>
                </table>
                
                

            </td>
        </tr>
        <tr>
            <td>

                <table class="contenedor" border="0">
                  <tr>
                    <td>
                        <div style="text-align: left;">
                            <label for="buscadorManuales" style="font-weight:bold;">BUSCAR MANUALES</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <select id="buscadorManuales">
                            <option selected="selected" disabled>MANUALES</option>   
                            <option value="Garantia 1">Manual 1</option>
                            <option value="Garantia 2">Manual 2</option>
                            <option value="Garantia 3">Manual 3</option>
                            <option value="Garantia 4">Manual 4</option>
                        </select>
                        <button class="btn">buscar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        RESULTADOS
                    </td>
                  </tr>
                </table>

            </td>
        </tr>
    </table>

<?php include('../footer.php'); ?>

</div>

<script src="../js/select2.js"></script>
<link rel="stylesheet" href="../css/select2.css">

<script>
    $("#buscadorGarantias").select2();
    $("#buscadorManuales").select2();
</script>

</body>
</html>

