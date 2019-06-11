<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Muni-Andarapa</title>

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fonts icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="css/estilos-encabezado.css">
    <link rel="stylesheet" href="css/navegacioncss2.css">
    <link rel="stylesheet" href="css/k-stilos.css">
    <link rel="stylesheet" href="css/rs-estilos.css">
        
        <link rel="stylesheet" href="css/estyle-andarapa.css"> <!-- último css agregado -->
    <!-- <link rel="stylesheet" href="css/slider2k.css">     -->

    <!-- Insert to your webpage before the </head> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Se incluye el CDN del jqUERY en esta posición debido a que se generan conflictos con la vesi+on nueva de Jquery... 
      Se puede observar arriba la versón más reciente de jquery. abajo la más antigua.
      Para que el slide funcione debemos colacar el jquery de abajo :c 
    -->

    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

</head>
<body>
    
    <!--ENCABEZADO Transparencia, logo y gobierno regional -->
    <div class="bg-encabezado-tlg py-3">
        <div class="container-fluid d-flex justify-content-between">            
            <div class="d-md-block d-none">
                <!-- <img src="img/logo-andarapa.png" height="50px" alt="logo"> -->
                <img src="img/logo-andarapa.png" class="logo-tipo-lenyn" height="50px" alt="logo">
            </div>

            <div class="">
                <img src="img/gestion2019-2022.png" class="img-fluid d-block m-auto" width="200px" height="50px" alt="">
                <div class="text-center">                    
                    <span class="text-muted text-center">MUNICIPALIDAD DE ANDARAPA</span>
                </div>
            </div>

            <div class="">                
                <img src="img/transparencia.png" height="50px" alt="">
            </div>
        </div>
    </div>
    
    <!--ENCABEZADO Redes y logo -->
    <div id="cabeza">
        <div class="encabezado p-2">
            <div class="">
                <img src="img/logo-andarapa.png" class="d-md-none" height="50px" alt="logo">
                <!-- <a href="#"><i class="mx-2 fab fa-facebook-f text-success"></i></a>
                <a href="#"><i class="mx-2 fab fa-twitter text-success"></i></a>
                <a href="#"><i class="mx-2 fab fa-instagram text-success"></i></a> -->
            </div>
            <div class="buscar"> <!--buscar-->
                <!-- <input type="text" placeholder="Buscar" class="tbuscar">
                <button class="btnbuscar px-1 pt-2"><i class="material-icons">search</i></button>
                <a href="#">Transparencia</a> -->
                <a href="#"><i class="mx-2 fab fa-facebook-f text-success"></i></a>
                <a href="#"><i class="mx-2 fab fa-twitter text-success"></i></a>
                <a href="#"><i class="mx-2 fab fa-instagram text-success"></i></a>
            </div>
            
        </div>
    </div>

    <!-- SLIDER DINÁMICO -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner container-fluid px-0 mx-0">        
            <!-- Insert to your webpage where you want to display the slider -->
            <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto;">
                <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                    <ul class="amazingslider-slides" style="display:none;">
                        <li>
                            <img src="images/img1.jpg" class="img-fluid" alt="img1"  title="this is description of the image" />                    
                        </li>
                        <li><img src="images/img2.jpg" class="img-fluid" alt="img2"  title="this is description of the image" />
                        </li>
                        <li><img src="images/img3.jpg" class="img-fluid" alt="img3"  title="this is description of the image" />
                        </li>
                        <li><img src="images/img4.jpg" class="img-fluid" alt="img4"  title="this is description of the image" />
                        </li>
                        <li><img src="images/img5.jpg" class="img-fluid" alt="img5"  title="this is description of the image" />
                        </li>
                        <li><img src="images/img6.jpg" class="img-fluid" alt="img6"  title="this is description of the image" />
                        </li>
                    </ul>
                    <ul class="amazingslider-thumbnails" style="display:none;">
                        <li><img src="images/img1.jpg" alt="img1" title="img1" /></li>
                        <li><img src="images/img2.jpg" alt="img2" title="img2" /></li>
                        <li><img src="images/img3.jpg" alt="img3" title="img3" /></li>
                        <li><img src="images/img4.jpg" alt="img4" title="img4" /></li>
                        <li><img src="images/img5.jpg" alt="img5" title="img5" /></li>
                        <li><img src="images/img6.jpg" alt="img6" title="img6" /></li>
                    </ul>
                    <div class="amazingslider-engine"><a href="#" title="Responsive jQuery Image Slideshow">Responsive jQuery Image Slideshow</a></div>
                    <!-- http://amazingslider.com -->
                </div>
            </div>
            <!-- End of body section HTML codes -->       
        </div>
    </div>
    
    <!-- NAVEGACIÓN OPCIONES-->
    <div class="cotenedor-navegacion  sticky-top" style="background: royalblue;">
        
        <!-- NAVEGACIÓN-->
     
        <?php include("navegar.php"); ?>     

    </div>

    <!-- CUERPO -->

    <section class="inicio-presentacion" id="crp-general">
        <div class="presentacion-opacity p-4">
            <div class="container text-center lead text-white">
                <h3>Municipalidad Distrital de Andarapa</h3>
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt dolorum nam optio harum odit et eum doloribus earum, debitis, qui itaque aliquid laboriosam! Praesentium culpa officia sed consequatur asperiores.</p>
            </div>
        </div>
    </section>

    <div class="cuerpo-general">
        <div class="container mt-4">
            <div class="row">

                <div class="col-lg-3 bg-light">
                    <h4 class="text-center">Novedades</h4>
                    <a href="#" class="d-block">Doc.novedades.pdf</a>
                    <a href="#" class="d-block">Doc.novedades one.pdf</a>
                    <a href="#" class="d-block">Doc.novedades two.pdf</a>
                    <a href="#" class="d-block">Doc.novedades three.pdf</a>
                </div>
                <div class="col-lg-5 px-1 bg-light">                    
                    <h4 class="text-center">Noticias</h4>

                    <?php
                        require_once('Conexion.php');
                        // echo (!empty($_GET['ntc']))."LOALA ".($_GET['ntc'] >= 0); //Prueba valor boolean 
                        $ntc = (!empty($_GET['ntc']) && ($_GET['ntc'] >= 0))?$_GET['ntc'] : 0 ;
                        $not_init = ($ntc != 0)? $ntc*3 : 0;
                        // echo $not_init;
                        // echo "valor ntc ".$ntc; //Prueba viendo valor del ntc 
                        $result = $mysqli->query("SELECT * FROM noticias LIMIT $not_init, 3");
                        $arr_notice = [];
                        while($reg_notice = $result->fetch_assoc()){
                            $arr_notice[] = $reg_notice;
                        }
                        
                        foreach($arr_notice as $noticia){
                            // echo $noticia['titulo_noti'];
                    ?>                    
                    <div class="card p-1 my-1">
                        <img src="img/img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">                                
                                <?php echo $noticia['titulo_noti'];?>
                            </h5>
                            <p class="card-text">
                                <?php
                                    echo $noticia['introduccion_noti'];
                                ?>
                                <a href="#" class="badge badge-warning" data-toggle="modal" data-target="#idnoticia1">
                                    VER MAS
                                </a>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <!-- Card noticia fin -->
                        <!-- Modal noticia-->
                        <div class="modal fade bd-example-modal-xl" id="idnoticia1" tabindex="-1" role="dialog" aria-labelledby="idnoticia1" aria-hidden="true">
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content border border-secondary bg-secondary">

                                    <img src="img/img1.jpg" class="img-fluid" alt="">                                            
                                    <div class="text-muted p-3">
                                        <h4 class="text-center display-3 lead text-white">
                                            <?php
                                                echo $noticia['titulo_noti'];
                                            ?>
                                        </h4>
                                        <p class="display-5 text-white lead font-weight-normal px-2">
                                            <?php
                                                echo $noticia['contenido'];
                                            ?>
                                            <!-- <img src="img/img4.jpg" id="img-noticia" class="img-fluid border rounded-lg float-md-left mt-2 mr-2" alt="">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos magnam dolorum culpa cumque soluta voluptate veritatis nulla sunt mollitia corporis vero libero ipsa facere recusandae necessitatibus labore dignissimos exercitationem odio, maiores porro, repudiandae nemo similique aliquam doloremque. Dolore, voluptates in! -->
                                        </p>                                            
                                    </div>

                                    <button class="btn btn-lg btn-warning m-4 lead" data-dismiss="modal">
                                        Leido
                                    </button>

                                </div>
                            </div>
                        </div>
                        <!-- Fin modal noticia -->                        

                    </div>
                    <?php
                        }
                        $result->free();
                        $mysqli->close();
                    ?>

                    <!-- <div class="card p-1 my-1">
                        <img src="img/img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">New title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card p-1 my-1">
                        <img src="img/" class="card-img-top" alt="Noticia sin imagen">
                        <div class="card-body">
                        <h5 class="card-title">New title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>       -->
                    
