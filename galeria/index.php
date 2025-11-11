<?php include('../header.php'); ?>

<title>Galeria</title>

</head>

<style>
    .galeria{
        max-width: 500px;
        display: inline-table;
        margin: 5px;
        border-collapse: collapse;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.5s;
    }
    .galeria:hover{
        opacity: 1;
    }
    
    @media (min-width:710px){
        .imgClass{ height: 230px; width: auto; }
    }

    @media (max-width:710px){
        .imgClass{ height: auto; width: 100%; }
    }
    
    @media (max-width:900px){
        .galeria{ opacity: 1; }
    }

    .fotoProducto{
        height: auto;
        max-height: 700px;
        max-width: 1000px;
        width: 94%;
        background-color: white;
        padding: 12px;
        left: -2px;
        position: relative;
    }

    .fondoNotif{
        background-color: black;
        opacity: 0.8;
        position: fixed;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 11;
        display: none;
    }

    .fondo2{
        position: fixed;
        text-align: center;
        background-color:transparent;
        width: 100%; 
        z-index: 11;
        opacity: 1;
        display: none;
        top: 5px;
    }

    .contactoW{
        display: inline-block;
        background-color: white;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        margin: 10px 0px;
        position: relative;
        top: -45px;
        padding-top: 8px;
    }

    .contenedor{
        text-align: center;
        max-width: 1400px;
        display: inline-block;
    }
</style>

<body>

<?php include('../nav.php'); ?>

<div class="fondoNotif"></div>
<div class="fondo2"></div>

<div style="background-color:white;text-align: center;">

    <table width="100%;" border="0">
        <tr>
            <td><p class="seccion">Galería</p></td>
        </tr>
        <tr>
            <td>
                <?php 
                    $carpeta = 'horizontales';
                    include('lector.php');
                ?>
            </td>
        </tr>
    </table>

    <div style="background-color: #efefef;text-align: center;max-width: 1400px;display: inline-block;padding: 20px 0px;">
        <?php 
            $carpeta = 'verticales';
            include('lector.php');
        ?>
    </div>

<?php include('../footer.php'); ?>

</div>

<script>
    let estado = true;

    function miGaleria(){

        if( estado ){

            $('.fondoNotif').fadeIn();
            $('.fondo2').fadeIn();
            estado = false;

        }else{

            $('.fondoNotif').fadeOut();
            $('.fondo2').fadeOut();
            estado = true;

        }

    }

    $('html').on('click', '.galeria', function(event) {

        miGaleria();
        let url = $(this).find('img').attr('name');
        let texto = 'Contactar por WhatsApp'; //$(this).find('.nombreClass').text();
        
        console.log("vamos a mostrar la foto en grande");

        $('.fondo2').html(`
        <table class="aviso" border="0" style="display: inline-table;color: white;margin-right: 0px;opacity: 1;margin-left: 0px;width: auto;max-height: 600px;position: relative;top: -25px;">
            <tbody>
                <tr>
                    <td class="multipleOpcion" style="">
                        <div onclick="miGaleria()"> 
                            <img width="20px" src="../imagesApp/crossRed.svg" style="background-color: white;border-radius: 100px;padding: 10px;cursor: pointer;position: relative;top: 32px;display: inline-block;z-index:2;"> 
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="fotoProducto" src="${ url }">
                        <div>
                            <a target="_blank" class="contactoW" href="https://api.whatsapp.com/send?phone=5215541806214">
                            <table border="0" style="width: 300px;">
                            <tbody>
                                    <tr>
                                        <td width="20%" style="text-align: center;">
                                            <div>
                                                <img alt="Whatsapp" class="whatsapp rssBtn" src="../imagesApp/whatsapp.svg" width="30" height="30">
                                            </div>
                                        </td>
                                        <td width="60%" style="text-align: left;">
                                            <div style="text-transform:capitalize;color:gray;"><b style="border-radius: 7px;color:gray;">${ texto }</b></div>
                                        </td>
                                    </tr>
                            </tbody>
                            </table>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        `);
    });

</script>

</body>
</html>

