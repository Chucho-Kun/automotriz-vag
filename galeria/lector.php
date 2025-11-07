<?php

$imagenes = glob( htmlspecialchars($carpeta) . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

echo '<div style="text-align: center;">';
	
    foreach ($imagenes as $img):
        echo '<table border="0" class="galeria">
            <tr>
                <td><img class="imgClass" loading="lazy" src="'.htmlspecialchars($img).'"></td>
            </tr>
        </table>';
    endforeach; 
echo '</div>';
   
?>
