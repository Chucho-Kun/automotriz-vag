<?php
function listarPDFs($dir) {
    $archivos = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $archivo) {
        if ($archivo->isFile() && strtolower($archivo->getExtension()) === 'pdf') {

            $rutaDir = str_replace($_SERVER['DOCUMENT_ROOT'], '', $archivo->getPathname());

            $archivos[] = [
                "categoria" => categoMaker($rutaDir),
                "nombre" => nameMaker($rutaDir),
                "ruta"   => $rutaDir
            ];
        }
    }
    return $archivos;
}

$directorioBase = $_SERVER['DOCUMENT_ROOT'] . "/directorioPDFs/"; 

$pdfs = listarPDFs($directorioBase);

header('Content-Type: application/json');
echo json_encode($pdfs);


function nameMaker($ruta){
    $rutaSinPrefijo = preg_replace('#^/directorioPDFs/#', '', $ruta);
    $partes = explode('/', $rutaSinPrefijo);
    $rutaFinal = implode(' | ', $partes);
    return $rutaFinal;
}

function categoMaker($ruta){
    $partes = explode('/', $ruta);
    $indice = array_search("Procedimientos y aprietes", $partes);
    $siguiente = null;
    if( $indice !== false && isset( $partes[$indice + 1] ) ){
        $siguiente = $partes[$indice + 1];
    }
    return $siguiente;
}



/*
en PHP tengo un string "/directorioPDFs/VAG/MLB/Audi/Chasis 4G A6 2011-2018/Motor 3L/Procedimientos y aprietes/Frenos/Discos/Delantero/Extracción y reemplazo/Disco de acero - extracción e instalación.pdf" 
dame un codigo en php para obtener el nombre del siguiente "/" siempre después de  "Procedimientos y aprietes". En este caso es "Frenos"

quitar la parte de /directorioPDFs y armar un nuevo string como "VAG | MLB | Audi | Chasis 4G A6 2011-2018 | Motor 3L | Procedimientos y aprietes | Frenos | Discos | Delantero | Extracción y reemplazo | Disco de acero - extracción e instalación.pdf"
 */
?>
