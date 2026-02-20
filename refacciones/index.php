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
        max-width: 1400px;
    }

        ul { list-style: none; padding: 0; }
    li { margin: 5px 0; }
    #resultados{background-color: gray;}
    .pdf{
        width: 250px;
        background-color: #efefef;
        border-radius: 11px;
    }
    .iconPDF{
        width: 50px;
        padding: 5px;
    }

    #tags {
        background-color: white;
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        padding: 6px;
        border-radius: 0px 0px 8px 8px;
    }

    #tags p{
        background-color: #fcd22d;
        border-radius: 8px;
        padding: 5px 15px;
        margin: 0;
        font-size: 12px;
        font-family: Arial, sans-serif;
        cursor: pointer;
    }

    .tituloPDF{
        font-weight: bold;
        padding: 5px 0px;
        font-size: 14px;
    }

    .contResult {
        width: 260px;
        display: inline-block;
        vertical-align: text-top;
        margin-bottom: 10px;
    }

    input {
        cursor: pointer;
        padding: 10px;
        width: 100%;
        max-width: 200px;
        font-family: 'Jost', sans-serif;
        font-weight: bold;
    }

    .unSelect {
        color: gray;
        border: solid 1px gray;
        text-transform: uppercase;
        font-weight: bold;
        padding: 5px;
        width: 150px;
        border-radius: 8px;
        display: inline-table;
        margin: 5px;
        font-size: 14px;
        cursor: pointer;
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
                <p>Selecciona cualquiera de las siguientes categorias:</p>
                <!-- <p>Opciones de Manuales y Garantías:</p> -->
            </td>
        </tr>
        <tr>
            <td>
                <div class="modelos">
                    <div onclick="btnBuscar('BMW')" class="unSelect">BMW</div>
                    <div onclick="btnBuscar('Mercedes')" class="unSelect">Mercedes</div>
                    <div onclick="btnBuscar('VAG')" class="unSelect">VAG</div>
                </div>
            </td>
        </tr>
        <tr>
            <td>

                <table class="contenedor" border="0">
                  <tr>
                    <td>
                        <input type="text" id="buscador" placeholder="Manual o Garantía...">
                        <select id="buscadorManuales">
                            <option selected="selected" disabled>Procedimientos</option>   
                            <option value="Dirección">Dirección</option>
                            <option value="Frenos">Frenos</option>
                            <option value="Soportes">Soportes</option>
                            <option value="Suspensión">Suspensión</option>
                            <option value="Transmisión">Transmisión</option>
                        </select>
                        <!-- <button class="btn">filtrar</button> -->
                    </td>
                  </tr>
                  <tr>
                    <td>
                          <div id="totalResultados">0 Resultados</div>
                    </td>
                  </tr>
                </table>

            </td>
        </tr>
    </table>

    <div id="listaPDFs"></div>
</head>

<script src="../js/select2.js"></script>
<link rel="stylesheet" href="../css/select2.css">
<script src="script.js"></script>

<?php include('../footer.php'); ?>

</div>
</body>
</html>

