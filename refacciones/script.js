
let archivos = [];

fetch("armador.php")
    .then(res => res.json())
    .then(data => {
    archivos = data;
    // console.log({archivos});
    } );

const buscador = document.getElementById("buscador");
const resultados = document.getElementById("listaPDFs");

buscador.addEventListener("input", () => {
    const texto = buscador.value.toLowerCase();
    resultadosPDF( texto )
});

function rutaPDF(rutaRaw) {
    const ruta = rutaRaw.replace(/^\/\//, "../");
    return ruta
}

function resultadosPDF( caracteres ){
    
    const texto = caracteres.toLowerCase();
    
    resultados.innerHTML = "";
    if(texto.length >= 3){
        const filtrados = archivos.filter(a => a.nombre.toLowerCase().includes(texto));
        
        filtrados.forEach(a => {
            const div = document.createElement("div");
            div.classList.add("contResult");
            div.setAttribute("name" , a.categoria );

            let rawString = a.nombre;
            let partes = rawString.split("|");
            partes = partes.map( p => p.trim() );

            let titulo = partes.pop();
            let tags = partes.filter( cat =>  cat !== "Procedimientos y aprietes" );

            div.innerHTML = `
            <table class="pdf" border="0">
                <tr>
                    <td>
                        <a href="${a.ruta}" target="_blank">
                        <img class="iconPDF" src="../imagesApp/pdf.svg" alt="pdf icon">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a style="color:black;" href="${ rutaPDF(a.ruta) }" target="_blank">
                            <div class="tituloPDF">${ titulo }</div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div id="tags">${
                        tags
                            .filter(tag => tag !== '' && tag !== 'directorioPDFs')
                            .map( tag => '<p>'+tag+'</p>')
                            .join('')
                    }
                    </div>
                </td>
            </table>`;
            resultados.appendChild(div);
        });
        muestraTotales( filtrados.length );
    }
}

function muestraTotales( n ){
    const total = document.getElementById("totalResultados");
    total.innerHTML = `<p>${ n } ${ n === 1 ? 'Resultado' : 'Resultados' } </p>`;
}

$('#buscadorManuales').on("change", function(){
    let valor = $(this).val();
    filtrador( valor );
});

function filtrador( valor ){
    
    $("#listaPDFs").children().show();
    let cont = 0;
    $("#listaPDFs").children().each(function() {
        
        let valorPDF = $(this).attr("name");

        if ( valorPDF.normalize() != valor.normalize()) {
            $(this).hide();
        }else{ cont++; }
    });
    muestraTotales( cont );
}

const botones = document.querySelectorAll(".unSelect");

botones.forEach( boton => {
    boton.addEventListener("click", () => {
        botones.forEach( b => {
            b.classList.remove('tblBtn');
            b.classList.add('unSelect')
        });

        boton.classList.remove('unSelect');
        boton.classList.add('tblBtn');
    });
});

function btnBuscar(valor) {
    // document.getElementById("buscador").value = valor+ " ";
    resultadosPDF(valor);
}

$("#buscadorGarantias").select2();
$("#buscadorManuales").select2();


// Audi A6 Sedan 4G - 2011/2018 | MLB (2L)

// VAG/MLB/Audi/Chasis 4G A6 2011-2018/2L/



// /Direccion/Caja-de-direccion/Aprietes.pdf
// /Direccion/Bieleta-terminal/Abrazadera.pdf
// /Direccion/Caja-de-direccion/Aprietes.pdf
// /Direccion/Caja-de-direccion/Numero-de-partes.pdf
// /Direccion/Extraccion-e-instalacion.pdf
// /Direccion/Mano-de-obra.pdf
// /Frenos/Discos/Mano-de-obra.pdf
// /Soportes/Motor/Aprietes.pdf
// /Suspensión/Amortiguadores/Aprietes.pdf
// /Transmisión/Aceite/mano-de-obra.pdf
// /Transmisión/Mecatronica/mano-de-obra.pdf