<nav aria-label="Page navigation example" class="pt-2">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="index.php?ntc=<?php 
            $prev = ($ntc > 0)? $ntc-1 : 0 ;
            echo $prev; 
        ?>#crp-general" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item <?php echo ($ntc == 0)?"active":""; ?>"><a class="page-link" href="index.php?ntc=0#crp-general">1</a></li>
    <li class="page-item <?php echo ($ntc == 1)?"active":""; ?>"><a class="page-link" href="index.php?ntc=1#crp-general">2</a></li>
    <li class="page-item <?php echo ($ntc == 2)?"active":""; ?>"><a class="page-link" href="index.php?ntc=2#crp-general">3</a></li>
    <li class="page-item <?php echo ($ntc >= 3)?"active":""; ?>">
      <a class="page-link" href="index.php?ntc=<?php echo $ntc+1; ?>#crp-general" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>                    

                </div>

                <div class="col-lg-4 text-center">
                    <h4 class="text-center">Redes Sociales</h4>
                    <iframe width="300" height="500" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRezuam-600773577055743%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    <h4>Youtube</h4>                    
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/8OUVCDw2PG0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- carrusel links externos con bootstrap Option 2-->
    <section class="bg-light mt-3">
        <div class="container py-2">

            <div class="text-center p-4 text-muted">
                <h3 class="">SERVICIOS</h3>
            </div>

            <div id="carousel-links" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <a href="#">
                        <img src="img/img3.jpg" class="d-block m-auto" width="300px" height="120px" alt="...">
                    </a>
                    <div class="text-center py-2">
                        <h3>Servicio 1</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="carousel-item text-center">
                    <a href="#">
                        <img src="img/img3.jpg" class="d-block m-auto" width="300px" height="120px" alt="...">
                    </a>
                    <div class="text-center py-2">
                        <h3>Servicio 2</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="carousel-item text-center">
                    <a href="#">
                        <img src="img/img3.jpg" class="d-block m-auto" width="300px" height="120px" alt="...">
                    </a>
                    <div class="text-center py-2">
                        <h3>Servicio 3</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <!-- Next and Previous. The controls nav links externals -->
            <a class="carousel-control-prev" href="#carousel-links" role="button" data-slide="prev">
                <span class="" aria-hidden="true"> <!-- carousel-control-prev-icon -->
                    <div class="d-md-block">
                        <img src="img/aliados-Flecha.png" class="img-fluid" alt="">
                    </div>
                </span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="carousel-control-next" href="#carousel-links" role="button" data-slide="next">
                <span class="" aria-hidden="true"> <!-- carousel-control-next-icon -->
                    <div class="d-md-block">
                        <img src="img/derecha-aliados.png" class="img-fluid" alt="">
                    </div>
                </span>
                <span class="sr-only">Next-</span>
            </a>
            </div>     
        </div>
    </section>
    <!-- Fin corrusel option two links external -->

    <!-- carrusel links externos con css Option 1-->
    <div class="bg-light">
        <div class="container py-4 ">
            <!-- <div class="text-center p-4 text-muted">
                <h3 class="">INSTITUCIONES EXTERNAS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique assumenda aliquid, eligendi aspernatur minus odio?</p>
            </div> -->
            <div class="text-center p-4 text-muted">
                <h3 class="">ENLACES EXTERNOS</h3>
            </div>
            <div class="content-slider-iex">
                <div class="slider-ie">
                    <!-- copia 2 slider -->
                    <div class="row py-2 m-0">

                        <div class="col-img-ie pl-1">
                            <a href="https://www.muniandahuaylas.gob.pe/" class="">
                                <img src="img/enlaces externos/logo-Municipalidad-Andahuaylas.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://peru.info/es-pe/" class="">
                                <img src="img/enlaces externos/peru_marca.jpg" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="http://www.regionapurimac.gob.pe/" class="">
                                <img src="img/enlaces externos/gr-apurimac.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://portal.osce.gob.pe/osce/content/accesos-al-seace" class="">
                                <img src="img/enlaces externos/LOGO OSCE.png" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www2.seace.gob.pe/" class="">
                                <img src="img/enlaces externos/LOGO-SEACE-WEBTORATA.jpg" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="http://www.minagri.gob.pe/portal/inicio" class="">
                                <img src="img/enlaces externos/LogoMinagri.png" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www.mef.gob.pe/es/" class="">
                                <img src="img/enlaces externos/MEf.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www.pronabec.gob.pe/beca18/" class="">
                                <img src="img/enlaces externos/logo_beca18.png" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www.gob.pe/pcm" class="">
                                <img src="img/enlaces externos/LOGO_PCM.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="http://www.sunat.gob.pe/" class="">
                                <img src="img/enlaces externos/sunat.jpg" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                         
                        <!-- reepeat img -->
                        <div class="col-img-ie pl-1">
                            <a href="https://www.muniandahuaylas.gob.pe/" class="">
                                <img src="img/enlaces externos/logo-Municipalidad-Andahuaylas.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://peru.info/es-pe/" class="">
                                <img src="img/enlaces externos/peru_marca.jpg" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="http://www.regionapurimac.gob.pe/" class="">
                                <img src="img/enlaces externos/gr-apurimac.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://portal.osce.gob.pe/osce/content/accesos-al-seace" class="">
                                <img src="img/enlaces externos/LOGO OSCE.png" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www2.seace.gob.pe/" class="">
                                <img src="img/enlaces externos/LOGO-SEACE-WEBTORATA.jpg" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="http://www.minagri.gob.pe/portal/inicio" class="">
                                <img src="img/enlaces externos/LogoMinagri.png" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www.mef.gob.pe/es/" class="">
                                <img src="img/enlaces externos/MEf.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www.pronabec.gob.pe/beca18/" class="">
                                <img src="img/enlaces externos/logo_beca18.png" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="https://www.gob.pe/pcm" class="">
                                <img src="img/enlaces externos/LOGO_PCM.png" class="img-fluid" style="width: 100%" alt="">
                            </a>
                        </div>
                        <div class="col-img-ie pl-1">
                            <a href="http://www.sunat.gob.pe/" class="">
                                <img src="img/enlaces externos/sunat.jpg" class="img-fluid" style="width: 100%" alt="">
                            </a>                        
                        </div>
                                                
                        
                    </div>            
                </div>
            </div>
        </div>
    </div>

