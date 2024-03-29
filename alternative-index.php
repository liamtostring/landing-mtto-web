<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html;       <meta charset="utf-8">
        <title>Home de <?= $_SERVER['SERVER_NAME'] ?></title>
<meta charset="utf-8">        
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://neubox.com/default_page/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://neubox.com/default_page/css/font-awesome.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style>@media screen and (min-width:992px){.the-icons li{width:12.5%}}.the-buttons > li{float:left;height:80px;padding:10px;border:1px solid #ddd;font-size:12px;line-height:1.25;text-align:center;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 -1px -1px 0}.the-icons .glyphicon{display:block;margin:5px auto;vertical-align:middle;margin-right:3px;font-size:24px}.the-icons li{float:left;width:100px;height:110px;padding:10px;border:1px solid #ddd;font-size:12px;line-height:1.25;text-align:center;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 auto}.the-icons,.the-buttons{list-style:none}.the-icons .glyphicon{display:inline}.row{color:#828293}a:focus{text-decoration:none!important}a{color:#E12540;text-decoration:none}a:hover{color:#5058A3;text-decoration:none}.tel{font-size:2em;vertical-align:middle;display:inline-block;padding:10px 30px}.izquierda,.derecha{padding:0 10%}a.btn-2 i{vertical-align:middle}a.btn-2{background:#5058A3;color:#fff;display:block;border-bottom:5px solid rgba(0,0,0,0.25);padding:10px 20px;font-size:2em;border-radius:10px;margin:50px 0;max-width:540px;text-align:center}a.btn-2:hover{background:#E12540;-webkit-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-moz-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-o-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940)}a.btn-1{border-bottom:3px solid rgba(0,0,0,0.3);display:inline-block;background:#E12540;color:#fff;padding:13px 30px;vertical-align:middle;font-size:1.5em;border-radius:10px;box-shadow:0 0 0 4px #fff;-webkit-transition:all 200ms cubic-bezier(0.950,0,0.265,1);-webkit-transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550);-moz-transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550);-o-transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550);transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550)}h1.dominio{color:#5058A3;font-weight:bolder;font-size:4em}a.btn-1:hover{background:#5058A3;-webkit-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-moz-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-o-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940)}.btn-1:active,.btn-2:active,img.logo:active,a:active{-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform:scale(0.8);-webkit-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-moz-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-o-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940)}img.logo{max-width:400px;margin-top:-30px}.logo{animation-name:fadeIn;animation-iteration-count:1;animation-duration:2s;-webkit-transition:all 200ms cubic-bezier(0.950,0,0.265,1);-webkit-transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550);-moz-transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550);-o-transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550);transition:all 200ms cubic-bezier(0.950,-0.480,0.265,1.550)}.logo:hover{opacity:0.9;-moz-transform:scale(1.1);-webkit-transform:scale(1.1);-o-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1);-webkit-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-moz-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-o-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940)}.fredo{display:inline-block;max-height:680px}.social{display:block;background:#E2233E;border-radius:10px;padding:5px;text-align:center;margin:20px;margin-bottom:20%}.social a{color:#fff;display:inline-block;padding:5px 3%;-webkit-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-moz-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-o-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940)}.social a:hover{color:#fff;-moz-transform:scale(2);-webkit-transform:scale(2);-o-transform:scale(2);-ms-transform:scale(2);transform:scale(2);-webkit-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-moz-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);-o-transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940);transition:all 300ms cubic-bezier(0.250,0.460,0.450,0.940)}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn}@media (min-width:1200px){.container{width:100%;background:#ffffff;background:-moz-linear-gradient(-45deg,#ffffff 0%,#efefef 55%,#e2233e 55%,#e2233e 100%);background:-webkit-linear-gradient(-45deg,#ffffff 0%,#efefef 55%,#e2233e 55%,#e2233e 100%);background:linear-gradient(135deg,#ffffff 0%,#efefef 55%,#e2233e 55%,#e2233e 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#e2233e',GradientType=1);padding:1%}}@media (max-width:1420px){a.btn-1{font-size:1.2em}.tel{font-size:1.6em}h1.dominio{font-size:3em}}@media (max-width:1320px){a.btn-2{font-size:1.2em}.social i{font-size:1.8em}}@media (max-width:1199px){.row{text-align:center}.izquierda,.derecha{padding:0 5%;text-align:center}.fa-3x{font-size:1.2em}a.btn-2{margin:10px auto;font-size:1.5em!important}h1.dominio{font-size:2em!important}img.fredo{max-height:310px}img.logo{margin-top:0;margin-bottom:-20px}}@media (max-height:800px){img.fredo{max-height:480px}}@media (max-height:600px){img.fredo{max-height:380px}}@media (min-width:100px) and (max-width:600px){h2,.h2{font-size:20px}h1.dominio{font-size:1.5em!important}h4,.h4{font-size:13px}a.btn-2{margin:10px auto;font-size:0.9em!important}img.logo{margin-top:-10px;margin-bottom:-20px;max-width:250px}}</style>
    </head>
    <body>
        <div class="container">
            <!-- Header -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="izquierda">
                        <a href="http://neubox.com" title="Neubox - All inclusive web hosting"><img src="http://neubox.com/default_page/img/logo-neubox.svg" alt="Neubox Logo" class="logo"></a>
                        <h2 class="bienvenida">
                            Bienvenido al home temporal de:
                        </h2>
                        <br/>
                        <a href="#!">
                            <h1 class="dominio">
                                <?= $_SERVER['SERVER_NAME'] ?>
                            </h1>
                        </a>
                        <br/>
                        <h4 class="tag">
                            Sitio hospedado en NEUBOX<small>®</small> <br /><br />
                            Para cambiar esta página  sube tus archivos al directorio de <strong>public_html</strong>
                        </h4>
                        <a href="https://clientes.neubox.com/" rel="nofollow" class="btn-2">
                            <i class="fa fa-paw"></i> Tu panel de control
                        </a>
                        <a href="https://neubox.com/Promociones" target="blank" class="btn-2">
                            <i class="fa fa-hand-o-right fa-2x"></i> ¡Conoce nuestras promociones!
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="derecha">
                        <a href="tel:8006818136" class="tel">
                            <i class="fa fa-phone"></i>  800 681 8136
                        </a>
                        <a href="http://neubox.com/Contacto" target="blank" class="btn-1">
                            <i class="fa fa-envelope-o"></i>  Escríbenos
                        </a>
                        <img class="fredo" src="http://neubox.com/default_page/img/Fredo.svg" alt="Fredo" title="Hola, soy Fredo, ¡Gracias por elegir a Neubox® como tu proveedor de servicios de internet!">
                        <div class="social">
                            <a href="https://www.facebook.com/NEUBOX" target="blank"><i title="DANOS LIKE" class="fa fa-facebook fa-2x"></i>  </a>
                            <a href="https://www.twitter.com/neubox" target="blank"><i title="SÍGUENOS" class="fa fa-twitter fa-2x"></i> </a>
                            <a href="https://www.youtube.com/neuboxhosting" target="blank"><i title="YOUTUBE" class="fa fa-youtube fa-2x"></i> </a>
                            <a href="http://instagram.com/neubox/" target="blank"><i title="INSTAGRAM" class="fa fa-instagram fa-2x"></i> </a>
                            <a href="https://blog.neubox.com/" target="blank"><i title="TUMBLR" class="fa fa-tumblr fa-2x"></i> </a>
                            <a href="https://plus.google.com/111056280094990923381" target="blank"><i title="G+" class="fa fa-google-plus fa-2x"></i> </a>
                            <a href="https://www.linkedin.com/company/neubox" target="blank"><i title="LINKEDIN" class="fa fa-linkedin fa-2x"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="http://neubox.com/default_page/js/bootstrap.min.js"></script>
    </body>
</html>


