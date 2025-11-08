const servidor = "/nuevowebsite";
const portadaServ = [
{
    tipo:"1x",
    titulo:"MOTOR",
    desc:"MANTENIMIENTO MAYOR (incluye refacciones)",
    lista:[
        {t:"Remplazo de Bujias, Filtros y Aceite"},
        {t:"Revisión 30 puntos de Seguridad"},
        {t:"Escaneo con Odis Engineering"},
        {t:"Lavado Cuerpo de Aceleración"},
        {t:"Lavado Exterior de Motor y Carrocería"},
    ],
    img: servidor+"/imagesServ/motor.jpg",
    url:"/"
},{
    tipo:"1x",
    titulo:"AJUSTE DE MOTOR",
    desc:"COMO SABER CUANDO NESECITA UN AJUSTE",
    lista:[
        {t:"Motor 4 Cilindros"},
        {t:"Motor 6 Cilindros"},
        {t:"Motor 8 Cilindros"},
    ],
    img: servidor+"/imagesServ/ajuste-de-motor.jpg",
    url:"/"
},{
    tipo:"1x",
    titulo:"TRANSMISIÓN",
    desc:"SERVICIO / CAMBIO",
    lista:[
        {t:"Embrague Húmedo"},
        {t:"Embrague Seco"},
        {t:"Mantenimiento Caja DSG OGC"},
        {t:"Emgrague Haldex"},
        {t:"Mantenimiento para Transmisión"},
    ],
    img: servidor+"/imagesServ/transmision.jpg",
    url:"/"
},{
    tipo:"1x",
    titulo:"SUSPENSIONES",
    desc:"MANTENIMIENTO / INSPECCIÓN",
    lista:[
        {t:"Cotización sin costos extra"},
        {t:"Entrega en Tiempo y Forma"},
        {t:"Usamos piezas originales"},
    ],
    img: servidor+"/imagesServ/suspensiones.jpg",
    url:"/"
}
];

const servicio1x = [
{
    tipo:"1x",
    titulo:"DIAGNOSTICO",
    desc:"TIENE COSTO SI NO ES APROBADO",
    lista:[
        {t:"Escaneo"},
        {t:"Revisión de lienas"},
        {t:"Medición de sensores"},
        {t:"Revisión del estado del Software"},
        {t:"Medición de actuadores"},
        {t:"Elaboración de Presupuesto"},
        {t:"Solicitud de piezas a fabricante"},
    ],
    img: servidor+"/imagesServ/diagnostico.jpg",
    url:"/"
},{
    tipo:"1x",
    titulo:"AIRE ACONDICIONADO",
    desc:"CARGA DE GAS PARA AIRE ACONDICIONADO",
    lista:[
        {t:"Servicio de carga"},
        {t:"Bote líquido"},
        {t:"Revisión del sistema"},
    ],
    img: servidor+"/imagesServ/aire-acondicionado.jpg",
    url:"/"
},{
    tipo:"1x",
    titulo:"SISTEMA ELÉCTRICO",
    desc:"MANTENIMIENTO DE MOTORES",
    lista:[
        {t:"Servicio Menor"},
        {t:"Servicio Mayor"},
        {t:"Transmisión Automática"},
        {t:"Mantenimiento DSG"},
        {t:"Frenos de disco"},
        {t:"Verificación"},
        {t:"Diagnóstico"},
        {t:"Suspensión Delantera"},
        {t:"Suspensión Trasera"},
        {t:"Frenos Balatas"},
    ],
    img: servidor+"/imagesServ/sistema-electrico.jpg",
    url:"/"
},{
    tipo:"1x",
    titulo:"SISTEMA DE SEGURIDAD",
    desc:"MANTENIMIENTO DEL SISTEMA DE SEGURIDAD",
    lista:[
        {t:"Disco de Freno"},
        {t:"Balatas de Frenos"},
        {t:"Líquido de Frenos"},
    ],
    img: servidor+"/imagesServ/sistema-de-seguridad.jpg",
    url:"/"
}
];

const servicio2x = [
{
    tipo:"2x",
    titulo:"VERIFICACIÓN",
    desc:"SERVICIO COMPLETO",
    lista:[
        {t:"Pre-verificación"},
        {t:"Pago verificación"},
        {t:"Escaneo y activación de monitores"},
        {t:"Revisión Motor"},
        {t:"Vamos por su coche si está dentro de la cobertura"},
    ],
    img: servidor+"/imagesServ/verificacion.jpg",
    url:"/"
}
];

function armaServicios(serv){
    let html = '';

    for (let x = 0; x < serv.length; x++) {
        let servLista = serv[x].lista;
         if(serv[x].tipo === '1x'){
            html += `<table class="tblServicios" border="0">
                        <tr>
                            <td class="tblTitulo">${serv[x].titulo}</td>
                        </tr>
                        <tr>
                            <td class="tblDesc">${serv[x].desc}</td>
                        </tr>
                        <tr>
                            <td>
                                <table class="tblConList" border="0">
                                <tr>
                                    <td>
                                        <div class="tblList">
                                            <ul>
                                                ${ serv[x].lista.map( item => '<li><b>•</b> '+item.t+'</li>' ).join("") }
                                            </ul>
                                            <div class="scroll-indicator hidde" id="flechaAbajo">⬇</div>
                                        </div>
                                    </td>
                                </tr>
                                </table>
                                <table border="0">
                                <tr>
                                    <td class="tblImg">
                                        <img alt="seccion motor" loading="lazy" src="${serv[x].img}">
                                    </td>
                                </tr>
                                </table>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="${serv[x].url}"><div class="tblBtn">VER MÁS</div></a>
                            </td>
                        </tr>
                    </table>`;
        }else{
            html += `<table class="tblServicios2x" border="0">
                  <tr>
                    <td class="tblTitulo">${serv[x].titulo}</td>
                  </tr>
                  <tr>
                    <td class="tblDesc">${serv[x].desc}</td>
                  </tr>
                  <tr>
                    <td class="tbl2xcontrol">
                        <table class="tblConList2x" border="0">
                          <tr>
                            <td>
                                <div class="tblList">
                                    <ul>
                                        ${ serv[x].lista.map( item => '<li><b>•</b> '+item.t+'</li>' ).join("") }
                                    </ul>
                                    <div class="scroll-indicator hidde" id="flechaAbajo">⬇</div>
                                </div>
                            </td>
                          </tr>
                        </table>
                        <table border="0">
                          <tr>
                            <td class="tblImg2x">
                                <img alt="seccion serviciocompleto" loading="lazy" src="${serv[x].img}">
                            </td>
                          </tr>
                        </table>
                        
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">
                        <a href="${serv[x].url}"><div class="tblBtn">VER MÁS</div></a>
                    </td>
                  </tr>
                </table>`;
        }
    }
    return html;
}

function flechas(){
    const contenedores = document.querySelectorAll(".tblList");
    contenedores.forEach(contenedor => {
    const flecha = contenedor.querySelector(".scroll-indicator");

    const lista = contenedor.querySelector("ul");
    const totales = lista.querySelectorAll("li").length;

    function actualizarFlecha() {
        const scrollable = totales > 5;  //si supera los 5 servicios se muestra la flecha;
        const alFinal = contenedor.scrollTop + contenedor.clientHeight >= contenedor.scrollHeight - 1;

        if (scrollable && !alFinal) {
        flecha.classList.add("show");
        } else {
        flecha.classList.remove("show");
        }
    }

    contenedor.addEventListener("scroll", actualizarFlecha);
    window.addEventListener("load", actualizarFlecha);
    });
}