<!-- Footer Mapa, redes S. CVontáctenos -->
<section class="bg-light py-3" >
    <div class="container">
        <div class="row pt-3">

            <div class="col-lg-6"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7604.019932921301!2d-73.37051921823105!3d-13.527162043494654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d31fc6a8bbcab%3A0x48b4aac2a35c1ec6!2sAndarapa!5e1!3m2!1ses-419!2spe!4v1558811580842!5m2!1ses-419!2spe" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                <span class="">
                    Andarapa, Apurimac
                </span>                    
            </div>
            <div class="col-lg-3  lead text-center text-md-left">
                <h4 class="display-5">Siguenos</h4>
                <ul class="list-unstyled">
                    <li class="py-1">                        
                        <a href="#" class="text-decoration-none">
                            <i class="mx-1 fab fa-facebook-f"></i>
                            <span class="text-primary">Facebook</span>                       
                        </a> 
                    </li>
                    <li class="py-1">
                        <a href="#" class="text-decoration-none">
                            <i class="mx-1 fab fa-twitter "></i>
                            <span class="text-primary">Twitter</span>
                        </a>                        
                    </li>
                    <li class="py-1">                        
                        <a href="#" class="text-decoration-none">
                            <i class="mx-1 fab fa-instagram "></i>
                            <span class="text-primary">Instagram</span>
                        </a>
                    </li>
                </ul>    
            </div>   
            <div class="col-lg-3  lead text-center text-md-left">
                <h4 class="display-5">Contactanos</h4>
                <ul class="list-unstyled">
                    <li class="py-1">
                        <i class="ml-2 fas fa-user-circle"></i> Imágen Institucional. 
                        <br>
                        <i class="ml-2 fas fa-user-circle"></i> Oficina Permanente. 
                        <br>
                        <i class="ml-2 fas fa-phone-square"></i> 999 - 123 - 456
                        <br>
                        <a href="#"><i class="mx-2 fab fa-facebook-f text-secondary "></i></a>
                        <a href="#"><i class="mx-2 fab fa-twitter text-secondary "></i></a>
                        <a href="#"><i class="mx-2 fab fa-instagram text-secondary "></i></a>

                    </li>
                    <li class="py-1">
                        <i class="ml-2 fas fa-user-circle"></i>  Muni Andarapa.
                        <br>
                        <i class="ml-2 fas fa-user-circle"></i> Av. 24 de Junio-Andarpa 
                        <br>
                        <i class="ml-2 fas fa-phone-square"></i> 912 - 345 - 789
                        <br>
                        <a href="#"><i class="mx-2 fab fa-facebook-f text-secondary "></i></a>
                        <a href="#"><i class="mx-2 fab fa-twitter text-secondary "></i></a>
                        <a href="#"><i class="mx-2 fab fa-instagram text-secondary "></i></a>

                    
                </ul>
            </div>
            
        </div>
    </div>
</section>    

<!-- Footer Pie de página Copy Rezuam -->
<?php include('pie-page.php'); ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
