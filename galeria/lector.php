<?php
// /imagesGaleria/
$imagenes = glob( '../imagesGaleria/'.htmlspecialchars($carpeta).'/' . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

echo '<div class="contenedor">';
	
    foreach ($imagenes as $img):

        $filename = htmlspecialchars($img);
        $base = basename($filename, ".webp");

        echo '<table border="0" class="galeria">
            <tr>
                <td><img class="imgClass" loading="lazy" name="'.htmlspecialchars($img).'" src="../imagesGaleria/'.htmlspecialchars($carpeta).'/thumbnail/'.$base.'_thumb.webp"></td>
            </tr>
        </table>';
    endforeach; 
echo '</div>';
   
?>
