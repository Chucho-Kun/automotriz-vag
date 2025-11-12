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
        padding: 10px;
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
    }

    input {
        cursor: pointer;
        padding: 10px;
        width: 100%;
        max-width: 200px;
        font-family: 'Jost', sans-serif;
        font-weight: bold;
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
                        <input type="text" id="buscador" placeholder="Buscar PDF...">
                        <select id="buscadorManuales">
                            <option selected="selected" disabled>Procedimientos / Aprietes</option>   
                            <option value="Direccion">Direccion</option>
                            <option value="Frenos">Frenos</option>
                            <option value="Soportes">Soportes</option>
                            <option value="Suspension">Suspension</option>
                            <option value="Transmision">Transmision</option>
                        </select>
                        <button class="btn">filtrar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                          <div id="totalResultados"></div>
                    </td>
                  </tr>
                </table>

            </td>
        </tr>
    </table>

    <div id="listaPDFs"></div>
</head>



  <script>
    let archivos = [];

    fetch("armador.php")
      .then(res => res.json())
      .then(data => {
        archivos = data;
        console.log(archivos);
      } );

    const buscador = document.getElementById("buscador");
    const resultados = document.getElementById("listaPDFs");

    buscador.addEventListener("input", () => {
    const texto = buscador.value.toLowerCase();
    resultados.innerHTML = "";

    if(texto.length >= 3){
        const filtrados = archivos.filter(a => a.nombre.toLowerCase().includes(texto));

        filtrados.forEach(a => {
            const div = document.createElement("div");
            div.classList.add("contResult");

            let rawString = a.nombre;
            let partes = rawString.split("|");
            let titulo = partes.pop();
            let tags = partes;

            div.innerHTML = `
            <table categoria="${ a.categoria }" class="pdf" border="0">
                <tr>
                <td>
                    <a style="color:black;" href="${a.ruta}" target="_blank">
                    <div class="tituloPDF">${ titulo }</div>
                    </a>
                </td>
                </tr>
                <tr>
                <td>
                    <a href="${a.ruta}" target="_blank">
                    <img class="iconPDF" src="../imagesApp/pdf.svg" alt="pdf icon">
                    </a>
                </td>
                </tr>
                <tr>
                    <td>
                    <div id="tags">${
                        tags.map( tag => '<p>'+tag+'</p>').join('')
                    }
                    </div>
                </td>
            </table>`;
            resultados.appendChild(div);
        });
        const res = filtrados.length;
        const total = document.getElementById("totalResultados");
        total.innerHTML = `<p>${ res } ${ res === 1 ? 'Resultado' : 'Resultados' } </p>`;
    }

    });
  </script>


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

